@extends('layout.main')

@section('title', $item->name . ' - OnlyCars')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-900 via-black to-gray-900 pt-24">
    {{-- Animated Background --}}
    <div class="fixed inset-0 opacity-30">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-white/5 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gray-500/5 rounded-full blur-3xl animate-pulse" style="animation-delay: -4s;"></div>
    </div>

    <div class="container mx-auto px-6 py-12 max-w-7xl relative z-10">
        {{-- Back Button --}}
        <div class="mb-12 animate-fade-in">
            <a href="{{ route('merchandise.index') }}" class="group inline-flex items-center space-x-3 bg-white/5 backdrop-blur-sm border border-white/20 px-6 py-3 rounded-full text-white hover:bg-white/10 hover:border-white/30 transition-all duration-300">
                <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                </svg>
                <span class="font-semibold">Back to Store</span>
            </a>
        </div>

        {{-- Product Details --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 animate-slide-up">
            {{-- Product Image --}}
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-white/5 to-gray-500/5 rounded-3xl blur-xl"></div>
                <div class="relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl overflow-hidden">
                    <div class="aspect-square bg-black/20 flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('storage/' . $item->image_merch) }}" 
                             alt="{{ $item->name }}" 
                             class="w-full h-full object-cover hover:scale-110 transition-transform duration-700">
                    </div>
                    
                    {{-- Image Actions --}}
                    <div class="absolute top-4 right-4 flex space-x-2">
                        <button class="w-10 h-10 bg-white/20 backdrop-blur-sm border border-white/30 rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 hover:scale-110">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                        <button class="w-10 h-10 bg-white/20 backdrop-blur-sm border border-white/30 rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 hover:scale-110">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            {{-- Product Info --}}
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-white/5 to-gray-500/5 rounded-3xl blur-xl"></div>
                <div class="relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-8 lg:p-12">
                    {{-- Product Badge --}}
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="bg-gradient-to-r from-white to-gray-200 text-black px-4 py-2 rounded-full text-sm font-bold">
                            PREMIUM
                        </div>
                        <div class="bg-white/20 border border-white/30 text-white px-4 py-2 rounded-full text-sm font-bold">
                            IN STOCK
                        </div>
                    </div>

                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black bg-gradient-to-r from-white to-gray-400 bg-clip-text text-transparent mb-6">
                        {{ $item->name }}
                    </h1>
                    
                    <div class="text-4xl lg:text-5xl font-black text-white mb-8">
                        Rp {{ number_format($item->price, 0, ',', '.') }}
                    </div>
                    
                    @if($item->description)
                        <div class="mb-8">
                            <h2 class="text-xl font-bold text-white mb-4 flex items-center space-x-2">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                <span>Description</span>
                            </h2>
                            <div class="relative">
                                <div class="absolute inset-0 bg-gradient-to-r from-white/5 to-gray-500/5 rounded-2xl blur-lg"></div>
                                <div class="relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6">
                                    <p class="text-gray-300 leading-relaxed">{{ $item->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endif

                    {{-- Rating & Reviews --}}
                    <div class="mb-8">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="flex items-center space-x-1">
                                @for($i = 0; $i < 5; $i++)
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                    </svg>
                                @endfor
                            </div>
                            <span class="text-white font-semibold">4.9/5.0</span>
                            <span class="text-gray-400">({{ rand(25, 150) }} reviews)</span>
                        </div>
                    </div>

                    {{-- Action Buttons --}}
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="group flex-1 relative overflow-hidden bg-gradient-to-r from-white to-gray-200 text-black px-8 py-5 rounded-2xl font-bold text-lg hover:from-gray-100 hover:to-white transition-all duration-500 transform hover:scale-105 hover:shadow-2xl hover:shadow-white/25">
                            <span class="relative z-10 flex items-center justify-center space-x-3">
                                <svg class="w-6 h-6 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                                <span>ADD TO CART</span>
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-r from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </button>
                        
                        <a href="{{ route('merchandise.edit', $item->id) }}" class="group flex-1 relative bg-white/5 backdrop-blur-sm border border-white/20 text-white px-8 py-5 rounded-2xl font-bold text-lg hover:bg-white/10 hover:border-white/30 transition-all duration-300 text-center">
                            <span class="flex items-center justify-center space-x-3">
                                <svg class="w-6 h-6 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                                <span>EDIT PRODUCT</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
