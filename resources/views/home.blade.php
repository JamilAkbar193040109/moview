@extends('layouts.master-front')

@section('content')
  <section class="hero from-modern-accent bg-gradient-to-b to-transparent px-4 py-10 md:py-20 xl:px-0">
    <div class="mx-auto flex max-w-6xl flex-col items-center justify-between gap-y-4 md:flex-row">
      <div>
        <h1 class="mb-2 text-5xl font-bold md:mb-4 md:text-6xl">Welcome to <br><span class="text-sky-600">Moview!</span></h1>
        <p class="text-gray-600">Platform where you can find your favorite movies and share your thoughts about them. <br class="hidden md:block"> You can also read reviews from other users to help you decide which movie to watch next.</p>
        <div class="mt-6 flex flex-col gap-4 md:mt-8 md:flex-row">
          <a class="flex items-center justify-center rounded-full bg-sky-600 px-4 py-2 text-white transition-colors hover:bg-sky-700" href="{{ route('movies') }}">
            <i class="fa-solid fa-film pr-2"></i>Explore Movies</a>
          <a class="flex items-center justify-center rounded-full bg-sky-100 px-4 py-2 text-sky-600 transition-colors hover:bg-sky-200" href="{{ route('login') }}">
            <i class="fa-solid fa-comments pr-2"></i>Give a Review</a>
        </div>
      </div>
      <div class="">
        <img class="h-96 w-96 rounded-lg object-cover" src="{{ asset('storage/poster/' . $movies[0]->poster) }}" alt="">
      </div>
    </div>
  </section>

  <section class="hot-movie px-4 py-10">
    <div class="mx-auto max-w-6xl">
      <h2 class="mb-8 text-center text-3xl font-bold md:text-4xl">Recent Movies</h2>
      <div class="grid grid-cols-2 gap-5 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($movies as $movie)
          <a class="hover:underline" href="{{ route('movies.show', $movie->id) }}">
            <div class="overflow-hidden rounded-md ring-1 ring-slate-300 transition duration-200 hover:ring-sky-600">
              <div class="h-[16.5rem] overflow-hidden md:h-[25rem]">
                <img class="h-full w-full object-cover" src="{{ asset('storage/poster/' . $movie->poster) }}" alt="Movie 1">
              </div>
              <div class="p-2">
                <h3 class="text-normal font-semibold md:text-lg">{{ $movie->judul }} ({{ $movie->tahun_rilis }})</h3>
                <p>Genre: {{ $movie->genre }}</p>
              </div>
            </div>
          </a>
        @endforeach
      </div>
      <a class="focus:shadow-outline text-dark bg- hover:text-theme-base mx-auto mt-8 flex w-fit items-center rounded-lg px-4 py-2 text-sm leading-tight focus:outline-none active:scale-95" href="{{ route('movies') }}">
        <i class="fa-solid fa-arrow-right pr-2"></i>
        <span class="ml-2 hover:underline">See More</span>
      </a>
    </div>
  </section>

  <section class="review px-4 py-10">
    <div class="mx-auto max-w-6xl">
      <h2 class="mb-8 text-center text-3xl font-bold md:text-4xl">Recent Reviews</h2>
      <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($reviews as $review)
          <div class="bg-modern-accent rounded-md p-4">
            <h3 class="text-lg font-semibold">{{ $review->movie->judul }} ({{ $review->movie->tahun_rilis }})</h3>
            <div class="mb-3 flex items-center gap-4">
              <p class="text-sm">
                <i class="fa-solid fa-user pr-2 text-sky-600"></i>
                <span class="font-semibold">{{ $review->user->name }}</span>
              </p>
              <p class="text-sm">
                <i class="fa-solid fa-star pr-2 text-yellow-500"></i>
                <span class="font-semibold">{{ $review->rating }}/10</span>
              </p>
            </div>
            <p class="line-clamp-3">{{ $review->review_text }}</p>
          </div>
        @endforeach
      </div>
  </section>

  <section class="px-4 py-5">
    <div class="mx-auto max-w-6xl rounded-lg bg-amber-400 p-8 text-center">
      <h2 class="mb-4 text-3xl font-bold md:text-4xl">Wanna make your review?</h2>
      <p class="mb-6 text-slate-800">Become a member and start exploring and reviewing your favorite movies.</p>
      <a class="inline-block rounded-full bg-red-600 px-6 py-3 text-white transition-colors hover:bg-red-700" href="{{ route('register') }}">
        <i class="fa-solid fa-user-plus pr-2"></i>Sign Up Now</a>
    </div>
  </section>
@endsection
