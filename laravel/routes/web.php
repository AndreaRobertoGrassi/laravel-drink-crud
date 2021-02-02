<?php

use Illuminate\Support\Facades\Route;

// DRINKS
Route::get('/', 'DrinkController@index') ->name('drinks-index');
Route::get('/show{id}', 'DrinkController@show') ->name('drink-show');

Route::get('/create', 'DrinkController@create') ->name('drink-create');
Route::post('/store', 'DrinkController@store') ->name('drink-store');
