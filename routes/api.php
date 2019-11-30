<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('charadas/{id?}','CharadaController@page');
Route::prefix('charada')->group(function(){
  Route::get('/','CharadaController@random')->name('random_charada');
  Route::get('/{id}','CharadaController@show')->name('show_charada');
});

Route::prefix('piada')->group(function(){
    Route::get('/','PiadaController@random')->name('random_piada');
    Route::get('/{id}','PiadaController@show')->name('show_piada');
});
