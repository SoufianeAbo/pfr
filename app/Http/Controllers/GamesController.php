<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index(): View
    {
        $featured = Game::where('featured', '!=', '0')->limit(5)->get();
        $games = Game::all();
    
        return view('games', compact('featured', 'games'));
    }

    public function specificGame($game): View
    {
        return view('gamepage');
    }
}
