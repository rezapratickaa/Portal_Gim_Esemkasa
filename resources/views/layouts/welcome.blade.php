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
</head>
<body class="bg-[#090A0A] font-sans text-white antialiased">
    @include('components.navbar')

    <main class="mx-auto md:px-10 px-6 py-12 md:py-24 max-w-[1600px] overflow-hidden">
        <div class="flex flex-col md:flex-row items-center justify-between gap-10 lg:gap-20">
            
            <!-- Left Side: Text Content -->
            <div class="flex flex-col items-center md:items-start text-center md:text-left gap-6 w-full md:w-1/2">
                
                <!-- Hero Logo/Badge -->
                <img src="{{ asset('images/logo 1.png') }}" alt="Portal Gim Badge" class="h-14 md:h-20 mb-2 animate-fade-in-up">

                <!-- Hero Headline -->
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black tracking-tight leading-tight text-white">
                    <div>Discover</div>
                    <div class="text-purple-600">Collect Game</div>
                    <div>From Us</div>
                </h1>

                <!-- Subheading -->
                <p class="text-gray-400 text-base md:text-lg max-w-xl font-medium mt-2 leading-relaxed">
                    Discover the Fun, Collect the Collection, and Start Your Adventure Now !
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row items-center gap-4 mt-6 w-full sm:w-auto">
                    <a href="#" class="w-full sm:w-auto text-center px-10 py-3 bg-purple-600 hover:bg-purple-700 text-white rounded-full font-bold text-lg transition-all transform hover:scale-105 shadow-lg shadow-purple-900/50">
                        Start Game
                    </a>
                    <a href="#" class="w-full sm:w-auto text-center px-10 py-3 bg-transparent border-2 border-purple-600 text-purple-600 hover:bg-purple-600/10 rounded-full font-bold text-lg transition-all hover:scale-105">
                        View All Game
                    </a>
                </div>
            </div>

            <!-- Right Side: Hero Image -->
            <div class="w-full md:w-1/2 flex justify-center md:justify-end relative">
                <!-- Blob/Glow effect behind image -->
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[300px] h-[300px] bg-purple-600/20 rounded-full blur-3xl -z-10"></div>
                
                <img src="{{ asset('images/hero.png') }}" alt="Hero Character" class="w-full max-w-md md:max-w-lg lg:max-w-xl">
            </div>
        </div>
    </main>

    <!-- Image Slider Section -->
    <section class="max-w-[1600px] mx-auto px-6 md:px-10 pb-4 mt-20" x-data="{ 
        activeSlide: 0, 
        isHovered: false,
        slides: [
            { image: '{{ asset('images/slider/slide1.png') }}', title: 'Eternal Realms', category: 'Action • RPG' }, 
            { image: '{{ asset('images/slider/slide2.png') }}', title: 'Cyber Drift', category: 'Racing • Neo' }, 
            { image: '{{ asset('images/slider/slide3.png') }}', title: 'Mystic Quest', category: 'Puzzle • Adventure' }
        ],
        timer: null,
        next() { this.activeSlide = this.activeSlide === this.slides.length - 1 ? 0 : this.activeSlide + 1 },
        prev() { this.activeSlide = this.activeSlide === 0 ? this.slides.length - 1 : this.activeSlide - 1 },
        startTimer() { this.timer = setInterval(() => { if(!this.isHovered) this.next() }, 5000) },
        stopTimer() { clearInterval(this.timer) }
    }" 
    x-init="startTimer()"
    @mouseenter="isHovered = true"
    @mouseleave="isHovered = false"
    @keydown.window="if($event.key === 'ArrowRight') next(); if($event.key === 'ArrowLeft') prev()"
    >
        <!-- Main Slide Display -->
        <div class="relative w-full aspect-video md:aspect-21/8 rounded-4xl overflow-hidden shadow-[0_32px_64px_rgba(0,0,0,0.6)] border border-white/5 group">
            <div class="flex h-full transition-transform duration-1000 cubic-bezier(0.4, 0, 0.2, 1)" :style="'transform: translateX(-' + (activeSlide * 100) + '%)'">
                <template x-for="(slide, index) in slides" :key="index">
                    <div class="shrink-0 w-full h-full relative overflow-hidden">
                        <!-- Background Image with Zoom Effect -->
                        <img :src="slide.image" alt="Game Screenshot" 
                             class="w-full h-full object-cover transition-transform duration-2000 ease-out"
                             :class="activeSlide === index ? 'scale-110' : 'scale-100'">
                        
                        <!-- Premium Gradient Overlay -->
                        <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent"></div>
                        
                        <!-- Content Overlay -->
                        <div class="absolute bottom-8 left-8 md:bottom-12 md:left-12 transition-all duration-700 delay-300"
                             :class="activeSlide === index ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'">
                            <div class="bg-black/30 backdrop-blur-sm p-4 md:p-6 rounded-2xl border border-white/10">
                                <p class="text-purple-500 font-black text-[10px] md:text-xs uppercase tracking-[0.3em] mb-1 drop-shadow-lg" x-text="slide.category"></p>
                                <h2 class="text-2xl md:text-4xl font-black text-white tracking-tighter drop-shadow-2xl" x-text="slide.title"></h2>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
            
            <!-- Elegant Navigation Arrows -->
            <div class="absolute inset-0 flex items-center justify-between px-6 pointer-events-none">
                <button @click="prev()" 
                        class="pointer-events-auto p-3 bg-black/20 backdrop-blur-md border border-white/10 hover:bg-purple-600 hover:border-purple-600 rounded-2xl text-white opacity-0 group-hover:opacity-100 -translate-x-4 group-hover:translate-x-0 transition-all duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button @click="next()" 
                        class="pointer-events-auto p-3 bg-black/20 backdrop-blur-md border border-white/10 hover:bg-purple-600 hover:border-purple-600 rounded-2xl text-white opacity-0 group-hover:opacity-100 translate-x-4 group-hover:translate-x-0 transition-all duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>

            <!-- Auto-play Progress Bar (Optional UI Touch) -->
            <div class="absolute bottom-0 left-0 h-1 bg-purple-600/50 transition-all duration-5000 linear"
                 :style="'width: ' + (activeSlide + 1) * (100 / slides.length) + '%'"></div>
        </div>

        <!-- Pagination Mix: Dots & Pills -->
        <div class="flex justify-center mt-8 gap-4">
            <template x-for="(slide, index) in slides" :key="index">
                <button @click="activeSlide = index"
                        class="h-2 rounded-full transition-all duration-500"
                        :class="activeSlide === index ? 'w-12 bg-purple-600 shadow-[0_0_15px_rgba(147,51,234,0.6)]' : 'w-2 bg-white/10 hover:bg-white/30'">
                </button>
            </template>
        </div>
    </section>
        
    <div class="max-w-[1600px] mx-auto md:px-10 px-6 mt-20 mb-15">
        <h2 class="text-3xl md:text-4xl font-black text-white uppercase tracking-tighter">Our Product <span class="text-purple-600 font-black">Collection</span></h2>
    </div>

    <!-- Product Grid Section -->
    <section class="max-w-[1600px] mx-auto md:px-10 px-6 pb-24">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <!-- Large Product (Left) -->
            <div class="md:col-span-2 relative h-[300px] md:h-full min-h-[400px] rounded-3xl overflow-hidden group shadow-2xl shadow-purple-900/20 border border-white/10">
                <img src="{{ asset('images/slider/slide1.png') }}" alt="Eternal Blade" class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-x-0 bottom-0 p-8 bg-linear-to-t from-black/90 via-black/40 to-transparent flex items-end justify-between">
                    <div class="flex items-center gap-4">
                        <button class="px-6 py-2 bg-purple-600 hover:bg-purple-700 text-white rounded-full font-bold transition-all shadow-lg shadow-purple-600/50">
                            Play
                        </button>
                    </div>
                    <div class="text-right">
                        <h3 class="text-2xl font-bold text-white mb-1">Eternal Blade: Realms</h3>
                        <p class="text-purple-400 text-sm font-medium">Adventure • RPG</p>
                    </div>
                </div>
            </div>

            <!-- Small Products (Right Column) -->
            <div class="space-y-6">
                <!-- Small Product 1 -->
                <div class="relative h-[240px] rounded-3xl overflow-hidden group shadow-2xl shadow-purple-900/10 border border-white/10">
                    <img src="{{ asset('images/slider/slide1.png') }}" alt="Neon Overdrive" class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-x-0 bottom-0 p-6 bg-linear-to-t from-black/90 via-black/40 to-transparent flex items-end justify-between">
                        <button class="px-5 py-2 bg-purple-600/80 hover:bg-purple-600 text-white rounded-full font-bold transition-all">
                            Play
                        </button>
                        <div class="text-right">
                            <h3 class="text-lg font-bold text-white">Neon Overdrive</h3>
                            <p class="text-purple-400 text-xs font-medium">Racing • Sci-Fi</p>
                        </div>
                    </div>
                </div>

                <!-- Small Product 2 -->
                <div class="relative h-[240px] rounded-3xl overflow-hidden group shadow-2xl shadow-purple-900/10 border border-white/10">
                    <img src="{{ asset('images/slider/slide1.png') }}" alt="Block Quest" class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-x-0 bottom-0 p-6 bg-linear-to-t from-black/90 via-black/40 to-transparent flex items-end justify-between">
                        <button class="px-5 py-2 bg-purple-600/80 hover:bg-purple-600 text-white rounded-full font-bold transition-all">
                            Play
                        </button>
                        <div class="text-right">
                            <h3 class="text-lg font-bold text-white">Block Quest</h3>
                            <p class="text-purple-400 text-xs font-medium">Platformer • Casual</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="max-w-[1600px] mx-auto md:px-10 px-6 mt-20 mb-6 ">
        <!-- <div class="flex items-center gap-4 mb-2">
            <img src="{{ asset('images/logo 1.png') }}" alt="Logo" class="h-8 w-auto opacity-80">
            <div class="h-px w-12 bg-purple-600/30"></div>
        </div> -->
        <h2 class="text-3xl md:text-4xl font-black text-white uppercase tracking-tighter">Our Product <span class="text-purple-600 font-black">Collection</span></h2>
        <p class="text-gray-400 mt-6 text-sm md:text-base max-w-2xl leading-relaxed">
            Explore our curated selection of high-quality games. From action-packed adventures to strategic masterpieces, discover the best experiences crafted for every type of player.
        </p>
    </div>
    <style>
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>

    <div class="max-w-[1600px] mx-auto md:px-10 px-6 mb-12 mt-3" 
         x-data="{ 
            currentFilter: 'all',
            isDown: false, 
            startX: 0, 
            scrollLeft: 0,
            handleMousedown(e) {
                this.isDown = true;
                this.startX = e.pageX - $el.querySelector('.filter-container').offsetLeft;
                this.scrollLeft = $el.querySelector('.filter-container').scrollLeft;
            },
            handleMouseleave() { this.isDown = false; },
            handleMouseup() { this.isDown = false; },
            handleMousemove(e) {
                if(!this.isDown) return;
                e.preventDefault();
                const container = $el.querySelector('.filter-container');
                const x = e.pageX - container.offsetLeft;
                const walk = (x - this.startX) * 2;
                container.scrollLeft = this.scrollLeft - walk;
            }
         }">
        
        <!-- Filter Buttons -->
        <div class="filter-container flex items-center gap-4 md:gap-6 overflow-x-auto no-scrollbar pb-4 select-none cursor-grab active:cursor-grabbing"
             @mousedown="handleMousedown($event)"
             @mouseleave="handleMouseleave()"
             @mouseup="handleMouseup()"
             @mousemove="handleMousemove($event)">
            
            <button @click="currentFilter = 'all'" 
                    :class="currentFilter === 'all' ? 'bg-purple-600 shadow-purple-600/20' : 'bg-transparent border-1 border-purple-600 hover:bg-purple-600/10'"
                    class="whitespace-nowrap text-xs md:text-sm font-bold text-white px-6 py-2 rounded-full transition-all active:scale-95 pointer-events-none md:pointer-events-auto">
                All Products
            </button>
            <button @click="currentFilter = 'latest'" 
                    :class="currentFilter === 'latest' ? 'bg-purple-600 shadow-purple-600/20' : 'bg-transparent border-1 border-purple-600 hover:bg-purple-600/10'"
                    class="whitespace-nowrap text-xs md:text-sm font-bold text-white px-6 py-2 rounded-full transition-all active:scale-95 pointer-events-none md:pointer-events-auto">
                Latest Games
            </button>
            <button @click="currentFilter = 'popular'" 
                    :class="currentFilter === 'popular' ? 'bg-purple-600 shadow-purple-600/20' : 'bg-transparent border-1 border-purple-600 hover:bg-purple-600/10'"
                    class="whitespace-nowrap text-xs md:text-sm font-bold text-white px-6 py-2 rounded-full transition-all active:scale-95 pointer-events-none md:pointer-events-auto">
                Most Popular
            </button>
            <button @click="currentFilter = 'top'" 
                    :class="currentFilter === 'top' ? 'bg-purple-600 shadow-purple-600/20' : 'bg-transparent border-1 border-purple-600 hover:bg-purple-600/10'"
                    class="whitespace-nowrap text-xs md:text-sm font-bold text-white px-6 py-2 rounded-full transition-all active:scale-95 pointer-events-none md:pointer-events-auto">
                Top Rated
            </button>
        </div>

        <!-- Game Cards Grid -->
        <section class="mt-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Card 1 -->
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
                <!-- Card 2 -->
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
                <!-- Card 3 -->
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
                <!-- Card 4 -->
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
                <!-- Card 5 -->
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
                <!-- Card 6 -->
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
                <!-- Card 7 -->
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
                <!-- Card 8 -->
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

        <!-- View All Button -->
        <div class="flex justify-center mt-20 mb-20">
            <a href="#" class="px-6 py-3 bg-purple-600 border-2 border-purple-600 text-white hover:bg-purple-700 hover:border-purple-700 rounded-full font-bold text-lg transition-all hover:scale-105 shadow-[0_0_30px_rgba(147,51,234,0.3)]">
                View All Games
            </a>
        </div>
    </div>

</body> 
@include('components.footer')
</html>