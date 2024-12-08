@extends('layouts.back.master-back')

@section('content')
  <section class="genre w-full">
    <div class="mb-4 flex items-center justify-between">
      <h2 class="text-text text-2xl font-semibold">Tambah Genre</h2>
      <a class="focus:shadow-outline flex w-fit items-center rounded-lg px-4 py-2 text-sm leading-tight text-white hover:bg-theme-foam hover:text-theme-base focus:outline-none active:scale-95" href="{{ route('dashboard.genres.index') }}"><i class="fa-solid fa-arrow-left"></i> <span class="ml-2">Kembali</span></a>
    </div>

    <div class="card w-full rounded-md bg-theme-overlay p-4">
      <form action="{{ route('dashboard.genres.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="md:*: grid grid-cols-1 gap-4 md:grid-cols-2">
          <div class="mb-6">
            <label class="text-text mb-2 block font-medium" for="name">Nama Genre</label>
            <x-dashboard.text-input class="mt-1 block w-full" id="name" name="name" type="text" :value="old('name')" required autofocus />
            <x-input-error class="mt-1" :messages="$errors->get('name')" />
          </div>
        </div>

        <x-dashboard.button-submit>Simpan</x-dashboard.button-submit>
      </form>
    </div>
  </section>
@endsection
