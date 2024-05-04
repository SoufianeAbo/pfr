<?php

namespace App\Http\Controllers;

use App\Models\Game;
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
}
