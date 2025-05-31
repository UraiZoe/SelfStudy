<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AttemptController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\StudySetController;

// Nyílt, nem admin: pl. front-end felhasználói műveletek (ha szükséges)
Route::resource('users', UserController::class);
Route::resource('attempts', AttemptController::class);
Route::resource('levels', LevelController::class);
Route::resource('study_sets', StudySetController::class);
// …stb.

// Admin csoportra alkalmazott route-okon belül csak az 'admin' middleware működik
Route::middleware(['auth', 'isAdmin'])
     ->prefix('admin')
     ->name('admin.')
     ->group(function () {
         // Admin-View: felhasználók kezelése
         Route::resource('users', AccountController::class);
         // Admin-View: attempt-ek kezelése
         Route::resource('attempts', AttemptController::class);
         // Admin-View: szintek kezelése
         Route::resource('levels', LevelController::class);
         // Admin-View: study_set-ek kezelése
         Route::resource('study_sets', StudySetController::class);
     });
Route::view('/', 'welcome')->name('home');
Route::view('/quiz', 'quiz.welcome')->name('quiz.home');
Route::view('/games', 'games.welcome')->name('games.home');
Route::view('/games/cooking', 'games.cooking.welcome')->name('games.cooking');
Route::view('/games/numberCalculation', 'games.numberCalculation.welcome')->name('games.numberCalculation');
Route::view('/games/map', 'games.map.welcome')->name('games.map');
Route::view('/auth', 'auth.admin')->name('auth.admin');
Route::view('/login', 'auth.login')->name('auth.login');
Route::view('/moderator', 'auth.moderator')->name('auth.moderator');
Route::view('/register', 'auth.register')->name('auth.register');