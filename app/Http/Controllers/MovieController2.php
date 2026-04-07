<?php
namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;


class MovieController2 extends Controller {
    // 1. Lọc phim theo thể loại (Mục 2 - Ý 2)
    public function getCategory($id) {
        $movies = Movie::whereHas('genres', function($query) use ($id) {
            $query->where('genre.id', $id);
        })
        ->where('status', 1) // Chỉ lấy phim chưa xóa mềm
        ->orderBy('release_date', 'desc')
        ->limit(12)
        ->get();


        return view('category', compact('movies'));
    }


    // 2. Trang chi tiết phim (Mục 2 - Ý 4)
    public function getDetail($id) {
        $movie = Movie::where('id', $id)
                      ->where('status', 1)
                      ->firstOrFail(); // Trả về 404 nếu không tìm thấy phim
        return view('detail.index', compact('movie'));
    }
}

