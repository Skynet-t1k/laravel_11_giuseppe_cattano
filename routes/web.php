<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');


//CRUD All in One :
Route::resource('games', GameController::class);
