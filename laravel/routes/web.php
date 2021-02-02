<?php

use Illuminate\Support\Facades\Route;

// DRINKS
Route::get('/', 'DrinkController@index') ->name('drinks-index');
Route::get('/show{id}', 'DrinkController@show') ->name('drink-show');
