@extends('layout.main')

@section('title', 'Store - OnlyCars')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-900 via-black to-gray-900 pt-32">
    {{-- Animated Background --}}
    <div class="fixed inset-0 opacity-30">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-white/5 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gray-500/5 rounded-full blur-3xl animate-pulse" style="animation-delay: -4s;"></div>
    </div>

    <div class="container mx-auto px-6 py-12 relative z-10">
        {{-- Header Section --}}
        <div class="text-center mb-16">
            <div class="inline-flex items-center space-x-3 bg-white/10 border border-white/20 rounded-full px-6 py-3 mb-8">
                <div class="relative">
                    <div class="w-3 h-3 bg-white rounded-full animate-ping"></div>
                    <div class="absolute inset-0 w-3 h-3 bg-white rounded-full"></div>
                </div>
                <span class="text-white font-bold tracking-wider">PREMIUM COLLECTION</span>
            </div>
            
            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black text-white mb-6">
                EXCLUSIVE <span class="bg-gradient-to-r from-white to-gray-400 bg-clip-text text-transparent">STORE</span>
            </h1>
            <p class="text-gray-400 text-xl max-w-4xl mx-auto leading-relaxed mb-12">
                Discover premium OnlyCars merchandise crafted for automotive enthusiasts who demand excellence. 
                Each piece represents our commitment to quality and passion for automotive culture.
            </p>

            {{-- Action Button --}}
            <a href="{{ route('merchandise.create') }}" class="group inline-flex items-center space-x-3 bg-gradient-to-r from-white to-gray-200 text-black px-8 py-4 rounded-full font-bold hover:from-gray-100 hover:to-white transition-all duration-500 transform hover:scale-105 hover:shadow-2xl hover:shadow-white/25">
                <svg class="w-5 h-5 group-hover:rotate-90 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                <span>ADD NEW PRODUCT</span>
            </a>
        </div>

        @if($merchandise->count())
            {{-- Products Grid --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @foreach($merchandise as $index => $item)
                    <div class="group relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl overflow-hidden hover:bg-white/10 transition-all duration-500 animate-fade-in transform hover:scale-105 hover:shadow-2xl hover:shadow-white/10" style="animation-delay: {{ $index * 0.1 }}s;">
                        {{-- Product Badge --}}
                        <div class="absolute top-4 left-4 z-10">
                            <div class="bg-gradient-to-r from-white to-gray-200 text-black px-3 py-1 rounded-full text-xs font-bold">
                                PREMIUM
                            </div>
                        </div>

                        {{-- Product Image --}}
                        <div class="relative aspect-square overflow-hidden">
                            <img src="{{ asset('storage/' . $item->image_merch) }}" 
                                 alt="{{ $item->name }}" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            
                            {{-- Gradient Overlay --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            
                            {{-- Quick Actions --}}
                            <div class="absolute top-4 right-4 flex flex-col space-y-2 opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-4 group-hover:translate-x-0">
                                <button class="w-10 h-10 bg-white/20 backdrop-blur-sm border border-white/30 rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 hover:scale-110">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </button>
                                <a href="{{ route('merchandise.edit', $item->id) }}" class="w-10 h-10 bg-white/20 backdrop-blur-sm border border-white/30 rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 hover:scale-110">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </a>
                                <form action="{{ route('merchandise.destroy', $item->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            onclick="return confirm('Remove this product?')"
                                            class="w-10 h-10 bg-red-500/20 backdrop-blur-sm border border-red-500/30 rounded-full flex items-center justify-center text-red-400 hover:bg-red-500/30 transition-all duration-300 hover:scale-110">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                        
                        {{-- Product Info --}}
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-white mb-2 truncate group-hover:text-gray-200 transition-colors duration-300">{{ $item->name }}</h3>
                            
                            <div class="flex items-center justify-between mb-3">
                                <div class="text-2xl font-black bg-gradient-to-r from-white to-gray-400 bg-clip-text text-transparent">
                                    Rp {{ number_format($item->price, 0, ',', '.') }}
                                </div>
                                <div class="flex items-center space-x-1">
                                    @for($i = 0; $i < 5; $i++)
                                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                        </svg>
                                    @endfor
                                </div>
                            </div>
                            
                            @if($item->description)
                                <p class="text-gray-400 text-sm mb-4 line-clamp-2">{{ Str::limit($item->description, 60) }}</p>
                            @endif
                            
                            {{-- Product Features --}}
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-white/10 border border-white/20 rounded-full text-white text-xs font-semibold">Premium Quality</span>
                                <span class="px-2 py-1 bg-white/5 border border-white/10 rounded-full text-gray-400 text-xs">Limited Stock</span>
                            </div>
                            
                            <button onclick="openProductModal({{ $item->id }})" class="w-full text-white hover:text-gray-300 transition-colors flex items-center justify-center space-x-2 font-semibold bg-white/5 hover:bg-white/10 border border-white/20 hover:border-white/30 rounded-xl py-3 transition-all duration-300">
                                <span class="text-sm">VIEW DETAILS</span>
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            {{-- Empty State --}}
            <div class="text-center py-32">
                <div class="relative max-w-md mx-auto">
                    <div class="absolute inset-0 bg-gradient-to-r from-white/5 to-gray-500/5 rounded-3xl blur-xl"></div>
                    <div class="relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-12">
                        <div class="w-24 h-24 bg-gradient-to-br from-white/10 to-gray-500/10 rounded-full flex items-center justify-center mx-auto mb-8">
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">STORE OPENING SOON</h3>
                        <p class="text-gray-400 mb-8">Premium OnlyCars merchandise will be available here. Start building your exclusive collection.</p>
                        <a href="{{ route('merchandise.create') }}" class="inline-flex items-center space-x-2 bg-gradient-to-r from-white to-gray-200 text-black px-6 py-3 rounded-full font-semibold hover:from-gray-100 hover:to-white transition-all duration-300">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <span>ADD FIRST PRODUCT</span>
                        </a>
                    </div>
                </div>
            </div>
        @endif
    </div>

    {{-- Product Detail Modal --}}
    <div id="productModal" class="fixed inset-0 bg-black/80 backdrop-blur-sm z-50 hidden items-center justify-center p-4">
        <div class="relative max-w-4xl w-full max-h-[90vh] overflow-y-auto">
            <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-3xl overflow-hidden transform scale-95 transition-all duration-500" id="productModalContent">
                {{-- Modal content will be loaded here --}}
            </div>
            
            {{-- Close Button --}}
            <button onclick="closeProductModal()" class="absolute top-4 right-4 w-12 h-12 bg-white/20 backdrop-blur-sm border border-white/30 rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </div>
</div>

<script>
function openProductModal(productId) {
    const modal = document.getElementById('productModal');
    const modalContent = document.getElementById('productModalContent');
    
    // Show modal with animation
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    
    setTimeout(() => {
        modalContent.style.transform = 'scale(1)';
    }, 50);
    
    // Load product details (you can fetch via AJAX here)
    // For now, we'll redirect to the show page
    window.location.href = `/merchandise/${productId}`;
}

function closeProductModal() {
    const modal = document.getElementById('productModal');
    const modalContent = document.getElementById('productModalContent');
    
    modalContent.style.transform = 'scale(0.95)';
    
    setTimeout(() => {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }, 300);
}

// Close modal when clicking outside
document.getElementById('productModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeProductModal();
    }
});
</script>
@endsection
