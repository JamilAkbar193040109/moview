@extends('layouts.master-front')

@section('title', 'List Movies')
@section('content')
  <section class="movies mx-auto max-w-6xl px-4 py-10 lg:px-0">
    <h2 class="mb-4 text-2xl font-semibold">List Movies</h2>

    <div class="grid grid-cols-2 gap-4 md:grid-cols-4 lg:grid-cols-6">
      @foreach ($movies as $movie)
        <div class="card bg-white ring-1 ring-slate-300">
          <div class="card-header h-[16.5rem] overflow-hidden">
            <a href="{{ $movie->id }}">
              <img class="w-full" src="{{ $movie->poster }}" alt="{{ $movie->judul }}">
            </a>
          </div>
          <div class="card-body p-2">
            <h3 class="text-base font-semibold">{{ $movie->judul }}</h3>
            <p>{{ $movie->tahun_rilis }} | {{ $movie->genre }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </section>
@endsection
