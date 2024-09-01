<div>
  <nav class="bg-white shadow-md" x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
        <!-- Left side: Logo, Home, About -->
        <div class="flex">
          <a href="/" class="flex items-center space-x-2 text-gray-800 hover:text-gray-900">
            <span class="font-bold text-xl">Logo</span>
          </a>
          <div class="hidden md:flex md:items-center md:ml-6">
            <a href="{{ route('home') }}" class="text-gray-800 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('home') ? 'border-b-2 border-blue-500' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="text-gray-800 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('about') ? 'border-b-2 border-blue-500' : '' }}">About</a>
            <a href="{{ route('alpine') }}" class="text-gray-800 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('alpine') ? 'border-b-2 border-blue-500' : '' }}">Alpine</a>
            <a href="{{ route('alpine.dashboard') }}" class="text-gray-800 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('alpine.dashboard') ? 'border-b-2 border-blue-500' : '' }}">Alpine Dashboard</a>
          </div>
        </div>

        <!-- Right side: Login, Register -->
        <div class="hidden md:flex md:items-center">
          <a href="{{ route('dashboard') }}" class="text-gray-800 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('dashboard') ? 'border-b-2 border-blue-500' : '' }}">Dashboard</a>
          <a href="{{ route('login') }}" class="text-gray-800 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('login') ? 'border-b-2 border-blue-500' : '' }}">Login</a>
          <a href="{{ route('register') }}" class="text-gray-800 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('register') ? 'border-b-2 border-blue-500' : '' }}">Register</a>
        </div>

        <!-- Mobile menu button -->
        <div class="-mr-2 flex md:hidden">
          <button @click="open = !open" type="button" class="bg-white inline-flex items-center justify-center p-2 rounded-md text-gray-800 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg x-show="!open" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg x-show="open" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu -->
    <div x-show="open" class="md:hidden">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 text-gray-500">
        <a href="{{ route('home') }}" class="block hover:bg-blue-200 px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('home') ? ' text-blue-800' : '' }}">Home</a>
        <a href="{{ route('dashboard') }}" class="block  hover:bg-blue-200 px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('dashboard') ? 'border-b-2 bg-blue-400' : '' }}">Dashboard</a>
        <a href="{{ route('about') }}" class="block  hover:bg-blue-200 px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('about') ? 'text-blue-800' : '' }}">About</a>
        <a href="{{ route('login') }}" class="block  hover:bg-blue-200 px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('login') ? 'text-blue-800' : '' }}">Login</a>
        <a href="{{ route('register') }}" class="block  hover:bg-blue-200 px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('register') ? 'text-blue-800' : '' }}">Register</a>
      </div>
    </div>
  </nav>

</div>