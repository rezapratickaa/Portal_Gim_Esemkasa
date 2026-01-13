<!-- Modern Navbar -->
<nav x-data="{ mobileMenuOpen: false }" 
     class="bg-[#090A0A]/80 backdrop-blur-xl sticky top-0 z-50 border-b border-white/5 transition-all duration-300">
  <div class="mx-auto md:px-32 px-6 py-4">
    <div class="flex items-center justify-between">
      
      <!-- Logo -->
      <a href="/" class="flex items-center gap-3 group">
        <div class="relative">
          <img src="{{ asset('images/logo 1.png') }}" alt="Portal Gim Esemkasa" class="h-9 md:h-10 w-auto transition-transform duration-300 group-hover:scale-110">
          <div class="absolute -inset-1 bg-purple-600/20 rounded-full blur-md opacity-0 group-hover:opacity-100 transition-opacity"></div>
        </div>
        <span class="text-lg md:text-xl font-black text-white tracking-tighter">
          PORTAL<span class="text-purple-600">GIM</span><span class="text-gray-400">ESEMKA</span>
        </span>
      </a>
      
      <!-- Desktop Nav Links -->
      <div class="hidden md:flex items-center gap-10">
        <a href="/" class="text-sm font-bold text-gray-400 hover:text-white transition-colors relative group">
          Home
          <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-purple-600 transition-all duration-300 group-hover:w-full"></span>
        </a>
        <a href="{{ route('allgame') }}" class="text-sm font-bold text-gray-400 hover:text-white transition-colors relative group">
          Games
          <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-purple-600 transition-all duration-300 group-hover:w-full"></span>
        </a>
        <a href="{{ route('about') }}" class="text-sm font-bold text-gray-400 hover:text-white transition-colors relative group">
          About
          <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-purple-600 transition-all duration-300 group-hover:w-full"></span>
        </a>
        <a href="/login" class="px-6 py-2 bg-purple-600 hover:bg-purple-700 text-white rounded-full font-bold text-sm tracking-wide transition-all hover:shadow-[0_0_20px_rgba(147,51,234,0.4)] active:scale-95">
          Login
        </a>
      </div>

      <!-- Mobile Menu Button -->
      <div class="md:hidden flex items-center">
        <button @click="mobileMenuOpen = !mobileMenuOpen" 
                class="relative w-10 h-10 flex flex-col items-center justify-center text-white focus:outline-none bg-white/5 rounded-lg border border-white/10">
          <div class="w-5 h-0.5 bg-current transition-all duration-300 transform" :class="mobileMenuOpen ? 'rotate-45 translate-y-1' : ''"></div>
          <div class="w-5 h-0.5 bg-current mt-1.5 transition-all duration-300 transform" :class="mobileMenuOpen ? '-rotate-45 -translate-y-1' : ''"></div>
        </button>
      </div>

    </div>
  </div>

  <!-- Mobile Menu Panel -->
  <div x-show="mobileMenuOpen" 
       x-transition:enter="transition ease-out duration-300"
       x-transition:enter-start="opacity-0 -translate-y-10"
       x-transition:enter-end="opacity-100 translate-y-0"
       x-transition:leave="transition ease-in duration-200"
       x-transition:leave-start="opacity-100 translate-y-0"
       x-transition:leave-end="opacity-0 -translate-y-10"
       class="md:hidden bg-[#090A0A] border-b border-white/10 absolute w-full shadow-[0_20px_40px_rgba(0,0,0,0.5)] z-40 overflow-hidden"
       @click.away="mobileMenuOpen = false">
    <div class="flex flex-col p-6 gap-2">
      <a href="/" class="px-4 py-3 text-[#E2E2E2] hover:bg-white/5 rounded-xl font-bold transition-all flex items-center justify-between group">
        Home
        <svg class="w-4 h-4 opacity-0 group-hover:opacity-100 -translate-x-2 group-hover:translate-x-0 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      </a>
      <a href="{{ route('allgame') }}" class="px-4 py-3 text-[#E2E2E2] hover:bg-white/5 rounded-xl font-bold transition-all flex items-center justify-between group">
        Games
        <svg class="w-4 h-4 opacity-0 group-hover:opacity-100 -translate-x-2 group-hover:translate-x-0 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      </a>
      <a href="{{ route('about') }}" class="px-4 py-3 text-[#E2E2E2] hover:bg-white/5 rounded-xl font-bold transition-all flex items-center justify-between group">
        About
        <svg class="w-4 h-4 opacity-0 group-hover:opacity-100 -translate-x-2 group-hover:translate-x-0 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      </a>
      <div class="my-4 border-t border-white/5"></div>
      <a href="/login" class="w-full text-center py-4 bg-purple-600 hover:bg-purple-700 text-white rounded-2xl font-black tracking-widest uppercase transition-all shadow-lg shadow-purple-900/40">
        Login
      </a>
    </div>
  </div>
</nav>