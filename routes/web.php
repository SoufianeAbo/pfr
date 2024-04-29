<?php

use App\Http\Controllers\CareersController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\HRController;
use App\Http\Controllers\UserController;
use App\Models\Game;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $featured = Game::where('featured', '!=', '0')->orderBy('featured', 'DESC')->limit(3)->get();
    
    return view('welcome', compact('featured'));
})->name('home.index');

Route::get('/games', [GamesController::class, 'index'])->name('games.index');
Route::get('/careers', [CareersController::class, 'index'])->name('careers.index');
Route::get('/careers/{career}', [CareersController::class, 'jobOffer'])->name('careers.joboffer');
Route::post('/careers/apply', [CareersController::class, 'apply'])->name('careers.apply');

Route::get('/games/{game}', [GamesController::class, 'specificGame'])->name('game.index');
Route::post('/games/search', [GamesController::class, 'searchAndFilter']);

Route::get('/thankyou', [CareersController::class, 'thankyou'])->name('thank.you');


Route::get('/login', [UserController::class, 'index'])->name('login.index');
Route::post('/login', [UserController::class, 'login'])->name('employee.login');

Route::post('/dashboard/accept', [HRController::class, 'accept'])->name('hr.accept');

Route::get('/dashboard', [UserController::class, 'userIndex'])->name('user.index');