<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController3 extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $movies = DB::select("select * from movie where movie_name_vn like ?", ["%".$keyword."%"]);

        return view('search.index', [
            'movies' => $movies,
            'keyword' => $keyword
        ]);
    }
}