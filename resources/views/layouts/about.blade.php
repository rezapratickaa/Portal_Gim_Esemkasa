<!DOCTYPE html>
<html lang="en">
<head>
  <title>Portal Gim Esemkasa</title>
  <link rel="icon" type="image/png" href="{{ asset('images/logo 1.png') }}">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <style>
    .text-glow { text-shadow: 0 0 15px rgba(147, 51, 234, 0.4); }
  </style>
</head>
<body class="bg-[#090A0A] font-sans text-white antialiased min-h-screen flex flex-col">
    @include('components.navbar')

    <main class="grow mx-auto px-6 md:px-24 py-16 md:py-24 max-w-[1600px] w-full overflow-hidden">
        <!-- Hero Section -->
        <div class="flex flex-col md:flex-row items-center gap-12 lg:gap-24">
            
            <!-- LEFT CONTENT -->
            <div class="flex flex-col items-center md:items-start text-center md:text-left w-full md:w-[50%]">
                
                <!-- Badge -->
                <div class="relative mb-6">
                    <div class="absolute inset-0 bg-purple-600/30 blur-2xl rounded-full"></div>
                    <div class="relative w-16 h-16 md:w-20 md:h-20 bg-white/5 border border-white/10 rounded-full flex items-center justify-center backdrop-blur-md">
                        <img src="{{ asset('images/logo 1.png') }}" alt="Portal Game" class="w-10 md:w-12">
                    </div>
                </div>

                <!-- Title -->
                <h1 class="text-white text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-4">
                    PORTAL <span class="text-purple-600">GAME</span> ESEMKASA
                </h1>

                <!-- Description -->
                <p class="text-gray-400 text-base md:text-lg max-w-md leading-relaxed mb-8">
                    We provide the tools, resources, and guidance you need to unlock your full potential.
                    Join us to empower sustainable growth and achieve long-term success.
                </p>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#" class="px-8 py-3 rounded-full bg-purple-600 hover:bg-purple-700 text-white font-bold transition shadow-lg shadow-purple-900/40">
                        Get Started
                    </a>
                    <a href="#" class="px-8 py-3 rounded-full border border-white/20 text-white hover:border-purple-600 transition">
                        View Games
                    </a>
                </div>
            </div>

            <!-- RIGHT IMAGE -->
            <div class="relative w-full md:w-[50%] flex justify-center md:justify-end">
                
                <!-- Glow -->
                <div class="absolute top-1/2 right-0 -translate-y-1/2 w-[520px] h-[520px] bg-purple-600/25 blur-[160px] rounded-full -z-10"></div>

                <!-- Illustration -->
                <img 
                    src="{{ asset('images/hero.png') }}" 
                    alt="Portal Game Illustration"
                    class="w-full max-w-lg md:max-w-xl translate-x-6 md:translate-x-12"
                >
            </div>

        </div>
    </main>

    <section class="max-w-[1600px] mx-auto grid md:grid-cols-2 gap-12 px-6 md:px-24 py-16 items-center">
        <div class="flex justify-center md:justify-start">
            <img src="{{ asset('images/Kimchi.jpg') }}" alt="About Us" class="w-full max-w-sm rounded-2xl shadow-lg shadow-purple-500/10 object-cover">
        </div>
        <div>
            <h2 class="text-white text-3xl md:text-5xl font-bold leading-tight mb-6">
                PORTAL <span class="text-purple-600">GAME</span> ESEMKASA
            </h2>
            <p class="text-gray-400 text-base md:text-lg leading-relaxed mb-8">
                Help MSMEs build a strong digital presence. From product management to sales strategies, we are here to help your business grow faster. Help MSMEs build a strong digital presence. From product management to sales strategies, we are here to help your business grow faster. Help MSMEs build a strong digital presence.
            </p>
            <a href="#" class="inline-block px-8 py-3 rounded-full bg-purple-600 hover:bg-purple-700 text-white font-bold transition shadow-lg shadow-purple-900/40">
                More About Us
            </a>
        </div>
    </section>
    
    <!-- Image Slider Section (from Welcome Page) -->
    <section class="max-w-[1600px] mx-auto px-6 md:px-24 pb-24 mt-8" x-data="{ 
        activeSlide: 0, 
        isHovered: false,
        slides: [
            { image: '{{ asset('images/slider/selamat_datang.png') }}', title: 'Selamat Datang', category: 'Portal Gim • Esemkasa' }, 
            { image: '{{ asset('images/slider/Recepic QuestCoff.jpeg') }}', title: 'Recipe Quest Coff', category: 'Racing • Neo' }, 
            { image: '{{ asset('images/slider/The Murari.jpeg') }}', title: 'Murari', category: 'Puzzle • Adventure' }
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
                    <a href="{{ route('game.detail') }}" class="shrink-0 w-full h-full relative overflow-hidden block">
                        <!-- Background Image with Zoom Effect -->
                         <img :src="slide.image" alt="Game Screenshot" 
                               class="w-full h-full transition-transform duration-2000 ease-out"
                               :class="[activeSlide === index ? 'scale-110' : 'scale-100', index === 0 ? 'object-fill' : 'object-cover']">
                        
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
                    </a>
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

            <!-- Auto-play Progress Bar -->
            <div class="absolute bottom-0 left-0 h-1 bg-purple-600/50 transition-all duration-5000 linear"
                 :style="'width: ' + (activeSlide + 1) * (100 / slides.length) + '%'"></div>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-8 gap-4">
            <template x-for="(slide, index) in slides" :key="index">
                <button @click="activeSlide = index"
                        class="h-2 rounded-full transition-all duration-500"
                        :class="activeSlide === index ? 'w-12 bg-purple-600 shadow-[0_0_15px_rgba(147,51,234,0.6)]' : 'w-2 bg-white/10 hover:bg-white/30'">
                </button>
            </template>
        </div>
    </section>
    
    <div class="flex flex-col items-center px-6 py-20 text-center">
        <div class="flex items-center gap-4 mb-4">
            <span class="w-12 h-1 bg-purple-600"></span>
            <p class="text-purple-600 font-bold uppercase tracking-widest text-sm">
                Connect With Us
            </p>
            <span class="w-12 h-1 bg-purple-600"></span>
        </div>

        <h2 class="text-white font-bold text-3xl md:text-5xl mt-2 leading-tight">
            Interested in working with us?<br class="hidden md:block"> 
            Let's build something amazing.
        </h2>

        <p class="text-gray-400 text-lg mt-6 max-w-2xl leading-relaxed">
            Reach out to us through our social media channels! Our team at <strong>UI Stellar Studio</strong> is ready to help you transform your digital ideas into reality.
        </p>

        <div class="flex flex-wrap justify-center gap-8 mt-12">
            <a href="https://wa.me/6282229569749?text=Halo%20kak%20saya%20ingin%20Membuat%20website%20dengan%20UI%20Stellar%20Studio" target="_blank" class="text-white hover:text-green-500 hover:scale-125 transition-all duration-300">
                <i class="bx bxl-whatsapp text-4xl"></i>
            </a>
            <a href="https://www.instagram.com/uistellar?igsh=ajdvZHJ2dXFmZ3Jv" target="_blank" class="text-white hover:text-pink-500 hover:scale-125 transition-all duration-300">
                <i class='bx bxl-instagram text-4xl'></i>
            </a>
            <a href="https://www.linkedin.com/company/105322251/admin/dashboard/" target="_blank" class="text-white hover:text-blue-500 hover:scale-125 transition-all duration-300">
                <i class='bx bxl-linkedin-square text-4xl'></i>
            </a>
        </div>
    </div>

@include('components.footer')
</body>
</html>