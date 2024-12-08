@extends('layouts.back.master-back')

@section('title', 'List Movies')
@section('content')
  <section class="movies mx-auto">
    <div class="mb-5 flex items-center justify-between">
      <h2 class="text-2xl font-semibold leading-none">List Movies</h2>
      <a class="cursor-pointer whitespace-nowrap rounded-md bg-amber-600 px-4 py-2 text-center text-sm font-medium tracking-wide text-white transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-600 active:opacity-100 active:outline-offset-0 disabled:cursor-not-allowed disabled:opacity-75 dark:bg-indigo-600 dark:text-white dark:focus-visible:outline-indigo-600" href="#">Tambah</a>
    </div>
    <!-- <div class="relative mb-3 flex w-full max-w-xs flex-col gap-1 text-neutral-600 dark:text-neutral-300">
      <i class="fa-solid fa-magnifying-glass absolute left-3 top-3"></i>
      <input class="w-full rounded-md border border-neutral-300 bg-neutral-50 py-2 pl-10 pr-2 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-600 disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:focus-visible:outline-indigo-600" name="search" type="search" aria-label="search" placeholder="Search" />
    </div> -->
    <div class="w-full overflow-hidden overflow-x-auto rounded-md border border-neutral-300 dark:border-neutral-700">
      <table class="w-full text-left text-sm text-neutral-600 dark:text-neutral-300">
        <thead class="border-b border-neutral-300 bg-neutral-50 text-sm text-neutral-900 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white">
          <tr>
            <th class="p-4" scope="col">No.</th>
            <th class="p-4" scope="col">Judul</th>
            <th class="p-4" scope="col">Tahun Rilis</th>
            <th class="p-4" scope="col">Genre</th>
            <th class="p-4" scope="col">Sutradara</th>
            <th class="p-4" scope="col">Poster</th>
            <th class="p-4" scope="col">Action</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-neutral-300 dark:divide-neutral-700">
          @forelse ($movies as $movie)
            <tr>
              <td class="p-4">{{ $loop->iteration }}</td>
              <td class="p-4">{{ $movie->judul }}</td>
              <td class="p-4">{{ $movie->tahun_rilis }}</td>
              <td class="p-4">{{ $movie->genre }}</td>
              <td class="p-4">{{ $movie->sutradara }}</td>
              <td class="p-4">{{ $movie->poster }}</td>
              <td class="p-4"><button class="cursor-pointer whitespace-nowrap rounded-md bg-transparent p-0.5 font-semibold text-amber-600 outline-amber-600 hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-indigo-600 dark:outline-indigo-600" type="button">Edit</button></td>
            </tr>
          @empty
            <tr>
              <td class="p-4 text-center" colspan="7">Data Kosong</td>
            </tr>
          @endforelse

        </tbody>
      </table>
    </div>
  </section>
  <div class="mt-4 flex justify-center">
    {{ $movies->links() }}
  </div>
@endsection
