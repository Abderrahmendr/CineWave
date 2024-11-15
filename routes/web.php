<?php
use App\Http\Controllers\MoviesController;

Route::get('/', [MoviesController::class, 'index'])->name('movie.index');
Route::get('/movie/{id}', [MoviesController::class, 'show'])->name('movie.show');
