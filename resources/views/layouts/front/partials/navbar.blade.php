<nav class="mx-auto flex w-full items-center justify-between md:max-w-6xl" x-data="{ open: false }">
  <div class="logo order-2 md:order-1">
    <a class="text-2xl font-bold" href="#">Moview</a>
  </div>
  {{-- hamburger menu --}}
  <div class="order-1 -me-2 flex items-center md:hidden">
    <button class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none" @click="open = !open" @click.outside="open = false">
      <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
        <path class="inline-flex" :class="{ 'hidden': open, 'inline-flex': !open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        <path class="hidden" :class="{ 'hidden': !open, 'inline-flex': open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </div>
  <ul class="nav-link absolute left-4 top-16 z-20 hidden min-w-[150px] items-center justify-center gap-x-6 rounded-xl bg-white px-2 py-2 ring-1 ring-slate-300 transition duration-300 md:static md:order-2 md:flex md:space-y-0 md:bg-transparent md:p-0" :class="{ 'hidden': !open, 'flex-col md:flex-row': open }">
    <li class="rounded-md px-2 py-2 font-medium leading-none transition hover:bg-slate-400"><a class="hover:underline" href="{{ route('home') }}">Home</a></li>
    <li class="rounded-md px-2 py-2 font-medium leading-none transition hover:bg-slate-400"><a class="hover:underline" href="#">Movies</a></li>
    <li class="rounded-md px-2 py-2 font-medium leading-none transition hover:bg-slate-400"><a class="hover:underline" href="#">Reviews</a></li>
    <li class="rounded-md px-2 py-2 font-medium leading-none transition hover:bg-slate-400"><a class="hover:underline" href="{{ route('about') }}">About</a></li>
  </ul>
  {{-- <button class="btn sign-in order-3 flex-shrink-0">Sign In</button> --}}
  <a class="btn sign-in order-3 flex-shrink-0" href="{{ route('login') }}">Sign In</a>
</nav>
