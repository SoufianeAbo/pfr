<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index(): View
    {
        return view('games');
    }

    public function specificGame($game): View
    {
        return view('gamepage');
    }
}
