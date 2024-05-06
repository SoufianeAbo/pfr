<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\GameAssets;
use App\Models\GamePictures;
use App\Models\GamePlatforms;
use App\Models\GameText;
use App\Models\Platforms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GDController extends Controller
{
    public function index()
    {
        $employee = Auth::user();

        return view('employee.gd.dashboard', compact('employee'));
    }

    public function gamePage()
    {
        $employee = Auth::user();
        $createdGame = Game::where('creatorID', $employee->id)->first();

        return view('employee.gd.gamePage', compact('employee', 'createdGame'));
    }

    public function modifyGamePage(Request $request)
    {
        $gameAssets = GameAssets::find($request->gameID);

        $gameAssets->bgColor = $request->backgroundColor;

        $gamePictures = GamePictures::where('gameID', $request->gameID)->first();

        if ($request->file !== null) {
            $picturePath = $request->file('file')->store('public/gameAssets');
            $picturePath = str_replace('public/', '', $picturePath);
            $gamePictures->smallLogo = $picturePath;
            $gamePictures->bigLogo = $picturePath;
        }

        if ($request->fileAPI !== null) {
            $gamePictures->smallLogo = $request->fileAPI;
            $gamePictures->bigLogo = $request->fileAPI;
        }

        if ($request->filepage !== null) {
            $picturePath = $request->file('filepage')->store('public/gameAssets');
            $picturePath = str_replace('public/', '', $picturePath);
            $gamePictures->pageVid = $picturePath;
            $gamePictures->headerVid = $picturePath;
        }

        if ($request->fileAPIpage !== null) {
            $gamePictures->pageVid = $request->fileAPIpage;
            $gamePictures->headerVid = $request->fileAPIpage;
        }

        if ($request->filebackground !== null) {
            $picturePath = $request->file('filebackground')->store('public/gameAssets');
            $picturePath = str_replace('public/', '', $picturePath);
            $gamePictures->gameBg = $picturePath;
        }

        if ($request->fileAPIbackground !== null) {
            $gamePictures->gameBg = $request->fileAPIbackground;
        }

        $gameText = GameText::where('gameID', $request->gameID)->first();
        $gameText->headerBig = $request->gameTitle;
        $gameText->headerDesc = $request->gameDesc;

        $gameAssets->save();
        $gamePictures->save();
        $gameText->save();

        return redirect()->route('gd.gamepage')->with('success', 'Your game page has been edited successfully!');
    }

    public function addPlatform(Request $request)
    {
        $game = Game::find($request->gameID);
        $platform = Platforms::find($request->platformAdder);
        
        $gamePlatforms = new GamePlatforms;
        $gamePlatforms->gameID = $game->id;
        $gamePlatforms->platformID = $platform->id;
        $gamePlatforms->link = $request->link;
        $gamePlatforms->save();
        
        return redirect()->route('dashboard')->with('success', 'You have successfully added a new platform!');
    }

    public function deletePlatform(Request $request)
    {
        $gamePlatforms = GamePlatforms::where('gameID', $request->gameID)->where('platformID', $request->platformID)->first();
        $gamePlatforms->delete();

        return redirect()->route('dashboard')->with('success', 'Your game has successfully been deleted!');
    }
}
