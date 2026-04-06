<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;
class Movie extends Model
{
    use HasFactory;
    protected $table = 'movie'; 
    public $timestamps = false; 
    protected $fillable = ['movie_name_vn', 'image', 'release_date', 'status', 'description', 'revenue', 'country', 'runtime'];
    public function genres()
    {
      
        return $this->belongsToMany(Genre::class, 'movie_genre', 'id_movie', 'id_genre');
    }
}