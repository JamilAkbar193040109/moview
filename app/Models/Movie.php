<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    /** @use HasFactory<\Database\Factories\MovieFactory> */
    use HasFactory;

    protected $fillable = [
        'judul',
        'genre',
        'tahun_rilis',
        'sutradara',
        'sinopsis',
        'poster',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
