<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class FrontMoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies', compact('movies'));
    }

    public function show(Movie $movie)
    {
        $movie->load('reviews');
        return view('detail-movie', compact('movie'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $movies = Movie::where('judul', 'like', '%' . $query . '%')->get();
        return response()->json($movies);
    }
}
