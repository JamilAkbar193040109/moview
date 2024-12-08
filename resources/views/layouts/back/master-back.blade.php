<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>
  {{-- fontawesome --}}
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body class="font-lato antialiased">
  <div class="relative flex w-full flex-col md:flex-row" x-data="{ sidebarIsOpen: false }">
    <!-- This allows screen readers to skip the sidebar and go directly to the main content. -->
    <a class="sr-only" href="#main-content">skip to the main content</a>

    <!-- dark overlay for when the sidebar is open on smaller screens  -->
    <div class="fixed inset-0 z-20 bg-neutral-950/10 backdrop-blur-sm md:hidden" aria-hidden="true" x-cloak x-show="sidebarIsOpen" x-on:click="sidebarIsOpen = false" x-transition.opacity></div>

    @include('layouts.back.partials.sidebar')

    <!-- top navbar & main content  -->
    <div class="h-svh w-full overflow-y-auto bg-white dark:bg-neutral-950">
      <!-- top navbar  -->
      @include('layouts.back.partials.topbar')
      <!-- main content  -->
      <div class="p-4" id="main-content">
        <div class="overflow-y-auto p-4 dark:text-white">
          @yield('content')
        </div>
      </div>
    </div>
  </div>

  @stack('scripts')
</body>

</html>
