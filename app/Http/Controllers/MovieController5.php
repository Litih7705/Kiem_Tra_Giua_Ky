<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MovieController5 extends Controller
{
    public function create()
    {
        return view('admin.add.index'); 
    }

    // Hàm xử lý lưu dữ liệu
    public function store(Request $request) {
    // 1. Validation theo yêu cầu đề bài
    $request->validate([
        'movie_name_en' => 'required',
        'movie_name_vn' => 'required',
        'release_date'  => 'required|date_format:Y-m-d',
        'image'         => 'required|image|mimes:jpeg,png,jpg,gif',
    ], [
        'required'    => 'Trường này không được để trống.',
        'image'       => 'File tải lên phải là định dạng ảnh.',
        'date_format' => 'Ngày phát hành phải nhập theo định dạng: yyyy-mm-dd.',
    ]);

    // 2. Xử lý lưu file ảnh
    $imgName = "";
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $imgName = $file->hashName();
        $file->storeAs('public', $imgName);
    }

    // 3. Lưu vào Database 
    DB::table('movie')->insert([
        'movie_name'    => $request->movie_name_en, 
        'movie_name_vn' => $request->movie_name_vn,
        'original_name' => $request->movie_name_en,
        'release_date'  => $request->release_date,
        'overview_vn'   => $request->overview_vn,
        'image'         => $imgName,
        'status'        => 1, // Trạng thái hoạt động
        'updated_at'    => now(),
    ]);

    return redirect()->route('admin.movie.create')->with('status', 'Thêm bộ phim mới thành công!');
    }
}

