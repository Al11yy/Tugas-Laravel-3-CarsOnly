<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@yield('title', 'OnlyCars - Premium Automotive Community')</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/Logo.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.6s ease-out',
                        'float': 'float 6s ease-in-out infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' }
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(30px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' }
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' }
                        },
                        glow: {
                            '0%': { boxShadow: '0 0 20px rgba(255, 255, 255, 0.1)' },
                            '100%': { boxShadow: '0 0 40px rgba(255, 255, 255, 0.2)' }
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        .glass {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .glass-dark {
            background: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #ffffff 0%, #a1a1aa 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .mesh-gradient {
            background: radial-gradient(circle at 20% 80%, rgba(120, 119, 198, 0.3) 0%, transparent 50%),
                        radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                        radial-gradient(circle at 40% 40%, rgba(120, 119, 198, 0.2) 0%, transparent 50%);
        }
        
        body {
            font-family: 'Inter', system-ui, sans-serif;
        }
        
        /* Fix untuk background pattern yang ga interfere sama footer */
        .background-pattern {
            pointer-events: none;
        }
        
        /* Mobile Optimizations */
        @media (max-width: 768px) {
            body {
                font-size: 14px;
                line-height: 1.5;
            }
            
            .container {
                padding-left: 1rem;
                padding-right: 1rem;
            }
            
            /* Better touch targets */
            button, a {
                min-height: 44px;
                min-width: 44px;
            }
            
            /* Prevent horizontal scroll */
            .overflow-x-hidden {
                overflow-x: hidden;
            }
            
            /* Better text sizing for mobile */
            h1 {
                font-size: 2.5rem;
                line-height: 1.2;
            }
            
            h2 {
                font-size: 2rem;
                line-height: 1.3;
            }
            
            h3 {
                font-size: 1.5rem;
                line-height: 1.4;
            }
            
            /* Better spacing for mobile */
            .py-32 {
                padding-top: 4rem;
                padding-bottom: 4rem;
            }
            
            .py-24 {
                padding-top: 3rem;
                padding-bottom: 3rem;
            }
            
            .py-16 {
                padding-top: 2rem;
                padding-bottom: 2rem;
            }
            
            /* Better form inputs for mobile */
            input, textarea, select {
                font-size: 16px; /* Prevents zoom on iOS */
            }
        }

        /* Tablet optimizations */
        @media (min-width: 768px) and (max-width: 1024px) {
            .container {
                padding-left: 2rem;
                padding-right: 2rem;
            }
        }

        /* Better scrolling on mobile */
        html {
            -webkit-overflow-scrolling: touch;
        }

        /* Fix for mobile safari */
        @supports (-webkit-touch-callout: none) {
            .min-h-screen {
                min-height: -webkit-fill-available;
            }
        }
    </style>
</head>
<body class="bg-black text-white overflow-x-hidden">
    <!-- Background Pattern - Fixed pointer events -->
    <div class="fixed inset-0 opacity-30 background-pattern pointer-events-none z-0">
        <div class="absolute inset-0 mesh-gradient"></div>
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-transparent via-transparent to-zinc-900/20"></div>
    </div>

    <!-- Navbar -->
    <div class="relative z-30">
        @include('layout.navbar')
    </div>

    <!-- Main Content -->
    <main class="relative z-10">
        @yield('content')
    </main>

    <!-- Footer - Higher z-index untuk ensure clickability -->
    <div class="relative z-20">
        @include('layout.footer')
    </div>

    <!-- Smooth Scroll Script -->
    <script>
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-slide-up');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });

        // Debug function untuk check clickability (remove di production)
        function debugFooter() {
            const footerLinks = document.querySelectorAll('footer a');
            console.log('Footer links found:', footerLinks.length);
            footerLinks.forEach((link, index) => {
                console.log(`Link ${index}:`, link.href, link.textContent);
            });
        }
        
        // Panggil debug pas DOM ready
        document.addEventListener('DOMContentLoaded', debugFooter);
        
        // Mobile-specific optimizations
        document.addEventListener('DOMContentLoaded', function() {
            // Prevent zoom on double tap for iOS
            let lastTouchEnd = 0;
            document.addEventListener('touchend', function (event) {
                const now = (new Date()).getTime();
                if (now - lastTouchEnd <= 300) {
                    event.preventDefault();
                }
                lastTouchEnd = now;
            }, false);
            
            // Better mobile scroll performance
            let ticking = false;
            function updateScrollEffects() {
                // Your scroll effects here
                ticking = false;
            }
            
            function requestScrollUpdate() {
                if (!ticking) {
                    requestAnimationFrame(updateScrollEffects);
                    ticking = true;
                }
            }
            
            window.addEventListener('scroll', requestScrollUpdate, { passive: true });
            
            // Mobile viewport height fix
            function setVH() {
                let vh = window.innerHeight * 0.01;
                document.documentElement.style.setProperty('--vh', `${vh}px`);
            }
            
            setVH();
            window.addEventListener('resize', setVH);
            window.addEventListener('orientationchange', setVH);
        });
    </script>
</body>
</html>
