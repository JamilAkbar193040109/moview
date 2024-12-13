<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $movies = Movie::limit(4)->get(['id', 'judul', 'genre', 'poster', 'tahun_rilis']);
        return view('home', compact('movies'));
    }
}
