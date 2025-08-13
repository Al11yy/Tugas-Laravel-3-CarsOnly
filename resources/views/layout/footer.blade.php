<footer class="relative mt-20 border-t border-white/10 z-20">
    <div class="glass-dark relative z-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Logo & Description -->
                <div class="md:col-span-2">
                    <div class="flex items-center space-x-3 mb-4">
                        <img src="{{ asset('img/Logo.png') }}" alt="OnlyCars" class="relative z-10 h-8 w-8 rounded-full border-2 border-white/20 shadow-lg transition-transform duration-500 hover:scale-110 hover:border-white/40">
                        <span class="text-white font-bold text-xl">OnlyCars</span>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed max-w-md">
                        Premium automotive community where passion meets innovation. Join us for exclusive events, stunning galleries, and premium merchandise.
                    </p>
                    <div class="flex space-x-4 mt-6">
                    
                        <a href="https://www.instagram.com/onlycars_id/" class="glass p-3 rounded-xl text-gray-400 hover:text-white hover:bg-white/10 transition-all duration-300 relative z-30 cursor-pointer">
                            <svg class="w-5 h-5 pointer-events-none" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="relative z-30">
                    <h3 class="text-white font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('events.index') }}" class="text-gray-400 hover:text-white transition-colors duration-300 cursor-pointer relative z-30 block py-1">Events</a></li>
                        <li><a href="{{ route('galleries.index') }}" class="text-gray-400 hover:text-white transition-colors duration-300 cursor-pointer relative z-30 block py-1">Gallery</a></li>
                        <li><a href="{{ route('merchandise.index') }}" class="text-gray-400 hover:text-white transition-colors duration-300 cursor-pointer relative z-30 block py-1">Merchandise</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div class="relative z-30">
                    <h3 class="text-white font-semibold mb-4">Contact</h3>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li class="cursor-pointer hover:text-white transition-colors duration-300">
                            <a href="mailto:info@onlycars.com" class="block py-1">info@onlycars.com</a>
                        </li>
                        <li class="cursor-pointer hover:text-white transition-colors duration-300">
                            <a href="tel:+62123456789" class="block py-1">+62 123 456 789</a>
                        </li>
                        <li>Jakarta, Indonesia</li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-white/10 mt-8 pt-8 text-center relative z-30">
                <p class="text-gray-400 text-sm">
                    &copy; {{ date('Y') }} OnlyCars. All rights reserved. Made with ❤️ for automotive enthusiasts.
                </p>
            </div>
        </div>
    </div>
</footer>