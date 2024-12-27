@extends('layouts.master-front')

@section('title')
  {{ $movie->judul }} ({{ $movie->tahun_rilis }})
@endsection
@section('content')
  <section class="detail-movie mx-auto max-w-6xl px-4 py-10 lg:px-0">
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-12">
      <div class="col-span-3 mx-auto w-64 overflow-hidden">
        <img class="h-auto w-full object-cover" src="{{ asset('storage/poster/' . $movie->poster) }}" alt="">
      </div>
      <div class="col-span-9 space-y-5">
        <h2 class="mb-4 text-3xl font-bold">{{ $movie->judul }}</h2>
        <div>
          <h4 class="font-semibold tracking-wide">Rating:</h4>
          <p class="text-base">
            <i class="fas fa-star text-yellow-500"></i>
            {{ $movie->reviews->avg('rating') }}
          </p>
        </div>
        <div>
          <h4 class="font-semibold tracking-wide">Tahun Rilis:</h4>
          <p class="text-base">{{ $movie->tahun_rilis }}</p>
        </div>
        <div>
          <h4 class="font-semibold tracking-wide">Genre:</h4>
          <p class="text-base">{{ $movie->genre }}</p>
        </div>
        <div>
          <h4 class="font-semibold tracking-wide">Sutradara:</h4>
          <p class="text-base">{{ $movie->sutradara }}</p>
        </div>
        <div>
          <h4 class="font-semibold tracking-wide">Sinopsis:</h4>
          <p class="text-base">{{ $movie->sinopsis }}</p>
        </div>
      </div>
    </div>

    <div class="mt-10">
      <h2 class="mb-4 text-2xl font-bold">User Reviews</h2>
      <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
        @forelse ($movie->reviews as $review)
          <div class="card mb-4 w-full rounded-md bg-modern-accent p-4">
            <div class="card-body" x-data="{ expanded: false }">
              <div class="mb-3 flex items-center gap-4">
                <p class="text-sm">
                  <i class="fa-solid fa-user pr-2 text-sky-600"></i>
                  <span class="font-semibold">{{ $review->user->name }}</span>
                </p>
                <span>|</span>
                <p class="text-sm">
                  <i class="fa-solid fa-star pr-2 text-yellow-500"></i>
                  <span class="font-semibold">{{ $review->rating }}/10</span>
                </p>
              </div>
              <p class="card-text">
                <span x-show="!expanded">{{ Str::limit($review->review_text, 150) }}</span>
                <span x-show="expanded">{{ $review->review_text }}</span>
              </p>
              <button class="mt-3 block w-fit rounded-md bg-theme-foam p-2 text-sm text-theme-base hover:underline" x-on:click="expanded = !expanded"><span x-text="expanded ? 'Read Less' : 'Read More'"></span></button>
            </div>
          </div>
        @empty
          <div class="card mb-4 w-full rounded-md">
            <div class="card-body">
              <p class="card-text">Belum ada review untuk film ini.</p>
            </div>
          </div>
        @endforelse
      </div>
    </div>

  </section>
@endsection
