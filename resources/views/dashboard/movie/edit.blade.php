@extends('layouts.back.master-back')

@section('title', 'Edit Data Film')
@section('content')
  <section class="movies">
    <div class="mb-4 flex items-center justify-between">
      <h2 class="text-2xl font-semibold">Ubah Data Film</h2>
      <a class="focus:shadow-outline flex w-fit items-center rounded-lg px-4 py-2 text-sm leading-tight focus:outline-none active:scale-95" href="{{ route('dashboard.movies.index') }}"><i class="fa-solid fa-arrow-left"></i> <span class="ml-2">Kembali</span></a>
    </div>

    <div class="card w-full rounded-md p-4 md:w-1/2">
      <form action="{{ route('dashboard.movies.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-6">
          <label class="text-text mb-2 block font-medium" for="judul">Judul</label>
          <x-dashboard.text-input class="mt-1 block w-full" id="judul" name="judul" type="text" :value="old('judul', $movie->judul)" required />
          <x-dashboard.input-error class="mt-1" :messages="$errors->get('judul')" />
        </div>
        <div class="mb-6">
          <label class="text-text mb-2 block font-medium" for="tahun_rilis">Tahun Rilis</label>
          <x-dashboard.text-input class="mt-1 block w-full" id="tahun_rilis" name="tahun_rilis" type="number" :value="old('tahun_rilis', $movie->tahun_rilis)" required />
          <x-dashboard.input-error class="mt-1" :messages="$errors->get('tahun_rilis')" />
        </div>
        <div class="mb-6">
          <label class="text-text mb-2 block font-medium" for="genre">Genre</label>
          <select class="block w-full rounded-md border border-gray-500 bg-transparent text-sm dark:text-white" id="genre" name="genre">
            <option>Pilih Genre</option>
            @foreach ($genres as $key => $item)
              <option value="{{ $item }}" @selected(old('genre', $movie->genre) == $item)>{{ $item }}</option>
            @endforeach
          </select>
          <x-dashboard.input-error class="mt-1" :messages="$errors->get('genre')" />
        </div>
        <div class="mb-6">
          <label class="text-text mb-2 block font-medium" for="sutradara">Sutradara</label>
          <x-dashboard.text-input class="mt-1 block w-full" id="sutradara" name="sutradara" type="text" :value="old('sutradara', $movie->sutradara)" />
          <x-dashboard.input-error class="mt-1" :messages="$errors->get('sutradara')" />
        </div>
        <div class="mb-6">
          <label class="text-text mb-2 block font-medium" for="poster">Poster</label>
          <input class="w-full overflow-clip rounded-md border border-gray-500 text-sm text-neutral-600 file:mr-4 file:cursor-pointer file:border-none file:bg-neutral-50 file:px-4 file:py-2 file:font-medium file:text-neutral-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-600 disabled:cursor-not-allowed disabled:opacity-75 dark:border-gray-500 dark:text-neutral-300 dark:file:bg-neutral-900 dark:file:text-white dark:focus-visible:outline-indigo-600" id="poster" name="poster" type="file" accept="image/png, image/jpeg" />
          <small class="pl-0.5">*PNG, JPG - Max 5MB</small>
          <x-dashboard.input-error class="mt-1" :messages="$errors->get('poster')" />
        </div>
        <div class="mb-6">
          <label class="text-text mb-2 block font-medium" for="sinopsis">Sinopsis</label>
          <textarea class="block w-full rounded-md border border-gray-500 bg-transparent text-sm" id="sinopsis" name="sinopsis" cols="30" rows="10">{{ old('sinopsis', $movie->sinopsis) }}</textarea>
          <x-dashboard.input-error class="mt-1" :messages="$errors->get('sinopsis')" />
        </div>

        <x-dashboard.button-submit>Simpan</x-dashboard.button-submit>
      </form>
    </div>
  </section>
@endsection
