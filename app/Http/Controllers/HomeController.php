<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $movies = Movie::limit(4)->get(['id', 'judul', 'genre', 'poster', 'tahun_rilis']);
        $reviews = Review::with('user', 'movie')->limit(6)->get();
        return view('home', compact('movies', 'reviews'));
    }
}
