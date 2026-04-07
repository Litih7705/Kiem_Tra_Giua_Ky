<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController5;


Route::get('/', [App\Http\Controllers\MovieController1::class, 'index']);



Route::get('/admin/movie/create', [MovieController5::class, 'create'])->name('admin.movie.create');
Route::post('/admin/movie/store', [MovieController5::class, 'store'])->name('admin.movie.store');
