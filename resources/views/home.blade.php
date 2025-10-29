<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus - Marketplace Karya Seni & Jasa Kreatif</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 transition-colors duration-300">
    
    <!-- Navbar -->
    <x-navbar />

    <!-- Main Content -->
    <main class="min-h-screen">
        <!-- Hero Section -->
        <section class="relative bg-gradient-to-br from-gray-900 via-indigo-900 to-purple-900 dark:from-gray-950 dark:via-indigo-950 dark:to-purple-950 py-20 md:py-32">
            <!-- Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-indigo-900/20 to-gray-900/50"></div>
            
            <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <!-- Main Heading -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                    Temukan & Tawarkan Karya Seni Digital
                </h1>
                
                <!-- Subtitle -->
                <p class="text-lg md:text-xl text-gray-200 mb-10 max-w-3xl mx-auto">
                    Jelajahi ribuan karya seni dari seniman berbakat, atau tawarkan keahlian Anda kepada dunia
                </p>
                
                <!-- Category Filter -->
                <div class="flex flex-wrap justify-center gap-3 mb-8">
                    <button class="px-5 py-2.5 bg-white/90 dark:bg-white/10 backdrop-blur-sm text-gray-900 dark:text-white rounded-full font-medium hover:bg-white dark:hover:bg-white/20 transition-all duration-300 shadow-lg hover:shadow-xl border border-white/20">
                        Semua
                    </button>
                    <button class="px-5 py-2.5 bg-white/10 backdrop-blur-sm text-white rounded-full font-medium hover:bg-white/20 transition-all duration-300 border border-white/20">
                        Ilustrasi
                    </button>
                    <button class="px-5 py-2.5 bg-white/10 backdrop-blur-sm text-white rounded-full font-medium hover:bg-white/20 transition-all duration-300 border border-white/20">
                        Digital Art
                    </button>
                    <button class="px-5 py-2.5 bg-white/10 backdrop-blur-sm text-white rounded-full font-medium hover:bg-white/20 transition-all duration-300 border border-white/20">
                        3D Modeling
                    </button>
                    <button class="px-5 py-2.5 bg-white/10 backdrop-blur-sm text-white rounded-full font-medium hover:bg-white/20 transition-all duration-300 border border-white/20">
                        Animation
                    </button>
                    <button class="px-5 py-2.5 bg-white/10 backdrop-blur-sm text-white rounded-full font-medium hover:bg-white/20 transition-all duration-300 border border-white/20">
                        UI/UX Design
                    </button>
                </div>
            </div>
            
            <!-- Decorative bottom wave -->
            <div class="absolute bottom-0 left-0 right-0">
                <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
                    <path d="M0 0L60 10C120 20 240 40 360 46.7C480 53 600 47 720 43.3C840 40 960 40 1080 46.7C1200 53 1320 67 1380 73.3L1440 80V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0V0Z" class="fill-gray-50 dark:fill-gray-900"/>
                </svg>
            </div>
        </section>

        <!-- Masonry Grid Section -->
        <section class="bg-gray-50 dark:bg-gray-900 py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div id="masonry-grid" class="masonry-grid">
                    @foreach($artworks as $artwork)
                        <div class="masonry-item group">
                            <div class="relative overflow-hidden rounded-2xl bg-white dark:bg-gray-800 shadow-md hover:shadow-2xl transition-all duration-300">
                                <!-- Image -->
                                <img 
                                    src="{{ $artwork['image'] }}" 
                                    alt="{{ $artwork['title'] }}"
                                    class="w-full h-auto object-cover"
                                    loading="lazy"
                                >
                                
                                <!-- Overlay (appears on hover) -->
                                <div class="absolute inset-0 bg-gradient-to-t from-indigo-900/95 via-indigo-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute inset-0 flex flex-col justify-between p-5">
                                        <!-- Top Buttons -->
                                        <div class="flex justify-end space-x-2">
                                            <button class="p-2.5 bg-indigo-500/90 backdrop-blur-sm rounded-full hover:bg-indigo-600 hover:scale-110 transition-all duration-300 shadow-lg" title="Simpan">
                                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                                                </svg>
                                            </button>
                                        </div>

                                        <!-- Bottom Info & Actions -->
                                        <div class="space-y-3">
                                            <!-- Title -->
                                            <h3 class="text-white font-bold text-lg">{{ $artwork['title'] }}</h3>
                                            
                                            <!-- Artist Info -->
                                            <div class="flex items-center space-x-2">
                                                <span class="text-white/90 text-sm">oleh {{ $artwork['artist'] }}</span>
                                            </div>

                                            <!-- Action Buttons -->
                                            <div class="flex gap-2">
                                                <button class="flex-1 px-4 py-2 bg-indigo-500 backdrop-blur-sm text-white rounded-full font-medium hover:bg-indigo-600 transition-all duration-300 text-sm">
                                                    Simpan
                                                </button>
                                                <button class="px-4 py-2 bg-white/90 backdrop-blur-sm text-indigo-600 rounded-full font-medium hover:bg-white transition-all duration-300 text-sm">
                                                    Jasa
                                                </button>
                                            </div>
                                            
                                            <!-- Likes Counter -->
                                            <div class="flex items-center space-x-1 text-white/80">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="text-sm">{{ rand(50, 999) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Load More Button -->
                <div class="text-center mt-12">
                    <button class="px-8 py-3.5 bg-gradient-to-r from-indigo-500 to-violet-600 text-white rounded-full font-medium hover:shadow-xl hover:scale-105 transition-all duration-300">
                        Muat Lebih Banyak Karya
                    </button>
                </div>
            </div>
        </section>
    </main>

    <!-- Floating Upload Button (Mobile) -->
    <button class="sm:hidden fixed bottom-6 right-6 p-4 bg-gradient-to-r from-indigo-500 to-violet-600 text-white rounded-full shadow-lg hover:shadow-xl hover:scale-110 transition-all duration-300 z-50">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
    </button>

</body>
</html>
