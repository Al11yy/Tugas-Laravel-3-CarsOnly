<nav class="fixed top-4 left-0 w-full z-50 transition-all duration-500" id="navbar">
    <div class="container mx-auto px-6 lg:px-8">
        <div class="navbar-container transition-all duration-500" id="navbar-container">
            <div class="flex items-center justify-between h-16 px-6">
                <!-- Logo -->
                <div class="flex-shrink-0 relative">
                    <a href="{{ url('/') }}" class="flex items-center space-x-4 group">
                        <div class="relative">
                            <img src="{{ asset('img/Logo.png') }}" alt="OnlyCars" class="relative z-10 h-8 w-8 rounded-full border-2 border-white/20 shadow-lg transition-transform duration-500 group-hover:scale-110 group-hover:border-white/40">
                        </div>
                        <div class="hidden sm:block">
                            <span class="text-white font-bold text-xl tracking-wider">OnlyCars</span>
                        </div>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:block">
                    <div class="flex items-center space-x-8">
                        <a href="{{ route('events.index') }}" class="nav-item group">
                            <svg class="w-4 h-4 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-white font-medium">Events</span>
                        </a>

                        <a href="{{ route('galleries.index') }}" class="nav-item group">
                            <svg class="w-4 h-4 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-white font-medium">Gallery</span>
                        </a>

                        <a href="{{ route('merchandise.index') }}" class="nav-item group">
                            <svg class="w-4 h-4 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                            <span class="text-white font-medium">Store</span>
                        </a>
                    </div>
                </div>

                <!-- Mobile Button -->
                <div class="lg:hidden">
                    <button type="button" class="mobile-menu-btn group relative" id="mobile-menu-button">
                        <div class="w-12 h-12 bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl flex items-center justify-center hover:bg-white/15 transition-all duration-300">
                            <div class="relative w-6 h-6 flex items-center justify-center">
                                <span class="hamburger-line absolute w-5 h-0.5 bg-white transition-all duration-300 ease-in-out transform -translate-y-1.5"></span>
                                <span class="hamburger-line absolute w-5 h-0.5 bg-white transition-all duration-300 ease-in-out"></span>
                                <span class="hamburger-line absolute w-5 h-0.5 bg-white transition-all duration-300 ease-in-out transform translate-y-1.5"></span>
                            </div>
                        </div>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="lg:hidden absolute top-full left-0 right-0 mt-2 mx-4 hidden opacity-0 transform -translate-y-4 transition-all duration-300 ease-out" id="mobile-menu">
                <div class="bg-black/90 backdrop-blur-xl border border-white/20 rounded-2xl overflow-hidden shadow-2xl">
                    <div class="px-6 py-6 space-y-2">
                        <a href="{{ route('events.index') }}" class="mobile-nav-item group block">
                            <div class="flex items-center space-x-4 p-4 rounded-xl hover:bg-white/10 transition-all duration-300">
                                <div class="mobile-nav-icon">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <span class="text-white font-semibold text-base">Events</span>
                                    <p class="text-gray-400 text-sm mt-0.5">Exclusive automotive events</p>
                                </div>
                                <svg class="w-4 h-4 text-gray-400 group-hover:text-white group-hover:translate-x-1 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </a>
                        
                        <a href="{{ route('galleries.index') }}" class="mobile-nav-item group block">
                            <div class="flex items-center space-x-4 p-4 rounded-xl hover:bg-white/10 transition-all duration-300">
                                <div class="mobile-nav-icon">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <span class="text-white font-semibold text-base">Gallery</span>
                                    <p class="text-gray-400 text-sm mt-0.5">Stunning car photography</p>
                                </div>
                                <svg class="w-4 h-4 text-gray-400 group-hover:text-white group-hover:translate-x-1 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </a>
                        
                        <a href="{{ route('merchandise.index') }}" class="mobile-nav-item group block">
                            <div class="flex items-center space-x-4 p-4 rounded-xl hover:bg-white/10 transition-all duration-300">
                                <div class="mobile-nav-icon">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <span class="text-white font-semibold text-base">Store</span>
                                    <p class="text-gray-400 text-sm mt-0.5">Premium merchandise</p>
                                </div>
                                <svg class="w-4 h-4 text-gray-400 group-hover:text-white group-hover:translate-x-1 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<style>
    /* Navbar scroll effect */
    .navbar-container {
        background: transparent;
        border: 1px solid transparent;
        border-radius: 16px;
        transition: all 0.5s ease;
    }
    
    .navbar-scrolled .navbar-container {
        background: rgba(0, 0, 0, 0.9);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .nav-item {
        display: flex;
        align-items: center;
        padding: 8px 16px;
        border-radius: 12px;
        transition: all 0.3s ease;
    }
    
    .nav-item:hover {
        background: rgba(255, 255, 255, 0.1);
        transform: translateY(-1px);
    }
    
    .mobile-nav-item {
        padding: 16px;
        border-radius: 16px;
        transition: all 0.3s ease;
        display: block;
    }
    
    .mobile-nav-item:hover {
        background: rgba(255, 255, 255, 0.05);
        transform: translateX(4px);
    }
    
    .mobile-nav-icon {
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }
    
    .mobile-nav-item:hover .mobile-nav-icon {
        background: rgba(255, 255, 255, 0.15);
        transform: scale(1.05);
    }
    /* Hamburger Animation */
    .mobile-menu-btn.active .hamburger-line:nth-child(1) {
        transform: rotate(45deg) translate(0, 0);
    }

    .mobile-menu-btn.active .hamburger-line:nth-child(2) {
        opacity: 0;
    }

    .mobile-menu-btn.active .hamburger-line:nth-child(3) {
        transform: rotate(-45deg) translate(0, 0);
    }

    /* Mobile Menu Animation */
    #mobile-menu.show {
        display: block;
        opacity: 1;
        transform: translateY(0);
    }

    .mobile-nav-icon {
        width: 44px;
        height: 44px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        flex-shrink: 0;
    }

    .mobile-nav-item:hover .mobile-nav-icon {
        background: rgba(255, 255, 255, 0.15);
        transform: scale(1.05);
    }

    /* Better touch targets for mobile */
    @media (max-width: 1024px) {
        .mobile-nav-item {
            min-height: 60px;
        }
    }
