<?php


use App\Http\Controllers\MovieController4;
use App\Http\Controllers\MovieController1;
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\MovieController1::class, 'index']);

Route::get('/admin/movies', [MovieController4::class, 'adminIndex'])->name('movie.list');
Route::post('/admin/movies/delete', [MovieController4::class, 'delete'])->name('movie.delete');
Route::get('/movie/{id}', [App\Http\Controllers\MovieController1::class, 'detail'])->name('movie.detail');
