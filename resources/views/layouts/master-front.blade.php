<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @if (Route::is('home'))
    <title>{{ config('app.name', 'Laravel') }}</title>
  @else
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
  @endif
  <style>
    .slider {
      transition: transform 0.5s ease-in-out;
    }
  </style>
</head>

<body class="flex min-h-screen flex-col font-sans antialiased">
  <header class="sticky top-0 z-40 bg-slate-300 p-4">
    @include('layouts.front.partials.navbar')
  </header>

  <main class="mb-6 grow">
    @yield('content')
  </main>

  @include('layouts.front.partials.footer')

  @stack('scripts')
</body>

</html>
