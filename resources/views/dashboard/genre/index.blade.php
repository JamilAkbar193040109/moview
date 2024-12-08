@extends('layouts.back.master-back')

@section('content')
  <section class="genres mx-auto">
    <div class="mb-5 flex items-center justify-between">
      <h2 class="text-2xl font-semibold leading-none">List Genre</h2>
      <a class="cursor-pointer whitespace-nowrap rounded-md bg-amber-600 px-4 py-2 text-center text-sm font-medium tracking-wide text-white transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-600 active:opacity-100 active:outline-offset-0 disabled:cursor-not-allowed disabled:opacity-75 dark:bg-indigo-600 dark:text-white dark:focus-visible:outline-indigo-600" href="{{ route('dashboard.genres.create') }}">Tambah</a>
    </div>
    <div class="card overflow-x-auto rounded-lg bg-theme-overlay p-4">
      <div class="search float-end">
        <input class="mb-3 mt-1 w-40 rounded-md border border-theme-subtle bg-theme-overlay px-2 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-theme-pine" name="search" type="search" placeholder="Cari...">
      </div>
      <table class="text-text w-full min-w-max table-auto overflow-x-scroll text-sm">
        <thead>
          <tr class="border-b">
            <th class="p-2 text-left">No.</th>
            <th class="p-2 text-left">Nama Genre</th>
            <th class="p-2 text-left">Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($genres as $genre)
            <tr class="even:bg-theme-muted/5 hover:bg-theme-muted/10">
              <td class="px-2 py-2">{{ $loop->iteration }}</td>
              <td class="px-2 py-2">{{ $genre->name }}</td>
              <td class="py-2">
                <form action="{{ route('dashboard.genres.destroy', $genre->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="focus:shadow-outline rounded-lg bg-red-500 px-2 py-1 text-sm font-semibold text-white hover:bg-red-700 focus:outline-none" type="submit" title="Delete">
                    <i class="fa-solid fa-trash"></i>
                  </button>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td class="p-2 text-center" colspan="3">Data Kosong</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </section>
  <div class="mt-4 flex justify-center">
    {{ $genres->links() }}
  </div>
@endsection
