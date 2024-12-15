@extends('layouts.back.master-back')

@section('title', 'Tulis Review')
@section('content')
  <section class="review mx-auto">
    <h2 class="text-text text-2xl font-semibold">Buat Review</h2>
    <form action="{{ route('dashboard.reviews.store') }}" method="POST">
      @csrf
      <div class="card w-full rounded-md p-4">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
          <div class="mb-6">
            <label class="text-text mb-2 block font-medium" for="movie_id">Judul Film</label>
            <select class="block w-full rounded-md border border-gray-500 bg-transparent text-sm" id="movie" name="movie_id">
              <option value="">-- Pilih Film --</option>
              @foreach ($movies as $movie)
                <option value="{{ $movie->id }}">{{ $movie->judul }}</option>
              @endforeach
            </select>
            <x-dashboard.input-error class="mt-1" :messages="$errors->get('movie_id')" />
          </div>
          <div class="mb-6">
            <label class="text-text mb-2 block font-medium" for="rating">Rating</label>
            <div x-data="{ rating: 0, hover: 0 }">
              <div class="flex gap-x-2">
                @for ($i = 1; $i <= 10; $i++)
                  <i class="fa-solid fa-star cursor-pointer text-2xl" x-on:click="rating = {{ $i }}" x-on:mouseover="hover = {{ $i }}" x-on:mouseout="hover = 0" :class="(rating >= {{ $i }} && rating != 0) || hover >= {{ $i }} ? 'text-yellow-500' : 'text-gray-300'"></i>
                @endfor
              </div>
              <input name="rating" type="hidden" x-bind:value="rating">
            </div>
            <x-dashboard.input-error class="mt-1" :messages="$errors->get('rating')" />
          </div>
          <div class="mb-6">
            <label class="text-text mb-2 block font-medium" for="review">Review</label>
            <textarea class="block w-full rounded-md border border-gray-500 bg-transparent text-sm" id="review" name="review_text" cols="30" rows="10">{{ old('review_text') }}</textarea>
            <x-dashboard.input-error class="mt-1" :messages="$errors->get('review_text')" />
          </div>
        </div>

        <x-dashboard.button-submit>Simpan</x-dashboard.button-submit>
      </div>
    </form>
  </section>
@endsection
