@extends('layouts.master-front')

@section('content')
  <section class="hero">
    <div class="relative overflow-hidden">
      <div class="slider flex max-h-96 items-center">
        <div class="min-w-full">
          <img class="h-auto w-full" src="https://via.placeholder.com/800x400?text=Slide+1" alt="Slide 1">
        </div>
        <div class="min-w-full">
          <img class="h-auto w-full" src="https://via.placeholder.com/800x400?text=Slide+2" alt="Slide 2">
        </div>
        <div class="min-w-full">
          <img class="h-auto w-full" src="https://via.placeholder.com/800x400?text=Slide+3" alt="Slide 3">
        </div>
      </div>

      <button class="absolute left-4 top-1/2 -translate-y-1/2 transform rounded-full bg-white p-2 shadow-lg" id="prev">❮</button>
      <button class="absolute right-4 top-1/2 -translate-y-1/2 transform rounded-full bg-white p-2 shadow-lg" id="next">❯</button>
    </div>
  </section>

  <section class="hot-movie px-4 py-10">
    <div class="mx-auto max-w-6xl">
      <h2 class="mb-4 text-2xl font-semibold">Hot Movies</h2>
      <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4">
        <div class="rounded-md p-4 ring-1 ring-slate-300 transition duration-200 hover:ring-sky-600">
          <img class="w-full" src="https://via.placeholder.com/150x200?text=Movie+1" alt="Movie 1">
          <h3 class="mt-2 text-lg font-semibold">Movie 1</h3>
          <p>Genre: Action, Adventure</p>
        </div>
        <div class="rounded-md p-4 ring-1 ring-slate-300 transition duration-200 hover:ring-sky-600">
          <img class="w-full" src="https://via.placeholder.com/150x200?text=Movie+2" alt="Movie 2">
          <h3 class="mt-2 text-lg font-semibold">Movie 2</h3>
          <p>Genre: Comedy, Drama</p>
        </div>
        <div class="rounded-md p-4 ring-1 ring-slate-300 transition duration-200 hover:ring-sky-600">
          <img class="w-full" src="https://via.placeholder.com/150x200?text=Movie+3" alt="Movie 3">
          <h3 class="mt-2 text-lg font-semibold">Movie 3</h3>
          <p>Genre: Horror, Mystery</p>
        </div>
        <div class="rounded-md p-4 ring-1 ring-slate-300 transition duration-200 hover:ring-sky-600">
          <img class="w-full" src="https://via.placeholder.com/150x200?text=Movie+4" alt="Movie 4">
          <h3 class="mt-2 text-lg font-semibold">Movie 4</h3>
          <p>Genre: Romance, Thriller</p>
        </div>
      </div>
    </div>
  </section>

  <section class="review px-4 py-10">
    <div class="mx-auto max-w-6xl">
      <h2 class="mb-4 text-2xl font-semibold">Reviews</h2>
      <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
        <div class="rounded-md bg-slate-300 p-4">
          <h3 class="text-lg font-semibold">Review 1</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nihil ab obcaecati? Eligendi vitae sed id iure, ad quas sequi dignissimos consequatur, voluptates facere eum iste magni accusantium provident adipisci deserunt asperiores veritatis dicta commodi. Esse nobis saepe aliquam laboriosam vel delectus voluptatibus tempore est harum ea? Esse, illum reprehenderit.</p>
        </div>
        <div class="rounded-md bg-slate-300 p-4">
          <h3 class="text-lg font-semibold">Review 2</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nihil ab obcaecati? Eligendi vitae sed id iure, ad quas sequi dignissimos consequatur, voluptates facere eum iste magni accusantium provident adipisci deserunt asperiores veritatis dicta commodi. Esse nobis saepe aliquam laboriosam vel delectus voluptatibus tempore est harum ea? Esse, illum reprehenderit.</p>
        </div>
        <div class="rounded-md bg-slate-300 p-4">
          <h3 class="text-lg font-semibold">Review 3</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nihil ab obcaecati? Eligendi vitae sed id iure, ad quas sequi dignissimos consequatur, voluptates facere eum iste magni accusantium provident adipisci deserunt asperiores veritatis dicta commodi. Esse nobis saepe aliquam laboriosam vel delectus voluptatibus tempore est harum ea? Esse, illum reprehenderit.</p>
        </div>
      </div>
  </section>
@endsection

@push('scripts')
  <script>
    const slider = document.querySelector('.slider');
    const slides = document.querySelectorAll('.slider > div');
    let currentIndex = 0;
    const slideInterval = 3000; // Change slide every 3 seconds

    function updateSlider() {
      const offset = -currentIndex * 100;
      slider.style.transform = `translateX(${offset}%)`;
    }

    function nextSlide() {
      currentIndex = (currentIndex + 1) % slides.length;
      updateSlider();
    }

    function prevSlide() {
      currentIndex = (currentIndex - 1 + slides.length) % slides.length;
      updateSlider();
    }

    document.getElementById('next').addEventListener('click', nextSlide);
    document.getElementById('prev').addEventListener('click', prevSlide);

    // Auto slide functionality
    setInterval(nextSlide, slideInterval);
  </script>
@endpush
