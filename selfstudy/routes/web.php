<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AttemptController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\StudySetController;

Route::resource('users', UserController::class);
Route::resource('account', AccountController::class);
Route::resource('attempts', AttemptController::class);
Route::resource('level', LevelController::class);
Route::resource('studyset', StudySetController::class);

Route::get('/', function () {
    return view('welcome');
});
