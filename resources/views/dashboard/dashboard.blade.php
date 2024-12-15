@extends('layouts.back.master-back')

@section('title', 'Dashboard')
@section('content')
  <section class="dashboard mx-auto w-full">
    <h2 class="mb-4 text-2xl font-semibold">Dashboard</h2>
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-12">

      @can('admin')
        <div class="card col-span-3 rounded-lg bg-white px-4 py-2">
          <div class="flex items-center gap-4 p-2 text-black">
            <div class="logo size-16 flex shrink-0 items-center justify-center rounded-lg bg-orange-500">
              <i class="fa-solid fa-gauge text-2xl text-white"></i>
            </div>
            <div>
              <h2 class="font-semibold">Total Movie</h2>
              <p class="">{{ $totalMovie }}</p>
            </div>
          </div>
        </div>
        <div class="card col-span-3 rounded-lg bg-white px-4 py-2">
          <div class="flex items-center gap-4 p-2 text-black">
            <div class="logo size-16 flex shrink-0 items-center justify-center rounded-lg bg-orange-500">
              <i class="fa-solid fa-gauge text-2xl text-white"></i>
            </div>
            <div>
              <h2 class="font-semibold">Total Review (All)</h2>
              <p class="">{{ $totalReview }}</p>
            </div>
          </div>
        </div>
      @endcan

      <div class="card col-span-3 rounded-lg bg-white px-4 py-2">
        <div class="flex items-center gap-4 p-2 text-black">
          <div class="logo size-16 flex shrink-0 items-center justify-center rounded-lg bg-orange-500">
            <i class="fa-solid fa-gauge text-2xl text-white"></i>
          </div>
          <div>
            <h2 class="font-semibold">Total Review (User)</h2>
            <p class="">{{ $totalReviewByUser }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
