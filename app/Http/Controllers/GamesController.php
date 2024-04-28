<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Genres;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index(): View
    {
        $featured = Game::where('featured', '!=', '0')->orderBy('featured', 'DESC')->limit(5)->get();
        $games = Game::all();
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
    
        $games = $query->with('assets')->with('platforms')->with('platforms.platform')->paginate(5);
        
        $gamesHtml = view('includes.pagination', compact('games'))->render();
    
        return response()->json(['html' => $gamesHtml, 'data' => $games]);
    }
    
}
