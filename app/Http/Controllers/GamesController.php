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
        $featured = Game::where('featured', '!=', '0')->limit(5)->get();
        $games = Game::all();
        $genres = Genres::all();
    
        return view('games', compact('featured', 'games', 'genres'));
    }

    public function specificGame($game): View
    {
        $project = Game::find($game);
        return view('gamepage', compact('project'));
    }

    public function searchAndFilter(Request $request)
    {
        $keyword = $request->input('keyword');
        $genre = $request->input('genre');
        
        $query = Game::query();
    
        if ($keyword !== null) {
            $query->where('title', 'like', "%$keyword%");
        }
    
        if ($genre !== null) {
            $query->where('genre', $genre);
        }
    
        $games = $query->with('assets')->with('platforms')->with('platforms.platform')->get();
    
        return response()->json($games);
    }
    
}
