<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController1 extends Controller
{
    //
    public function index()
    {
        // 1. Lấy danh sách thể loại cho thanh Menu bên trái
        $genre = DB::table('genre')->get(); 

        // 2. Lấy 12 bộ phim cho phần nội dung chính (Ý 1)
        $movies = Movie::where('popularity', '>', 450)
                    ->where('vote_average', '>', 7)
                    ->orderBy('release_date', 'desc')
                    ->limit(12)
                    ->get();

        // 3. Gửi cả 2 biến này sang view
        return view('movie.index', ['movies' => $movies, 'genre' => $genre]); 
    }
}
