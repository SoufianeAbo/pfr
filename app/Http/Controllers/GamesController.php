<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\GameAssets;
use App\Models\Genres;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GamesController extends Controller
{
    public function index(): View
    {
        $featured = Game::where('featured', '!=', '0')->orderBy('featured', 'DESC')->limit(5)->get();
        $games = Game::where('status', '!=', 'Released')->get();
        $genres = Genres::all();
    
        return view('games', compact('featured', 'games', 'genres'));
    }

    public function specificGame($game): View
    {
        $project = Game::find($game);
        $ext = substr($project->pictures->pageVid, -4);
        $extHead = substr($project->pictures->headerVid, -4);

        $gamesLike = Game::all()->where('genreID', $project->genreID)->take(4);

        return view('gamepage', compact('project', 'ext', 'extHead', 'gamesLike'));
    }

    public function searchAndFilter(Request $request)
    {
        $keyword = $request->input('keyword');
        $genre = $request->input('genre');
        
        $query = Game::query();
    
        if ($keyword !== null) {
            $query->where('title', 'like', "%$keyword%");
        }
    
        if ($genre !== null && $genre !== 'all') {
            $query->whereHas('genre', function($q) use ($genre) {
                $q->where('id', $genre);
            });
        }
    
        $games = $query->with('assets')->where('status', '!=', 'In Development')->with('platforms')->with('platforms.platform')->paginate(5);
        
        $gamesHtml = view('includes.pagination', compact('games'))->render();
    
        return response()->json(['html' => $gamesHtml, 'data' => $games]);
    }

    public function searchSGD(Request $request)
    {
        $query = $request->input('query');

        $apiKey = 'ec6bebaed409fe293eace9c4490d3af2';

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiKey,
        ])->withOptions(["verify"=>false])->get("https://www.steamgriddb.com/api/v2/search/autocomplete/{$query}");
    
        $results = $response->json()['data'];

        if (!empty($results)) {
            $firstResult = array_shift($results);

            $gameId = $firstResult['id'];

            $gridResponse = Http::withHeaders([
                'Authorization' => 'Bearer ' . $apiKey,
            ])->withOptions(["verify" => false])->get("https://www.steamgriddb.com/api/v2/grids/game/{$gameId}?dimensions=600x900");

            $gridResults = array_slice($gridResponse->json()['data'], 0, 3);

            return response()->json($gridResults);
        } else {
            return response()->json([]);
        }

    }

    public function createGame(Request $request)
    {
        if ($request->file == null && $request->fileAPI == null) {
            return redirect()->back()->with('tryagain', 'You must at least upload a picture or select a pre-existing image from the API.');
        }
    
        $validated = Validator::make($request->all(), [
            'creatorID' => 'required',
            'gameTitle' => 'required|max:20',
            'gameSubtitle' => 'required|max:100',
            'releaseDate' => 'required',
            'genreID' => 'required',
            'gameDeveloper' => 'required',
            'file' => 'nullable',
            'fileAPI' => 'nullable',
        ]);

        $game = new Game;
        $game->title = $request->gameTitle;
        $game->subtitle = $request->gameSubtitle;
        $game->releaseDate = $request->releaseDate;
        $game->status = 'In Development';
        $game->genreID = $request->genreID;
        $game->featured = '0';
        $game->developer = $request->gameDeveloper;
        $game->creatorID = $request->creatorID;
        $game->esrb = 'RP';
        $game->save();

        $gameAssets = new GameAssets;
        $gameAssets->gameID = $game->id;

        if ($request->file == null) {
            $gameAssets->gridVertical = $request->fileAPI;
        } else {
            $picturePath = $request->file('file')->store('public/games');
            $picturePath = str_replace('public/', '', $picturePath);
            $gameAssets->gridVertical = $picturePath;
        }

        $gameAssets->save();
        return redirect()->route('dashboard')->with('success', 'Your game ' . $game->title . 'has successfully been created!');

    }

    public function editGame(Request $request)
    {
        // if ($request->file == null && $request->fileAPI == null) {
        //     return redirect()->back()->with('tryagain', 'You must at least upload a picture or select a pre-existing image from the API.');
        // }

        $validated = Validator::make($request->all(), [
            'gameID' => 'required',
            'creatorID' => 'required',
            'gameTitle' => 'required|max:20',
            'gameSubtitle' => 'required|max:100',
            'releaseDate' => 'required',
            'genreID' => 'required',
            'gameDeveloper' => 'required',
            'status' => 'nullable',
            'file' => 'nullable',
            'fileAPI' => 'nullable',
        ]);

        $game = Game::find($request->gameID);
        $game->title = $request->gameTitle;
        $game->subtitle = $request->gameSubtitle;
        $game->releaseDate = $request->releaseDate;
        $game->status = $request->gameStatus;
        $game->genreID = $request->genreID;
        $game->developer = $request->gameDeveloper;
        $game->save();

        $gameAssets = GameAssets::where('gameID', $request->gameID)->first();

        if ($request->file !== null) {
            $picturePath = $request->file('file')->store('public/games');
            $picturePath = str_replace('public/', '', $picturePath);
            $gameAssets->gridVertical = $picturePath;
        } 
        
        if ($request->fileAPI !== null) {
            $gameAssets->gridVertical = $request->fileAPI;
        }
        
        $gameAssets->save();
        return redirect()->route('dashboard')->with('success', 'Your game ' . $game->title . 'has been edited successfully!');
    }
    
}
