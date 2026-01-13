<!doctype html>
<html>
<head>
  <title>Portal Gim Esemkasa</title>
  <link rel="icon" type="image/png" href="{{ asset('images/logo 1.png') }}">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="bg-[#090A0A] font-sans text-white antialiased min-h-screen flex flex-col">
    @include('components.navbar')

    <main class="grow mx-auto md:px-32 px-6 pt-12 md:pt-24 pb-48 w-full">

        <div class="flex flex-col items-center text-center gap-8 mb-20">
            <h1 class="text-5xl md:text-7xl font-black text-white uppercase tracking-tighter">
                Explore <span class="text-purple-600">All Games</span>
            </h1>
            <p class="text-gray-400 text-lg max-w-2xl font-medium -mt-4">
                Discover your next adventure across our entire collection of premium gaming experiences.
            </p>
            
            <div class="w-full max-w-3xl flex flex-row items-center gap-3 md:gap-4 mt-4">
                <div class="relative grow group">
                    <div class="absolute inset-y-0 left-0 pl-5 md:pl-6 flex items-center pointer-events-none">
                        <i class='bx bx-search text-xl md:text-2xl text-gray-500 group-focus-within:text-purple-500 transition-colors'></i>
                    </div>
                    <input type="text" 
                           placeholder="Search for games..." 
                           class="w-full bg-white/5 border border-white/10 rounded-2xl py-4 md:py-5 pl-12 md:pl-16 pr-4 md:pr-6 text-white focus:outline-none focus:ring-2 focus:ring-purple-600 focus:bg-white/10 transition-all text-base md:text-lg shadow-2xl backdrop-blur-sm">
                </div>
                <button class="shrink-0 p-4 md:p-5 bg-purple-600 hover:bg-purple-700 text-white rounded-2xl transition-all transform hover:scale-105 shadow-lg shadow-purple-900/50 flex items-center justify-center">
                    <i class='bx bx-slider-alt text-2xl md:text-3xl'></i>
                </button>
            </div>
        </div>

        <div x-data="{ currentFilter: 'all' }">


        <section class="mt-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

                <div x-show="currentFilter === 'all' || currentFilter === 'latest'" x-transition 
                     class="bg-white/5 border border-white/10 rounded-4xl overflow-hidden group hover:border-purple-600/50 transition-all duration-300">
                    <div class="aspect-video overflow-hidden relative">
                        <img src="{{ asset('images/slider/slide1.png') }}" alt="Game" class="w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex gap-2 mb-3">
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Action</span>
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">RPG</span>
                        </div>
                        <h3 class="text-white font-black text-xl mb-2">Space Odyssey</h3>
                        <p class="text-gray-400 text-sm mb-6 line-clamp-2">Embark on a journey through the stars and discover new worlds in this epic RPG.</p>
                        <div class="flex justify-end">
                            <button class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-2 rounded-full font-bold transition-colors">Play</button>
                        </div>
                    </div>
                </div>

                <div x-show="currentFilter === 'all' || currentFilter === 'popular'" x-transition 
                     class="bg-white/5 border border-white/10 rounded-4xl overflow-hidden group hover:border-purple-600/50 transition-all duration-300">
                    <div class="aspect-video overflow-hidden relative">
                        <img src="{{ asset('images/slider/slide2.png') }}" alt="Game" class="w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex gap-2 mb-3">
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Racing</span>
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Sci-Fi</span>
                        </div>
                        <h3 class="text-white font-black text-xl mb-2">Neon City</h3>
                        <p class="text-gray-400 text-sm mb-6 line-clamp-2">Race through the neon-lit streets of a futuristic metropolis in this high-speed racer.</p>
                        <div class="flex justify-end">
                            <button class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-2 rounded-full font-bold transition-colors">Play</button>
                        </div>
                    </div>
                </div>

                <div x-show="currentFilter === 'all' || currentFilter === 'top'" x-transition 
                     class="bg-white/5 border border-white/10 rounded-4xl overflow-hidden group hover:border-purple-600/50 transition-all duration-300">
                    <div class="aspect-video overflow-hidden relative">
                        <img src="{{ asset('images/slider/slide3.png') }}" alt="Game" class="w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex gap-2 mb-3">
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Puzzle</span>
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Magic</span>
                        </div>
                        <h3 class="text-white font-black text-xl mb-2">Mystic Forest</h3>
                        <p class="text-gray-400 text-sm mb-6 line-clamp-2">Solve puzzles and uncover secrets in a magical forest filled with mystery.</p>
                        <div class="flex justify-end">
                            <button class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-2 rounded-full font-bold transition-colors">Play</button>
                        </div>
                    </div>
                </div>

                <div x-show="currentFilter === 'all' || currentFilter === 'latest'" x-transition 
                     class="bg-white/5 border border-white/10 rounded-4xl overflow-hidden group hover:border-purple-600/50 transition-all duration-300">
                    <div class="aspect-video overflow-hidden relative">
                        <img src="{{ asset('images/slider/slide1.png') }}" alt="Game" class="w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex gap-2 mb-3">
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Action</span>
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Stealth</span>
                        </div>
                        <h3 class="text-white font-black text-xl mb-2">Shadow Warrior</h3>
                        <p class="text-gray-400 text-sm mb-6 line-clamp-2">Master the art of stealth and combat in this intense action-packed platformer.</p>
                        <div class="flex justify-end">
                            <button class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-2 rounded-full font-bold transition-colors">Play</button>
                        </div>
                    </div>
                </div>

                <div x-show="currentFilter === 'all' || currentFilter === 'popular'" x-transition 
                     class="bg-white/5 border border-white/10 rounded-4xl overflow-hidden group hover:border-purple-600/50 transition-all duration-300">
                    <div class="aspect-video overflow-hidden relative">
                        <img src="{{ asset('images/slider/slide2.png') }}" alt="Game" class="w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex gap-2 mb-3">
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Cyberpunk</span>
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Shooter</span>
                        </div>
                        <h3 class="text-white font-black text-xl mb-2">Cyber Strike</h3>
                        <p class="text-gray-400 text-sm mb-6 line-clamp-2">Engage in fast-paced tactical battles in a gritty cyberpunk world.</p>
                        <div class="flex justify-end">
                            <button class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-2 rounded-full font-bold transition-colors">Play</button>
                        </div>
                    </div>
                </div>

                <div x-show="currentFilter === 'all' || currentFilter === 'top'" x-transition 
                     class="bg-white/5 border border-white/10 rounded-4xl overflow-hidden group hover:border-purple-600/50 transition-all duration-300">
                    <div class="aspect-video overflow-hidden relative">
                        <img src="{{ asset('images/slider/slide3.png') }}" alt="Game" class="w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex gap-2 mb-3">
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">BATTLE ROYALE</span>
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">FPS</span>
                        </div>
                        <h3 class="text-white font-black text-xl mb-2">Apex Legends</h3>
                        <p class="text-gray-400 text-sm mb-6 line-clamp-2">Battle it out with iconic legends in the ultimate hero shooter experience.</p>
                        <div class="flex justify-end">
                            <button class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-2 rounded-full font-bold transition-colors">Play</button>
                        </div>
                    </div>
                </div>

                <div x-show="currentFilter === 'all' || currentFilter === 'latest'" x-transition 
                     class="bg-white/5 border border-white/10 rounded-4xl overflow-hidden group hover:border-purple-600/50 transition-all duration-300">
                    <div class="aspect-video overflow-hidden relative">
                        <img src="{{ asset('images/slider/slide1.png') }}" alt="Game" class="w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex gap-2 mb-3">
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Sandbox</span>
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Casual</span>
                        </div>
                        <h3 class="text-white font-black text-xl mb-2">Block Builder</h3>
                        <p class="text-gray-400 text-sm mb-6 line-clamp-2">Unleash your creativity and build anything you can imagine in this block-based world.</p>
                        <div class="flex justify-end">
                            <button class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-2 rounded-full font-bold transition-colors">Play</button>
                        </div>
                    </div>
                </div>

                <div x-show="currentFilter === 'all' || currentFilter === 'popular'" x-transition 
                     class="bg-white/5 border border-white/10 rounded-4xl overflow-hidden group hover:border-purple-600/50 transition-all duration-300">
                    <div class="aspect-video overflow-hidden relative">
                        <img src="{{ asset('images/slider/slide2.png') }}" alt="Game" class="w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex gap-2 mb-3">
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Mecha</span>
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Strategy</span>
                        </div>
                        <h3 class="text-white font-black text-xl mb-2">Iron Titan</h3>
                        <p class="text-gray-400 text-sm mb-6 line-clamp-2">Command giant mechs and dominate the battlefield in this strategic combat game.</p>
                        <div class="flex justify-end">
                            <button class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-2 rounded-full font-bold transition-colors">Play</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

@include('components.footer')
</body> 
</html>