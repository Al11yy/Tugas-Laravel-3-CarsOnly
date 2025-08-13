@extends('layout.main')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-900 via-black to-gray-900 relative overflow-hidden">
    {{-- Animated Background --}}
    <div class="absolute inset-0">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-white/5 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gray-500/5 rounded-full blur-3xl animate-pulse" style="animation-delay: -2s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-white/3 rounded-full blur-3xl animate-pulse" style="animation-delay: -4s;"></div>
    </div>

    {{-- Hero Section --}}
    <section class="relative min-h-screen flex items-center justify-center">
        <div class="container mx-auto px-6 text-center relative z-10 pt-16">
            <div class="max-w-6xl mx-auto">
                {{-- Floating Elements --}}
                <div class="absolute -top-10 left-10 w-4 h-4 bg-white/20 rounded-full animate-bounce" style="animation-delay: 0s;"></div>
                <div class="absolute -top-5 right-20 w-3 h-3 bg-gray-400/20 rounded-full animate-bounce" style="animation-delay: 1s;"></div>
                <div class="absolute top-20 left-1/4 w-2 h-2 bg-white/30 rounded-full animate-bounce" style="animation-delay: 2s;"></div>

                {{-- Premium Badge --}}
                <div class="inline-flex items-center space-x-3 bg-gradient-to-r from-white/10 to-white/5 backdrop-blur-sm border border-white/20 rounded-full px-6 py-3 mb-8 animate-fade-in group hover:from-white/20 hover:to-white/10 transition-all duration-500">
                    <div class="relative">
                        <svg class="w-5 h-5 text-white animate-pulse" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <div class="absolute inset-0 bg-white/20 rounded-full blur-md animate-ping"></div>
                    </div>
                    <span class="text-white font-semibold tracking-wide">PREMIUM AUTOMOTIVE EXPERIENCE</span>
                    <div class="w-2 h-2 bg-white rounded-full animate-pulse"></div>
                </div>

                {{-- Main Heading with better mobile sizing --}}
                <div class="relative mb-8">
                    <h1 class="text-4xl sm:text-6xl md:text-7xl lg:text-8xl font-black leading-tight animate-slide-up">
                        <span class="block text-white mb-2 sm:mb-4 relative">
                            DRIVE THE
                            <div class="absolute inset-0 text-gray-500/20 animate-pulse">DRIVE THE</div>
                        </span>
                        <span class="block bg-gradient-to-r from-white via-gray-300 to-gray-500 bg-clip-text text-transparent relative">
                            FUTURE
                            <div class="absolute inset-0 bg-gradient-to-r from-gray-400 via-gray-600 to-gray-800 bg-clip-text text-transparent opacity-50 blur-sm">FUTURE</div>
                        </span>
                    </h1>
                </div>

                {{-- Subtitle with better mobile sizing --}}
                <div class="mb-8 sm:mb-12 animate-slide-up" style="animation-delay: 0.3s;">
                    <p class="text-lg sm:text-xl md:text-2xl lg:text-3xl text-gray-300 max-w-4xl mx-auto leading-relaxed px-4">
                        Join the most <span class="text-white font-semibold">exclusive automotive community</span> where 
                        <span class="text-gray-200 font-semibold">passion meets innovation</span> and 
                        <span class="text-gray-100 font-semibold">dreams become reality</span>
                    </p>
                </div>

                {{-- Enhanced CTA Buttons with better mobile spacing --}}
                <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 justify-center items-center animate-slide-up px-4" style="animation-delay: 0.6s;">
                    <a href="{{ route('events.index') }}" class="group relative overflow-hidden bg-gradient-to-r from-white to-gray-200 text-black px-6 sm:px-10 py-4 sm:py-5 rounded-full font-bold text-base sm:text-lg hover:from-gray-100 hover:to-white transition-all duration-500 transform hover:scale-105 hover:shadow-2xl hover:shadow-white/25 w-full sm:w-auto text-center">
                        <span class="relative z-10 flex items-center justify-center space-x-3">
                            <span>EXPLORE EVENTS</span>
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </span>
                        <div class="absolute inset-0 bg-gradient-to-r from-gray-200/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </a>
                    
                    <a href="{{ route('galleries.index') }}" class="group relative bg-transparent border-2 border-white/30 text-white px-6 sm:px-10 py-4 sm:py-5 rounded-full font-bold text-base sm:text-lg hover:bg-white/10 hover:border-white/50 transition-all duration-500 transform hover:scale-105 backdrop-blur-sm w-full sm:w-auto text-center">
                        <span class="flex items-center justify-center space-x-3">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span>VIEW GALLERY</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- What We Offer Section --}}
    <section class="py-32 relative">
        <div class="container mx-auto px-6">
            {{-- Section Header with better mobile spacing --}}
            <div class="text-center mb-12 sm:mb-20 px-4">
                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-white mb-4 sm:mb-6">
                    What We Offer
                </h2>
                <p class="text-gray-400 text-lg sm:text-xl max-w-3xl mx-auto">
                    Discover our premium automotive experiences designed for enthusiasts like you.
                </p>
            </div>

            {{-- Offer Cards Grid with better mobile spacing --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8 max-w-7xl mx-auto px-4">
                {{-- Update each card with better mobile padding and touch targets --}}
                <div class="group relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl sm:rounded-3xl p-6 sm:p-8 hover:bg-white/10 transition-all duration-500 animate-fade-in">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent rounded-2xl sm:rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    {{-- Icon Container with better mobile sizing --}}
                    <div class="relative mb-6 sm:mb-8">
                        <div class="w-14 h-14 sm:w-16 sm:h-16 bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl sm:rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:bg-white/15 transition-all duration-300">
                            <svg class="w-7 h-7 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <h3 class="text-xl sm:text-2xl font-black text-white mb-3 sm:mb-4 group-hover:text-gray-100 transition-colors duration-300">
                        Exclusive Events
                    </h3>
                    
                    <p class="text-gray-400 text-sm sm:text-base leading-relaxed mb-6 sm:mb-8 group-hover:text-gray-300 transition-colors duration-300">
                        Join premium automotive events, meets, and experiences with fellow enthusiasts.
                    </p>
                    
                    <a href="{{ route('events.index') }}" class="inline-flex items-center space-x-2 text-white font-semibold group-hover:text-gray-200 transition-colors duration-300 min-h-[44px]">
                        <span>Learn more</span>
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                {{-- Update each card with better mobile padding and touch targets --}}
                <div class="group relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl sm:rounded-3xl p-6 sm:p-8 hover:bg-white/10 transition-all duration-500 animate-fade-in" style="animation-delay: 0.2s;">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent rounded-2xl sm:rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    {{-- Icon Container with better mobile sizing --}}
                    <div class="relative mb-6 sm:mb-8">
                        <div class="w-14 h-14 sm:w-16 sm:h-16 bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl sm:rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:bg-white/15 transition-all duration-300">
                            <svg class="w-7 h-7 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <h3 class="text-xl sm:text-2xl font-black text-white mb-3 sm:mb-4 group-hover:text-gray-100 transition-colors duration-300">
                        Stunning Gallery
                    </h3>
                    
                    <p class="text-gray-400 text-sm sm:text-base leading-relaxed mb-6 sm:mb-8 group-hover:text-gray-300 transition-colors duration-300">
                        Browse our curated collection of automotive photography and documentation.
                    </p>
                    
                    <a href="{{ route('galleries.index') }}" class="inline-flex items-center space-x-2 text-white font-semibold group-hover:text-gray-200 transition-colors duration-300 min-h-[44px]">
                        <span>Learn more</span>
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                {{-- Update each card with better mobile padding and touch targets --}}
                <div class="group relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl sm:rounded-3xl p-6 sm:p-8 hover:bg-white/10 transition-all duration-500 animate-fade-in" style="animation-delay: 0.4s;">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent rounded-2xl sm:rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    {{-- Icon Container with better mobile sizing --}}
                    <div class="relative mb-6 sm:mb-8">
                        <div class="w-14 h-14 sm:w-16 sm:h-16 bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl sm:rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:bg-white/15 transition-all duration-300">
                            <svg class="w-7 h-7 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <h3 class="text-xl sm:text-2xl font-black text-white mb-3 sm:mb-4 group-hover:text-gray-100 transition-colors duration-300">
                        Premium Merchandise
                    </h3>
                    
                    <p class="text-gray-400 text-sm sm:text-base leading-relaxed mb-6 sm:mb-8 group-hover:text-gray-300 transition-colors duration-300">
                        Shop exclusive OnlyCars merchandise and automotive accessories.
                    </p>
                    
                    <a href="{{ route('merchandise.index') }}" class="inline-flex items-center space-x-2 text-white font-semibold group-hover:text-gray-200 transition-colors duration-300 min-h-[44px]">
                        <span>Learn more</span>
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
