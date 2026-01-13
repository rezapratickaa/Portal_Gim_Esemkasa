<!doctype html>
<html>
<head>
  <title>Tales Of Aztlan - Portal Gim Esemkasa</title>
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

    <main class="mx-auto max-w-[1600px] px-6 md:px-10 py-12 md:py-20">
        <div class="flex flex-col lg:flex-row gap-10">
            
            <!-- Left Column: Game Player & Details -->
            <div class="w-full lg:w-3/4">
                
                <!-- Game Player Area -->
                <div class="relative group rounded-4xl overflow-hidden border border-white/10 shadow-2xl aspect-video bg-black">
                    <img src="{{ asset('images/game/Tales Of Azlan.jpg') }}" alt="Game Preview" class="w-full h-full object-fill">
                    
                    <!-- CRT Scanline Effect Overlay -->
                    <div class="absolute inset-0 pointer-events-none opacity-[0.03] mix-blend-overlay" style="background: linear-gradient(rgba(18, 16, 16, 0) 50%, rgba(0, 0, 0, 0.25) 50%), linear-gradient(90deg, rgba(255, 0, 0, 0.06), rgba(0, 255, 0, 0.02), rgba(0, 0, 255, 0.06)); background-size: 100% 4px, 4px 100%;"></div>

                    <!-- Play Button Overlay -->
                    <div class="absolute inset-0 flex items-center justify-center bg-black/40 group-hover:bg-black/20 transition-all duration-500">
                        <button class="group/btn relative flex items-center justify-center w-24 h-24 bg-purple-600 rounded-full hover:scale-110 transition-transform shadow-[0_0_50px_rgba(147,51,234,0.5)]">
                            <svg class="w-10 h-10 text-white fill-current ml-1" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                            <span class="absolute -bottom-10 whitespace-nowrap text-white font-bold opacity-0 group-hover/btn:opacity-100 transition-opacity uppercase tracking-widest text-sm">Mainkan Sekarang</span>
                        </button>
                    </div>

                    <!-- Enhanced Player Bottom Toolbar -->
                    <div class="absolute bottom-0 inset-x-0 p-4 translate-y-2 group-hover:translate-y-0 transition-transform duration-500">
                        <div class="bg-[#0D0D0D]/90 backdrop-blur-2xl border border-white/5 rounded-2xl px-6 py-3 flex items-center justify-between shadow-[0_20px_50px_rgba(0,0,0,0.5)]">
                            <!-- Left: Brand -->
                            <div class="flex items-center gap-4">
                                <div class="relative group/logo">
                                    <div class="absolute -inset-2 bg-purple-600/20 rounded-full blur-lg opacity-0 group-hover/logo:opacity-100 transition-opacity"></div>
                                    <img src="{{ asset('images/logo 1.png') }}" class="h-8 md:h-10 relative transition-transform group-hover/logo:scale-110 group-hover/logo:rotate-3" alt="Logo">
                                </div>
                                <span class="text-sm md:text-lg font-black uppercase tracking-tighter text-white flex items-center gap-1">
                                    PORTAL <span class="text-purple-500 drop-shadow-[0_0_10px_rgba(168,85,247,0.6)]">GIM</span> ESEMKASA
                                </span>
                            </div>

                            <!-- Right: Actions -->
                            <div class="flex items-center gap-4">
                                <!-- Like/Dislike Group -->
                                <div class="flex items-center bg-white/5 rounded-full border border-white/10 overflow-hidden p-1 shadow-inner">
                                    <button class="flex items-center gap-3 px-6 py-2 hover:bg-white/10 rounded-full transition-all group/like">
                                        <svg class="w-5 h-5 text-gray-400 group-hover/like:text-purple-400 group-hover/like:scale-110 transition-all duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3" />
                                        </svg>
                                    </button>
                                    <div class="w-px h-6 bg-white/10 mx-1"></div>
                                    <button class="px-6 py-2 hover:bg-white/10 rounded-full transition-all group/dislike">
                                        <svg class="w-5 h-5 text-gray-400 group-hover/dislike:text-purple-400 group-hover/dislike:scale-110 transition-all duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M10 15v4a3 3 0 0 0 3 3l4-9V2H5.72a2 2 0 0 0-2 1.7l-1.38 9a2 2 0 0 0 2 2.3zM17 2h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2h-3" />
                                        </svg>
                                    </button>
                                </div>

                                <!-- Action Buttons -->
                                <div class="flex items-center gap-2">
                                    <button class="w-11 h-11 flex items-center justify-center bg-white/5 rounded-full hover:bg-purple-600 hover:shadow-[0_0_20px_rgba(147,51,234,0.4)] transition-all border border-white/10 group" title="Replay">
                                        <svg class="w-5 h-5 text-gray-400 group-hover:text-white group-hover:rotate-12 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                                    </button>
                                    <button class="w-11 h-11 flex items-center justify-center bg-white/5 rounded-full hover:bg-purple-600 hover:shadow-[0_0_20px_rgba(147,51,234,0.4)] transition-all border border-white/10 group" title="Fullscreen">
                                        <svg class="w-5 h-5 text-gray-400 group-hover:text-white group-hover:scale-110 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 4l-5 5M4 16v4m0 0h4m-4-4l5-5m11 5v4m0 0h-4m4-4l-5-5"></path></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Game Title & Meta -->
                <div class="mt-8 flex flex-col md:flex-row md:items-center justify-between gap-6">
                    <div>
                        <h1 class="text-4xl md:text-5xl font-black tracking-tighter text-white">Tales Of Aztlan</h1>
                        <div class="flex items-center gap-4 mt-6">
                            <button class="flex items-center gap-2 px-6 py-2 bg-white/5 hover:bg-white/10 border border-white/10 rounded-full transition-all group">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92c0-1.61-1.31-2.92-2.92-2.92z"/></svg>
                                <span class="text-sm font-bold ">Share</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Info Grid -->
                <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 text-sm">
                    <div class="flex flex-col gap-1">
                        <span class="text-gray-500 uppercase tracking-widest text-[10px] font-bold">Penilaian</span>
                        <p class="text-white font-medium">7,8 <span class="text-gray-500 font-normal">(1.345 suara)</span></p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="text-gray-500 uppercase tracking-widest text-[10px] font-bold">Tanggal Rilis</span>
                        <p class="text-white font-medium">18 Januari 2024</p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="text-gray-500 uppercase tracking-widest text-[10px] font-bold">Terakhir Diperbarui</span>
                        <p class="text-white font-medium">24 Januari 2024</p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="text-gray-500 uppercase tracking-widest text-[10px] font-bold">Teknologi</span>
                        <p class="text-white font-medium">Construct 2</p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="text-gray-500 uppercase tracking-widest text-[10px] font-bold">Platform</span>
                        <p class="text-white font-medium">Browser <span class="text-gray-500 font-normal">(desktop-only)</span></p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="text-gray-500 uppercase tracking-widest text-[10px] font-bold">Pengembang</span>
                        <p class="text-purple-400 font-bold">Abisha dan Kawan kawan</p>
                    </div>
                </div>

                <!-- Tags -->
                <div class="mt-10 flex flex-wrap gap-3">
                    <span class="px-4 py-1.5 bg-white/5 border border-white/10 rounded-full text-xs font-bold text-gray-400 uppercase tracking-wider hover:border-purple-600 transition-colors">Io <span class="text-purple-600 ml-1">185</span></span>
                    <span class="px-4 py-1.5 bg-white/5 border border-white/10 rounded-full text-xs font-bold text-gray-400 uppercase tracking-wider hover:border-purple-600 transition-colors">Satu tombol <span class="text-purple-600 ml-1">185</span></span>
                    <span class="px-4 py-1.5 bg-white/5 border border-white/10 rounded-full text-xs font-bold text-gray-400 uppercase tracking-wider hover:border-purple-600 transition-colors">3D <span class="text-purple-600 ml-1">185</span></span>
                    <span class="px-4 py-1.5 bg-white/5 border border-white/10 rounded-full text-xs font-bold text-gray-400 uppercase tracking-wider hover:border-purple-600 transition-colors">Bertahan Hidup <span class="text-purple-600 ml-1">185</span></span>
                    <span class="px-4 py-1.5 bg-white/5 border border-white/10 rounded-full text-xs font-bold text-gray-400 uppercase tracking-wider hover:border-purple-600 transition-colors">Mouse & Keyboard <span class="text-purple-600 ml-1">185</span></span>
                    <span class="px-4 py-1.5 bg-white/5 border border-white/10 rounded-full text-xs font-bold text-gray-400 uppercase tracking-wider hover:border-purple-600 transition-colors">Teka-Teki <span class="text-purple-600 ml-1">112</span></span>
                </div>

                <!-- Content Sections -->
                <div class="mt-12 space-y-10 group/content">
                    <section>
                        <h2 class="text-2xl font-black tracking-tight mb-4">Deskripsi</h2>
                        <p class="text-gray-400 leading-relaxed text-sm">
                            Gim ini merupakan gim yang dibuat oleh siswa siswi SMKN 1 Banyuwangi yang merupakan hasil dari proses pembelajaran mata pelajaran pilihan gim. Permainan Ninja Frog ini adalah permainan jenis platformer dengan misi mengumpulkan point sebanyak banyaknya, dengan rintangan yang beragam, pemain dapat melewati rintangan dengan penuh kesabaran dan ketelitian. 
                        </p>
                    </section>

                    <section>
                        <h2 class="text-2xl font-black tracking-tight mb-4">Cara Bermain</h2>
                        <div class="space-y-6">
                            <div>
                                <h3 class="text-lg font-bold mb-2">Gabungkan balok-balok untuk tumbuh</h3>
                                <p class="text-gray-400 leading-relaxed text-sm">
                                    Gim ini merupakan gim yang dibuat oleh siswa siswi SMKN 1 Banyuwangi yang merupakan hasil dari proses pembelajaran mata pelajaran pilihan gim. Permainan Ninja Frog ini adalah permainan jenis platformer dengan misi mengumpulkan point sebanyak banyaknya, dengan rintangan yang beragam, pemain dapat melewati rintangan dengan penuh kesabaran dan ketelitian.
                                </p>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold mb-2">Mengikuti kompetisi</h3>
                                <p class="text-gray-400 leading-relaxed text-sm">
                                    Cubes 2048 mengubah 2048 menjadi sebuah <span class="text-purple-500 underline underline-offset-4 cursor-pointer">game .io</span> 3D ! Geser di sekitar arena sambil mengambil balok-balok untuk menjadi lebih besar. Mengambil dua balok dengan angka yang sama akan menggabungkannya menjadi satu balok sebagai jumlah total keduanya.
                                </p>
                            </div>
                        </div>
                    </section>

                    <section>
                        <h2 class="text-2xl font-black tracking-tight mb-4">Tips dan Trik</h2>
                        <ul class="list-disc list-inside text-gray-400 leading-relaxed text-sm space-y-2">
                            <li>Anda dapat memotong lawan dan mengambil blok mereka selama blok tersebut lebih kecil</li>
                            <li>Gunakan peningkatan kecepatan untuk mengejar lawan dengan cepat</li>
                            <li>Gunakan dorongan umum Anda untuk melarikan diri dari mengejar pemain lain</li>
                            <li>Hindari tanda pembagian karena ini akan membagi dua angka Anda</li>
                        </ul>
                    </section>
                </div>
            </div>

            <!-- Right Column: Recommended Games -->
            <div class="w-full lg:w-1/4">
                <div class="sticky top-10">
                    <div class="flex items-center gap-3 mb-8 group/title">
                        <div class="h-8 w-1 bg-purple-600 rounded-full group-hover:h-10 transition-all duration-300 shadow-[0_0_15px_rgba(147,51,234,0.6)]"></div>
                        <h3 class="text-xl font-black uppercase tracking-tighter text-white">Direkomendasikan</h3>
                    </div>
                    
                    <div class="grid grid-cols-1 gap-6">
                        <!-- Game Card Mixins -->
                        @php
                            $recommendedGames = [
                                ['title' => 'Tales Of Aztlan', 'image' => 'images/game/Tales Of Azlan.jpg'],
                                ['title' => 'Ciplis Adventure', 'image' => 'images/game/Ciplisadventure.jpg'],
                                ['title' => 'Martio Game', 'image' => 'images/game/martio.jpg'],
                                ['title' => 'Murari Quest', 'image' => 'images/game/murari1.jpeg'],
                                ['title' => 'Petualangan Kiki', 'image' => 'images/game/Petualangan Kiki.jpeg'],
                                ['title' => 'Rocketir', 'image' => 'images/game/roqitir.jpg'],
                            ];
                        @endphp

                        @foreach($recommendedGames as $game)
                        <a href="{{ route('game.detail') }}" class="group relative block aspect-video rounded-2xl overflow-hidden border border-white/5 bg-white/3 backdrop-blur-sm transition-all hover:scale-105 hover:border-purple-600/50 hover:shadow-[0_0_40px_rgba(147,51,234,0.2)]">
                            <img src="{{ asset($game['image']) }}" alt="{{ $game['title'] }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-1000 group-hover:scale-110">
                            
                            <!-- Hover Overlay: Gradient & Text -->
                            <div class="absolute inset-0 bg-linear-to-t from-black via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex flex-col justify-end p-4">
                                <span class="text-white font-black text-xs leading-tight translate-y-2 group-hover:translate-y-0 transition-transform duration-500 line-clamp-2">
                                    {{ $game['title'] }}
                                </span>
                                <div class="w-0 group-hover:w-full h-0.5 bg-purple-600 mt-2 transition-all duration-700 delay-100"></div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </main>

    @include('components.footer')
</body>
</html>