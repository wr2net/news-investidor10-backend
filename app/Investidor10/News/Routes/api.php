<?php

use Illuminate\Support\Facades\Route;

Route::get('news', 'NewsController@index')
    ->name('index');

Route::post('news', 'NewsController@store')
    ->name('store');

Route::get('news/{news}', 'NewsController@show')
    ->name('show');

Route::put('news/{news}', 'NewsController@update')
    ->name('update');
//middleware(['auth:api'])->
Route::patch('news/{news}/disable', 'NewsController@disable')
    ->name('disable');
//middleware(['auth:api'])->
Route::patch('news/{news}/enable', 'NewsController@enable')
    ->name('enable');
//middleware(['auth:api'])->
Route::delete('news/{news}', 'NewsController@destroy')
    ->name('destroy');
