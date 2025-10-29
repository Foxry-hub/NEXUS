<nav class="sticky top-0 z-50 bg-gray-900/95 dark:bg-gray-950/95 backdrop-blur-md border-b border-gray-800 dark:border-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center space-x-2">
                    <div class="w-9 h-9 bg-gradient-to-br from-indigo-500 to-violet-600 rounded-lg flex items-center justify-center shadow-lg">
                        <span class="text-white font-bold text-xl">N</span>
                    </div>
                    <span class="text-2xl font-bold text-white">
                        Nexus
                    </span>
                </a>
            </div>

            <!-- Search Bar (Desktop) -->
            <div class="hidden md:flex flex-1 max-w-2xl mx-8">
                <div class="relative w-full">
                    <input 
                        type="text" 
                        placeholder="Cari karya seni, seniman, atau jasa..."
                        class="w-full px-4 py-2 pl-10 bg-gray-800 dark:bg-gray-900 border border-gray-700 dark:border-gray-800 text-gray-100 placeholder-gray-400 rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-300"
                    >
                    <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>

            <!-- Right Menu -->
            <div class="flex items-center space-x-4">
                <!-- Dark Mode Toggle -->
                <button 
                    id="theme-toggle" 
                    class="p-2 rounded-full bg-gray-800 dark:bg-gray-900 hover:bg-gray-700 dark:hover:bg-gray-800 transition-colors duration-300"
                    aria-label="Toggle dark mode"
                >
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>

                <!-- User Menu -->
                <div class="relative">
                    <button class="flex items-center space-x-2 p-1 rounded-full hover:bg-gray-800 dark:hover:bg-gray-900 transition-colors duration-300">
                        <img 
                            src="https://ui-avatars.com/api/?name=User&background=6366F1&color=fff" 
                            alt="User" 
                            class="w-8 h-8 rounded-full border-2 border-indigo-500"
                        >
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Search Bar -->
    <div class="md:hidden px-4 pb-3">
        <div class="relative w-full">
            <input 
                type="text" 
                placeholder="Cari karya seni..."
                class="w-full px-4 py-2 pl-10 bg-gray-800 dark:bg-gray-900 border border-gray-700 dark:border-gray-800 text-gray-100 placeholder-gray-400 rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-all duration-300"
            >
            <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </div>
    </div>
</nav>
