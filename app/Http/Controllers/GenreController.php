<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGenreRequest;
use App\Http\Requests\UpdateGenreRequest;
use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::paginate(5);
        return view('dashboard.genre.index', compact('genres'));
    }

    public function create()
    {
        return view('dashboard.genre.create');
    }

    public function store(StoreGenreRequest $request)
    {
        $data = $request->validated();

        Genre::create($data);

        return to_route('dashboard.genre.index');
    }

    public function show(Genre $genre)
    {
        //
    }

    public function edit(Genre $genre)
    {
        //
    }

    public function update(UpdateGenreRequest $request, Genre $genre)
    {
        //
    }

    public function destroy(Genre $genre)
    {
        $genre->delete();

        return to_route('dashboard.genre.index');
    }
}
