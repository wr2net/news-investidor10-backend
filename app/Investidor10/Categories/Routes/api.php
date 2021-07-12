<?php

use Illuminate\Support\Facades\Route;

Route::get('categories', 'CategoryController@index')
    ->name('index');

Route::post('categories', 'CategoryController@store')
    ->name('store');

Route::get('categories/{category}', 'CategoryController@show')
    ->name('show');

Route::put('categories/{category}', 'CategoryController@update')
    ->name('update');
//middleware(['auth:api'])->
Route::patch('categories/{category}/disable', 'CategoryController@disable')
    ->name('disable');
//middleware(['auth:api'])->
Route::patch('categories/{category}/enable', 'CategoryController@enable')
    ->name('enable');
//middleware(['auth:api'])->
Route::delete('categories/{category}', 'CategoryController@destroy')
    ->name('destroy');
