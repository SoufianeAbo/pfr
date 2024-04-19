<?php

use App\Http\Controllers\CareersController;
use App\Http\Controllers\GamesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/games', [GamesController::class, 'index'])->name('games.index');
Route::get('/careers', [CareersController::class, 'index'])->name('careers.index');
