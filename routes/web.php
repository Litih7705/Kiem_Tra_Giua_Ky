<?php

use App\Http\Controllers\MovieController4;
use App\Http\Controllers\MovieController1;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController3;



Route::get('/', [App\Http\Controllers\MovieController1::class, 'index']);
Route::get('/admin/movies', [MovieController4::class, 'adminIndex'])->name('movie.list');
Route::post('/admin/movies/delete', [MovieController4::class, 'delete'])->name('movie.delete');
Route::get('/movie/{id}', [App\Http\Controllers\MovieController1::class, 'detail'])->name('movie.detail');
Route::get('/search', [MovieController3::class, 'search'])->name('movie.search');

use App\Http\Controllers\MovieController2;


// Route cho Menu Thể loại (Mục 2 - Ý 2)
Route::get('/theloai/{id}', [MovieController2::class, 'getCategory'])->name('movie.category');


// Route cho Trang Chi tiết phim (Mục 2 - Ý 4)
Route::get('/chi-tiet/{id}', [MovieController2::class, 'getDetail'])->name('movie.detail');

