@extends('layouts.back.master-back')

@section('title', 'List Review')
@section('content')
  <section class="review mx-auto">
    <div class="mb-5 flex items-center justify-between">
      <h2 class="text-2xl font-semibold leading-none">List Reviews</h2>
      <a class="cursor-pointer whitespace-nowrap rounded-md bg-amber-600 px-4 py-2 text-center text-sm font-semibold tracking-wide text-white transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-600 active:opacity-100 active:outline-offset-0 disabled:cursor-not-allowed disabled:opacity-75 dark:bg-indigo-600 dark:text-white dark:focus-visible:outline-indigo-600" href="{{ route('dashboard.reviews.create') }}"><i class="fa-solid fa-plus mr-1 text-sm"></i> Buat Review</a>
    </div>
    <div class="card overflow-x-auto rounded-lg border border-gray-500 p-4">
      <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
        @forelse ($reviews as $review)
          <div class="card w-full rounded-md bg-modern-accent p-4 dark:bg-modern-text">
            <div class="card-body">
              <h5 class="card-title text-xl font-semibold">{{ $review->movie->judul }} ({{ $review->movie->tahun_rilis }})</h5>
              <h6 class="card-subtitle text-theme-muted mb-2 text-sm">By {{ $review->user->name }} | Rating: {{ $review->rating }}/10</h6>
              <p class="card-text text-sm">{{ Str::limit($review->review_text, 150) }}</p>
              <div class="flex gap-x-2">
                <a class="mt-3 block w-fit rounded-md bg-sky-600 p-2 text-sm hover:underline" href="#">Read More</a>
                <a class="text-modern mt-3 block w-fit rounded-md bg-yellow-500 p-2 text-sm hover:underline" href="{{ route('dashboard.reviews.edit', $review->id) }}"><i class="fa-solid fa-pen mr-1"></i></a>
                <form action="{{ route('dashboard.reviews.destroy', $review->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="mt-3 block w-fit rounded-md bg-red-500 p-2 text-sm hover:underline"><i class="fa-solid fa-trash mr-1"></i></button>
                </form>
              </div>
            </div>
          </div>
        @empty
          <div class="col-span-3">
            <p class="text-center">Belum ada review</p>
          </div>
        @endforelse
      </div>
      <div class="mt-4 flex justify-between">
        {{ $reviews->links() }}
      </div>
    </div>
  </section>
@endsection
