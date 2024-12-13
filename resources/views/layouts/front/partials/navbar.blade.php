<nav class="mx-auto flex w-full items-center justify-between md:max-w-6xl" x-data="{ navbarIsOpen: false }">
  <div class="logo order-2 md:order-1">
    <a class="text-2xl font-bold text-white" href="{{ route('home') }}">Moview</a>
  </div>
  {{-- hamburger menu --}}
  <div class="order-1 -me-2 flex items-center md:hidden">
    <button class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none" @click="navbarIsOpen = !navbarIsOpen" @click.outside="navbarIsOpen = false">
      <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
        <path class="inline-flex" :class="{ 'hidden': navbarIsOpen, 'inline-flex': !navbarIsOpen }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        <path class="hidden" :class="{ 'hidden': !navbarIsOpen, 'inline-flex': navbarIsOpen }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </div>
  <ul class="absolute left-3 top-full z-50 mt-2 w-56 origin-top scale-0 divide-y divide-gray-500 rounded-md bg-modern-primary p-2 text-white opacity-0 shadow-lg transition duration-300 ease-in-out md:static md:top-0 md:order-2 md:mt-0 md:flex md:w-auto md:scale-100 md:items-center md:justify-center md:gap-x-4 md:divide-none md:p-0 md:opacity-100 md:shadow-none"
    :class="{ 'scale-100 opacity-100': navbarIsOpen, 'scale-0 opacity-0': !navbarIsOpen }">
    <li class="font-medium leading-none"><a class="block px-2 py-3 transition ease-in-out hover:bg-black/40" href="{{ route('home') }}">Home</a></li>
    <li class="font-medium leading-none"><a class="block px-2 py-3 transition ease-in-out hover:bg-black/40" href="{{ route('movies') }}">Movies</a></li>
    {{-- <li class="font-medium leading-none"><a class="" href="#">Reviews</a></li> --}}
    <li class="font-medium leading-none"><a class="block px-2 py-3 transition ease-in-out hover:bg-black/40" href="{{ route('about') }}">About</a></li>
  </ul>
  {{-- <button class="btn sign-in order-3 flex-shrink-0">Sign In</button> --}}
  {{-- <a class="btn sign-in order-3 flex-shrink-0 bg-modern-secondary hover:bg-modern-secondary/75" href="{{ route('login') }}">Sign In</a> --}}
  <div class="order-3 space-x-2 font-medium">
    @auth
      <a class="rounded-full bg-modern-secondary px-3 py-2 font-medium text-white ring-1 ring-transparent transition-colors hover:bg-modern-secondary/80 focus:outline-none focus-visible:ring-[#FF2D20]" href="{{ url('/dashboard') }}">
        Dashboard
      </a>
    @else
      <a class="rounded-full bg-modern-secondary px-3 py-2 font-medium text-white ring-1 ring-transparent transition-colors hover:bg-modern-secondary/80 focus:outline-none focus-visible:ring-[#FF2D20]" href="{{ route('login') }}">
        Sign In
      </a>
      @if (Route::has('register'))
        <a class="rounded-full bg-modern-secondary px-3 py-2 font-medium text-white ring-1 ring-transparent transition-colors hover:bg-modern-secondary/80 focus:outline-none focus-visible:ring-[#FF2D20]" href="{{ route('register') }}">
          Register
        </a>
      @endif
    @endauth
  </div>
</nav>
