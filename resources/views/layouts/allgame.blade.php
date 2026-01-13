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
                <!-- Card 1 -->
                <div x-show="currentFilter === 'all' || currentFilter === 'latest'" 
                     class="bg-white/5 border border-white/10 rounded-4xl overflow-hidden group hover:border-purple-600/50 transition-all duration-300">
                    <div class="aspect-video overflow-hidden relative">
                        <img src="{{ asset('images/game/sokoban.jpg') }}" alt="Game Preview" class="w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex gap-2 mb-3">
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Puzzle</span>
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Strategy</span>
                        </div>
                        <h3 class="text-white font-black text-xl mb-2">Sokoban</h3>
                        <p class="text-gray-400 text-sm mb-6 line-clamp-2">Classic puzzle game where you push boxes to their targets.</p>
                        <div class="flex justify-end">
                            <a href="{{ route('game.detail') }}" class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-2 rounded-full font-bold transition-colors">Play</a>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div x-show="currentFilter === 'all' || currentFilter === 'popular'" 
                     class="bg-white/5 border border-white/10 rounded-4xl overflow-hidden group hover:border-purple-600/50 transition-all duration-300">
                    <div class="aspect-video overflow-hidden relative">
                        <img src="{{ asset('images/game/Match Game.jpg') }}" alt="Match Game" class="w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex gap-2 mb-3">
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Puzzle</span>
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Casual</span>
                        </div>
                        <h3 class="text-white font-black text-xl mb-2">Match Game</h3>
                        <p class="text-gray-400 text-sm mb-6 line-clamp-2">A relaxing jigsaw-like puzzle game to challenge your brain.</p>
                        <div class="flex justify-end">
                            <a href="{{ route('game.detail') }}" class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-2 rounded-full font-bold transition-colors">Play</a>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div x-show="currentFilter === 'all' || currentFilter === 'top'" 
                     class="bg-white/5 border border-white/10 rounded-4xl overflow-hidden group hover:border-purple-600/50 transition-all duration-300">
                    <div class="aspect-video overflow-hidden relative">
                        <img src="{{ asset('images/game/Portalgo.jpg') }}" alt="Portalgo" class="w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex gap-2 mb-3">
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Arcade</span>
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Platformer</span>
                        </div>
                        <h3 class="text-white font-black text-xl mb-2">Portalgo</h3>
                        <p class="text-gray-400 text-sm mb-6 line-clamp-2">High-speed portal action through challenging obstacle courses.</p>
                        <div class="flex justify-end">
                            <a href="{{ route('game.detail') }}" class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-2 rounded-full font-bold transition-colors">Play</a>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div x-show="currentFilter === 'all' || currentFilter === 'latest'" 
                     class="bg-white/5 border border-white/10 rounded-4xl overflow-hidden group hover:border-purple-600/50 transition-all duration-300">
                    <div class="aspect-video overflow-hidden relative">
                        <img src="{{ asset('images/game/flowchart.jpg') }}" alt="Flowchart Game" class="w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex gap-2 mb-3">
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Educational</span>
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Logic</span>
                        </div>
                        <h3 class="text-white font-black text-xl mb-2">Flowchart</h3>
                        <p class="text-gray-400 text-sm mb-6 line-clamp-2">Learn programming concepts through fun flowchart puzzles.</p>
                        <div class="flex justify-end">
                            <a href="{{ route('game.detail') }}" class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-2 rounded-full font-bold transition-colors">Play</a>
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div x-show="currentFilter === 'all' || currentFilter === 'popular'" 
                     class="bg-white/5 border border-white/10 rounded-4xl overflow-hidden group hover:border-purple-600/50 transition-all duration-300">
                    <div class="aspect-video overflow-hidden relative">
                        <img src="{{ asset('images/game/Tales Of Azlan.jpg') }}" alt="Tales Of Azlan" class="w-full h-full object-fill transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex gap-2 mb-3">
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">RPG</span>
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Fantasy</span>
                        </div>
                        <h3 class="text-white font-black text-xl mb-2">Tales Of Azlan</h3>
                        <p class="text-gray-400 text-sm mb-6 line-clamp-2">A classic fantasy adventure with rich storytelling.</p>
                        <div class="flex justify-end">
                            <a href="{{ route('game.detail') }}" class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-2 rounded-full font-bold transition-colors">Play</a>
                        </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div x-show="currentFilter === 'all' || currentFilter === 'latest'" 
                     class="bg-white/5 border border-white/10 rounded-4xl overflow-hidden group hover:border-purple-600/50 transition-all duration-300">
                    <div class="aspect-video overflow-hidden relative">
                        <img src="{{ asset('images/game/Recepic QuestCoff.jpeg') }}" alt="Recipe Quest Coff" class="w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex gap-2 mb-3">
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Adventure</span>
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Coffee</span>
                        </div>
                        <h3 class="text-white font-black text-xl mb-2">Recipe Quest Coff</h3>
                        <p class="text-gray-400 text-sm mb-6 line-clamp-2">A unique adventure exploring the world of coffee recipes.</p>
                        <div class="flex justify-end">
                            <a href="{{ route('game.detail') }}" class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-2 rounded-full font-bold transition-colors">Play</a>
                        </div>
                    </div>
                </div>
                <!-- Card 7: Ninja Frog -->
                <div x-show="currentFilter === 'all' || currentFilter === 'latest'" 
                     class="bg-white/5 border border-white/10 rounded-4xl overflow-hidden group hover:border-purple-600/50 transition-all duration-300">
                    <div class="aspect-video overflow-hidden relative">
                        <img src="{{ asset('images/game/Ninja Frog.jpg') }}" alt="Ninja Frog" class="w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex gap-2 mb-3">
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Platformer</span>
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Action</span>
                        </div>
                        <h3 class="text-white font-black text-xl mb-2">Ninja Frog</h3>
                        <p class="text-gray-400 text-sm mb-6 line-clamp-2">Leap through challenging levels and defeat enemies as a swift ninja frog.</p>
                        <div class="flex justify-end">
                            <a href="{{ route('game.detail') }}" class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-2 rounded-full font-bold transition-colors">Play</a>
                        </div>
                    </div>
                </div>
                <!-- Card 8: Dropper -->
                <div x-show="currentFilter === 'all' || currentFilter === 'latest'" 
                     class="bg-white/5 border border-white/10 rounded-4xl overflow-hidden group hover:border-purple-600/50 transition-all duration-300">
                    <div class="aspect-video overflow-hidden relative">
                        <img src="{{ asset('images/game/Dropper.jpg') }}" alt="Dropper" class="w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex gap-2 mb-3">
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Action</span>
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Skill</span>
                        </div>
                        <h3 class="text-white font-black text-xl mb-2">Dropper</h3>
                        <p class="text-gray-400 text-sm mb-6 line-clamp-2">Test your reflexes in this fast-paced game of falling and dodging obstacles.</p>
                        <div class="flex justify-end">
                            <a href="{{ route('game.detail') }}" class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-2 rounded-full font-bold transition-colors">Play</a>
                        </div>
                    </div>
                </div>
                <!-- Card 9: Martio -->
                <div x-show="currentFilter === 'all' || currentFilter === 'popular'" 
                     class="bg-white/5 border border-white/10 rounded-4xl overflow-hidden group hover:border-purple-600/50 transition-all duration-300">
                    <div class="aspect-video overflow-hidden relative">
                        <img src="{{ asset('images/game/martio.jpg') }}" alt="Martio" class="w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex gap-2 mb-3">
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Arcade</span>
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Retro</span>
                        </div>
                        <h3 class="text-white font-black text-xl mb-2">Martio</h3>
                        <p class="text-gray-400 text-sm mb-6 line-clamp-2">A classic retro-style adventure inspired by the golden age of arcade games.</p>
                        <div class="flex justify-end">
                            <a href="{{ route('game.detail') }}" class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-2 rounded-full font-bold transition-colors">Play</a>
                        </div>
                    </div>
                </div>
                <!-- Card 10: Ciplis Adventure -->
                <div x-show="currentFilter === 'all' || currentFilter === 'latest'" 
                     class="bg-white/5 border border-white/10 rounded-4xl overflow-hidden group hover:border-purple-600/50 transition-all duration-300">
                    <div class="aspect-video overflow-hidden relative">
                        <img src="{{ asset('images/game/Ciplisadventure.jpg') }}" alt="Ciplis Adventure" class="w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex gap-2 mb-3">
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Platformer</span>
                            <span class="px-3 py-1 bg-purple-600/20 border border-purple-500/30 rounded-full text-[10px] font-bold text-purple-400 uppercase tracking-wider">Fun</span>
                        </div>
                        <h3 class="text-white font-black text-xl mb-2">Ciplis Adventure</h3>
                        <p class="text-gray-400 text-sm mb-6 line-clamp-2">Join Ciplis in a fun and colorful adventure through magical worlds.</p>
                        <div class="flex justify-end">
                            <a href="{{ route('game.detail') }}" class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-2 rounded-full font-bold transition-colors">Play</a>
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