</style>

<script>
    // Mobile menu toggle with better animations
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        const isOpen = mobileMenu.classList.contains('show');
        
        if (isOpen) {
            // Close menu
            mobileMenu.classList.remove('show');
            mobileMenuButton.classList.remove('active');
            setTimeout(() => {
                mobileMenu.classList.add('hidden');
            }, 300);
        } else {
            // Open menu
            mobileMenu.classList.remove('hidden');
            mobileMenuButton.classList.add('active');
            setTimeout(() => {
                mobileMenu.classList.add('show');
            }, 10);
        }
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!mobileMenuButton.contains(e.target) && !mobileMenu.contains(e.target)) {
            if (mobileMenu.classList.contains('show')) {
                mobileMenu.classList.remove('show');
                mobileMenuButton.classList.remove('active');
                setTimeout(() => {
                    mobileMenu.classList.add('hidden');
                }, 300);
            }
        }
    });

    // Close mobile menu when clicking on a link
    document.querySelectorAll('.mobile-nav-item').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.remove('show');
            mobileMenuButton.classList.remove('active');
            setTimeout(() => {
                mobileMenu.classList.add('hidden');
            }, 300);
        });
    });

    // Navbar scroll effect
    const navbar = document.getElementById('navbar');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('navbar-scrolled');
        } else {
            navbar.classList.remove('navbar-scrolled');
        }
    });

    // Active link highlighting
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-item, .mobile-nav-item');
    
    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.style.background = 'rgba(255, 255, 255, 0.15)';
        }
    });
</script>
