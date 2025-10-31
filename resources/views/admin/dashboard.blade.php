<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Nexus</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 transition-colors duration-300">

    <!-- Navbar -->
    <x-navbar />

    <div class="flex min-h-screen pt-16">
        <!-- Sidebar -->
        <div class="fixed left-0 top-16 h-full w-64 bg-white dark:bg-gray-800 shadow-lg border-r border-gray-200 dark:border-gray-700 z-40">
            <div class="p-6">
                <h2 class="text-xl font-bold text-gray-800 dark:text-white mb-6">Admin Panel</h2>

                <nav class="space-y-2">
                    <a href="#" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-indigo-50 dark:hover:bg-indigo-900/30 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v2H8V5z"></path>
                        </svg>
                        Dashboard
                    </a>

                    <a href="#" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-indigo-50 dark:hover:bg-indigo-900/30 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                        </svg>
                        Pengguna
                    </a>

                    <a href="#" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-indigo-50 dark:hover:bg-indigo-900/30 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Karya Seni
                    </a>

                    <a href="#" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-indigo-50 dark:hover:bg-indigo-900/30 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                        Pesanan
                    </a>

                    <a href="#" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-indigo-50 dark:hover:bg-indigo-900/30 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Pengaturan
                    </a>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <main class="flex-1 ml-64 p-6">
            <!-- Hero Section -->
            <section class="relative bg-gradient-to-br from-gray-900 via-indigo-900 to-purple-900 dark:from-gray-950 dark:via-indigo-950 dark:to-purple-950 py-16 mb-8 rounded-2xl">
                <!-- Gradient Overlay -->
                <div class="absolute inset-0 bg-gradient-to-b from-transparent via-indigo-900/20 to-gray-900/50 rounded-2xl"></div>

                <div class="relative max-w-5xl mx-auto px-8 text-center">
                    <!-- Welcome Message -->
                    <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">
                        Selamat Datang, Admin!
                    </h1>

                    <!-- Subtitle -->
                    <p class="text-lg text-gray-200 mb-8 max-w-2xl mx-auto">
                        Kelola platform Nexus dan pantau aktivitas pengguna dari dashboard admin
                    </p>

                    <!-- Quick Stats -->
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 max-w-4xl mx-auto">
                        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                            <div class="text-2xl font-bold text-white mb-2">150</div>
                            <div class="text-sm text-gray-300">Total Pengguna</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                            <div class="text-2xl font-bold text-white mb-2">89</div>
                            <div class="text-sm text-gray-300">Karya Seni</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                            <div class="text-2xl font-bold text-white mb-2">45</div>
                            <div class="text-sm text-gray-300">Pesanan Aktif</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                            <div class="text-2xl font-bold text-white mb-2">12</div>
                            <div class="text-sm text-gray-300">Pending Review</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Masonry Grid Section -->
            <section class="bg-transparent">
                <div class="max-w-7xl mx-auto">
                    <h2 class="text-2xl font-bold mb-6">Karya Seni Terbaru</h2>

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
                                                <button class="p-2.5 bg-red-500/90 backdrop-blur-sm rounded-full hover:bg-red-600 hover:scale-110 transition-all duration-300 shadow-lg" title="Hapus">
                                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                    </svg>
                                                </button>
                                                <button class="p-2.5 bg-yellow-500/90 backdrop-blur-sm rounded-full hover:bg-yellow-600 hover:scale-110 transition-all duration-300 shadow-lg" title="Edit">
                                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
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

                                                <!-- Admin Action Buttons -->
                                                <div class="flex gap-2">
                                                    <button class="flex-1 px-4 py-2 bg-green-500 backdrop-blur-sm text-white rounded-full font-medium hover:bg-green-600 transition-all duration-300 text-sm">
                                                        Setujui
                                                    </button>
                                                    <button class="px-4 py-2 bg-red-500 backdrop-blur-sm text-white rounded-full font-medium hover:bg-red-600 transition-all duration-300 text-sm">
                                                        Tolak
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
    </div>

</body>
</html>
