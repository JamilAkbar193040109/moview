@extends('layouts.back.master-back')

@section('title', 'Dashboard')
@section('content')
  <section class="dashboard mx-auto w-full">
    <h2 class="mb-4 text-2xl font-semibold">Dashboard</h2>
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-12">
      <div class="card col-span-3 rounded-lg bg-white px-4 py-2">
        <div class="flex items-center gap-4 p-2 text-black">
          <div class="logo size-16 flex shrink-0 items-center justify-center rounded-lg bg-orange-500">
            <i class="fa-solid fa-gauge text-2xl text-white"></i>
          </div>
          <div>
            <h2 class="font-semibold">Total Review</h2>
            <p class="">12</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
