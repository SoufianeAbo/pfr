<?php

use App\Http\Controllers\CareersController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\GDController;
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

Route::middleware(['authCheck'])->group(function () {
    Route::get('/login', [UserController::class, 'index'])->name('login.index');
    Route::post('/login', [UserController::class, 'login'])->name('employee.login');

    Route::post('/dashboard/accept', [HRController::class, 'accept'])->name('hr.accept');
    Route::post('/dashboard/reject', [HRController::class, 'reject'])->name('hr.reject');
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/roles', [HRController::class, 'rolesPage'])->name('hr.roles');
    Route::post('/dashboard/full', [HRController::class, 'full'])->name('hr.full');
    Route::post('/dashboard/available', [HRController::class, 'available'])->name('hr.available');

    Route::post('/dashboard/createGame', [GamesController::class, 'createGame'])->name('create.game');
    Route::post('/dashboard/editGame', [GamesController::class, 'editGame'])->name('edit.game');
    Route::get('/dashboard/gamepage', [GDController::class, 'gamepage'])->name('gd.gamepage');
    Route::post('/dashboard/modifyGamePage', [GDController::class, 'modifyGamePage'])->name('gd.modifyPage');
    Route::post('/dashboard/addPlatform', [GDController::class, 'addPlatform'])->name('gd.addPlatform');
    Route::post('/dashboard/deletePlatform', [GDController::class, 'deletePlatform'])->name('delete.platform');
});

Route::get('/games/{game}', [GamesController::class, 'specificGame'])->name('game.index');
Route::post('/games/search', [GamesController::class, 'searchAndFilter']);

Route::get('/thankyou', [CareersController::class, 'thankyou'])->name('thank.you');

Route::get('/search', [GamesController::class, 'searchSGD'])->name('searchSGD');
Route::get('/search/logo', [GamesController::class, 'searchSGDLogo'])->name('searchSGDLogo');
Route::get('/search/page', [GamesController::class, 'searchSGDPage'])->name('searchSGDPage');
Route::get('/search/screenshot', [GamesController::class, 'searchSGDScreenshot'])->name('searchSGDScreenshot');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');