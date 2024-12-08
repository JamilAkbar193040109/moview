<nav class="h-svh fixed left-0 z-30 flex w-60 shrink-0 flex-col border-r border-neutral-300 bg-neutral-50 p-4 transition-transform duration-300 dark:border-neutral-700 dark:bg-neutral-900 md:relative md:w-64 md:translate-x-0" aria-label="sidebar navigation" x-cloak x-bind:class="sidebarIsOpen ? 'translate-x-0' : '-translate-x-60'">
  <!-- logo  -->
  <div class="flex items-center justify-center border-b-2 pb-4">
    <a class="w-fit text-2xl font-bold text-neutral-900 dark:text-white" href="{{ route('home') }}">
      <span class="sr-only">homepage</span>
      <h1 class="text-center text-2xl font-bold">Moview</h1>
    </a>
  </div>

  <!-- sidebar links  -->
  <div class="flex flex-col gap-2 overflow-y-auto py-6">

    <a class="{{ request()->routeIs('dashboard') ? 'bg-black/10 text-neutral-900 dark:bg-indigo-600/10 dark:text-white' : '' }} flex items-center gap-3 rounded-md px-2 py-2.5 text-sm font-semibold text-neutral-600 underline-offset-2 transition hover:bg-black/5 hover:text-neutral-900 focus:outline-none focus-visible:underline dark:text-neutral-300 dark:hover:bg-indigo-600/5 dark:hover:text-white" href="{{ route('dashboard') }}">
      <i class="fa-solid fa-gauge"></i>
      <span>Dashboard</span>
    </a>

    <a class="{{ request()->routeIs('genre.*') ? 'bg-black/10 text-neutral-900 dark:bg-indigo-600/10 dark:text-white' : '' }} flex items-center gap-3 rounded-md px-2 py-2.5 text-sm font-semibold text-neutral-600 underline-offset-2 transition hover:bg-black/5 hover:text-neutral-900 focus:outline-none focus-visible:underline dark:text-neutral-300 dark:hover:bg-indigo-600/5 dark:hover:text-white" href="{{ route('dashboard.genres.index') }}">
      <i class="fa-solid fa-film"></i>
      <span>Genre</span>
    </a>

    <a class="{{ request()->routeIs('movie.*') ? 'bg-black/10 text-neutral-900 dark:bg-indigo-600/10 dark:text-white' : '' }} flex items-center gap-3 rounded-md px-2 py-2.5 text-sm font-semibold text-neutral-600 underline-offset-2 transition hover:bg-black/5 hover:text-neutral-900 focus:outline-none focus-visible:underline dark:text-neutral-300 dark:hover:bg-indigo-600/5 dark:hover:text-white" href="{{ route('dashboard.movies.index') }}">
      <i class="fa-solid fa-film"></i>
      <span>Movies</span>
    </a>

    <a class="{{ request()->routeIs('review.*') ? 'bg-black/10 text-neutral-900 dark:bg-indigo-600/10 dark:text-white' : '' }} flex items-center gap-3 rounded-md px-2 py-2.5 text-sm font-semibold text-neutral-600 underline-offset-2 transition hover:bg-black/5 hover:text-neutral-900 focus:outline-none focus-visible:underline dark:text-neutral-300 dark:hover:bg-indigo-600/5 dark:hover:text-white" href="#">
      <i class="fa-solid fa-comments"></i>
      <span>Reviews</span>
    </a>
  </div>
</nav>
