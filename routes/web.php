<?php

use App\Http\Controllers\CareersController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home.index');

Route::get('/games', [GamesController::class, 'index'])->name('games.index');
Route::get('/careers', [CareersController::class, 'index'])->name('careers.index');
Route::get('/careers/{career}', [CareersController::class, 'jobOffer'])->name('careers.joboffer');
Route::get('/games/{game}', [GamesController::class, 'specificGame'])->name('game.index');
Route::get('/login', [UserController::class, 'index'])->name('login.index');

Route::get('/dashboard', [UserController::class, 'userIndex'])->name('user.index');