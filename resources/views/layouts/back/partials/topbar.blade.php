<nav class="sticky top-0 z-10 flex items-center justify-between border-b border-neutral-300 bg-neutral-50 px-4 py-3.5 dark:border-neutral-700 dark:bg-neutral-900 md:justify-end" aria-label="top navibation bar">

  <!-- sidebar toggle button for small screens  -->
  <button class="size-8 inline-block rounded-md bg-slate-300 leading-none text-neutral-500 dark:bg-slate-700 dark:text-neutral-300 md:hidden" type="button" x-on:click="sidebarIsOpen = true">
    <i class="fa-solid fa-bars"></i>
    <span class="sr-only">sidebar toggle</span>
  </button>

  <!-- Profile Menu  -->
  <div class="relative" x-data="{ userDropdownIsOpen: false }" x-on:keydown.esc.window="userDropdownIsOpen = false">
    <button class="flex w-full cursor-pointer items-center gap-2 rounded-md p-2 text-left text-neutral-600 hover:bg-black/5 hover:text-neutral-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black dark:text-neutral-300 dark:hover:bg-indigo-600/5 dark:hover:text-white dark:focus-visible:outline-indigo-600" type="button" aria-haspopup="true" x-bind:class="userDropdownIsOpen ? 'bg-black/10 dark:bg-indigo-600/10' : ''" x-on:click="userDropdownIsOpen = ! userDropdownIsOpen" x-bind:aria-expanded="userDropdownIsOpen">
      {{-- <img class="size-8 rounded-md object-cover" src="#" alt="avatar" aria-hidden="true" /> --}}
      <div class="flex items-center gap-2">
        <span class="text-sm font-bold text-neutral-900 dark:text-white">{{ Auth::user()->name }}</span>
        <i class="fa-solid fa-caret-down text-sm"></i>
      </div>
    </button>

    <!-- menu -->
    <div class="absolute right-0 top-14 z-20 h-fit w-44 divide-y divide-neutral-300 rounded-md border border-neutral-300 bg-white dark:divide-neutral-700 dark:border-neutral-700 dark:bg-neutral-950" role="menu" x-cloak x-show="userDropdownIsOpen" x-on:click.outside="userDropdownIsOpen = false" x-on:keydown.down.prevent="$focus.wrap().next()" x-on:keydown.up.prevent="$focus.wrap().previous()" x-transition="" x-trap="userDropdownIsOpen">

      <div class="flex flex-col">
        <a class="flex items-center gap-3 px-3 py-2 text-sm font-medium text-neutral-600 underline-offset-2 hover:bg-black/5 hover:text-neutral-900 focus:outline-none focus-visible:underline dark:text-neutral-300 dark:hover:bg-indigo-600/5 dark:hover:text-white" href="{{ route('profile.edit') }}" role="menuitem">
          <i class="fa-solid fa-user"></i>
          <span>Profile</span>
        </a>
      </div>

      <div class="flex flex-col">
        <form action="{{ route('logout') }}" method="post">
          @csrf
          <button class="flex w-full items-center gap-3 px-3 py-2 text-sm font-medium text-neutral-600 underline-offset-2 hover:bg-black/5 hover:text-neutral-900 focus:outline-none focus-visible:underline dark:text-neutral-300 dark:hover:bg-indigo-600/5 dark:hover:text-white" type="submit" role="menuitem">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span>Sign Out</span>
          </button>
        </form>
      </div>
    </div>
  </div>
</nav>
