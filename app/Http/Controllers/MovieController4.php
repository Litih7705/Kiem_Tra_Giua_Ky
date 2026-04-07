<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MovieController4 extends Controller
{
    public function adminIndex()
    {
        $movies = DB::table('movie')->where('status', 1)->get();
        return view('admin.movie_list', compact('movies'));
    }
    public function delete(Request $request)
    {
        $id = $request->id;

        DB::table('movie')->where('id', $id)->update(['status' => 0]);
        return redirect()->back()->with('status', 'Đã xóa bộ phim thành công!');
    }
}

