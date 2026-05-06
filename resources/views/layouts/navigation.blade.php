<!-- resources/views/layouts/header.blade.php -->
<header class="bg-white shadow-md sticky top-0 z-50">
    <nav class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center">
                    <span class="text-2xl font-bold">
                        <span class="text-red-600 hover:text-red-700 transition duration-300">Blog</span><span class="text-gray-800">CTL</span>
                    </span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-red-600 transition duration-300 font-medium {{ request()->routeIs('home') ? 'text-red-600' : '' }}">
                    Home
                </a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-red-600 transition duration-300 font-medium {{ request()->routeIs('about') ? 'text-red-600' : '' }}">
                    About
                </a>
                <a href="{{ route('blogs') }}" class="text-gray-700 hover:text-red-600 transition duration-300 font-medium {{ request()->routeIs('blogs') ? 'text-red-600' : '' }}">
                    Blogs
                </a>
                <a href="{{ route('contact') }}" class="text-gray-700 hover:text-red-600 transition duration-300 font-medium {{ request()->routeIs('contact') ? 'text-red-600' : '' }}">
                    Contact
                </a>
            </div>

            <!-- Desktop CTA Buttons -->
            <div class="hidden md:flex items-center space-x-4">
                @auth
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-700 font-medium">
                            <i class="fas fa-user mr-1"></i>{{ Auth::user()->name }}
                        </span>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="bg-red-600 text-white px-5 py-2 rounded-lg font-medium hover:bg-red-700 transition duration-300 transform hover:scale-105">
                                Logout
                            </button>
                        </form>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="text-red-600 border-2 border-red-600 px-5 py-2 rounded-lg font-medium hover:bg-red-600 hover:text-white transition duration-300 transform hover:scale-105">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="bg-red-600 text-white px-5 py-2 rounded-lg font-medium hover:bg-red-700 transition duration-300 transform hover:scale-105">
                        Register
                    </a>
                @endauth
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 hover:text-red-600 focus:outline-none transition duration-300">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path id="menu-open-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        <path id="menu-close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('home') ? 'bg-red-50 text-red-600' : 'text-gray-700 hover:bg-red-50 hover:text-red-600' }} transition duration-300">
                    Home
                </a>
                <a href="{{ route('about') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('about') ? 'bg-red-50 text-red-600' : 'text-gray-700 hover:bg-red-50 hover:text-red-600' }} transition duration-300">
                    About
                </a>
                <a href="{{ route('blogs') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('blogs') ? 'bg-red-50 text-red-600' : 'text-gray-700 hover:bg-red-50 hover:text-red-600' }} transition duration-300">
                    Blogs
                </a>
                <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('contact') ? 'bg-red-50 text-red-600' : 'text-gray-700 hover:bg-red-50 hover:text-red-600' }} transition duration-300">
                    Contact
                </a>
                
                <div class="border-t border-gray-200 my-2"></div>
                
                @auth
                    <div class="px-3 py-2">
                        <p class="text-gray-700 font-medium mb-2">
                            <i class="fas fa-user mr-1"></i>{{ Auth::user()->name }}
                        </p>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full bg-red-600 text-white px-5 py-2 rounded-lg font-medium hover:bg-red-700 transition duration-300 text-center">
                                Logout
                            </button>
                        </form>
                    </div>
                @else
                    <div class="px-3 py-2 space-y-2">
                        <a href="{{ route('login') }}" class="block w-full text-center text-red-600 border-2 border-red-600 px-5 py-2 rounded-lg font-medium hover:bg-red-600 hover:text-white transition duration-300">
                            Login
                        </a>
                        <a href="{{ route('register') }}" class="block w-full text-center bg-red-600 text-white px-5 py-2 rounded-lg font-medium hover:bg-red-700 transition duration-300">
                            Register
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </nav>
</header>

<script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const openIcon = document.getElementById('menu-open-icon');
        const closeIcon = document.getElementById('menu-close-icon');
        
        menu.classList.toggle('hidden');
        openIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    });

    // Close mobile menu on route change
    document.addEventListener('click', function(e) {
        const menu = document.getElementById('mobile-menu');
        const button = document.getElementById('mobile-menu-button');
        
        if (!menu.classList.contains('hidden') && !menu.contains(e.target) && !button.contains(e.target)) {
            menu.classList.add('hidden');
            document.getElementById('menu-open-icon').classList.remove('hidden');
            document.getElementById('menu-close-icon').classList.add('hidden');
        }
    });
</script>