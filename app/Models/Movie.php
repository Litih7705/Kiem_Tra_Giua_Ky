<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    // Khai báo đúng tên bảng trong CSDL
    protected $table = 'movie'; 
    
    // Đề phòng bảng không có created_at, updated_at, bạn nên thêm dòng này để các bạn khác không bị lỗi khi Thêm/Sửa dữ liệu:
    public $timestamps = false; 
}