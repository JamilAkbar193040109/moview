<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Movie;
use App\Models\Genre;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::paginate(10);
        return view('dashboard.movie.index', compact('movies'));
    }

    public function create()
    {
        $genres = Genre::pluck('name', 'id');
        return view('dashboard.movie.create', compact('genres'));
    }

    public function store(StoreMovieRequest $request)
    {
        $data = $request->validated();

        $movie = Movie::create($data);
        return to_route('dashboard.movies.index');
    }

    public function show(Movie $movie)
    {
        //
    }

    public function edit(Movie $movie)
    {
        return view('dashboard.movie.edit', compact('movie'));
    }

    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        $data = $request->validated();

        $movie->update($data);

        return to_route('dashboard.movies.index');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();

        return to_route('dashboard.movies.index');
    }
}
