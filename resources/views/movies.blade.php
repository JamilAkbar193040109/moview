@extends('layouts.master-front')

@section('title', 'Movies')
@section('content')
  <section class="movies mx-auto max-w-6xl px-4 py-10 lg:px-0" x-data="liveSearch()" x-init='results = @json($movies)'>
    <h2 class="mb-5 text-center text-3xl font-bold md:text-4xl">List Movies</h2>
    <div class="mb-5 flex items-end justify-between">
      {{-- search --}}
      <div class="relative flex w-full max-w-xs flex-col gap-1 text-neutral-600">
        <svg class="size-5 absolute left-2.5 top-1/2 -translate-y-1/2 text-neutral-600/50" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
        </svg>
        <input class="w-full rounded-lg border-2 border-neutral-700 bg-modern-accent py-2 pl-10 pr-2 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 disabled:cursor-not-allowed disabled:opacity-75" type="text" x-model="query" @input.debounce.300ms="search" placeholder="Search Films.." />
      </div>
    </div>

    <div class="grid grid-cols-2 gap-4 md:grid-cols-4 lg:grid-cols-6">
      <template x-for="movie in results" :key="movie.id">
        <div class="card overflow-hidden rounded-br-xl rounded-tl-xl bg-white ring-1 ring-slate-300 transition duration-200 hover:-translate-y-2 hover:ring-sky-600">
          <div class="card-header h-[16.5rem] overflow-hidden">
            <a :href="'/movies/' + movie.id">
              <img class="h-full w-full object-cover" :src="'storage/poster/' + movie.poster" :alt="movie.judul">
            </a>
          </div>
          <div class="card-body p-2">
            <h3 class="text-base font-semibold" x-text="movie.judul"></h3>
            <p><span x-text="movie.tahun_rilis"></span> | <span x-text="movie.genre"></span></p>
          </div>
        </div>
      </template>
    </div>
  </section>

  @push('scripts')
    <script>
      function liveSearch() {
        return {
          query: '',
          results: [],
          search() {
            if (this.query !== '') {
              fetch('/search-movies?query=' + this.query)
                .then(
                  response => response.json()
                )
                .then(
                  data => (this.results = data)
                );
            } else {
              this.results = @json($movies);
            }
          }
        }
      }
    </script>
  @endpush
@endsection
