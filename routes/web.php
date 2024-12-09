<?php
use App\Http\Controllers\MixController;  
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\TvController;

Route::get('/', [MixController::class, 'index'])->name('mix.index');

Route::get('/movie', [MoviesController::class, 'index'])->name('movie.index');
Route::get('/movie/{id}', [MoviesController::class, 'show'])->name('movie.show');

Route::get('/tv', 'App\Http\Controllers\TvController@index')->name('tv.index');
Route::get('/tv/{id}', 'App\Http\Controllers\TvController@show')->name('tv.show');
