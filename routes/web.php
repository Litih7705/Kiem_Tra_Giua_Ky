<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController3;

Route::get('/', [App\Http\Controllers\MovieController1::class, 'index']);
Route::get('/search', [MovieController3::class, 'search'])->name('movie.search');