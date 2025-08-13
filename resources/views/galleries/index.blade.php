@extends('layout.main')

@section('title', 'Gallery - OnlyCars')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-900 via-black to-gray-900 pt-32">
    {{-- Animated Background --}}
    <div class="fixed inset-0 opacity-30">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-white/5 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gray-500/5 rounded-full blur-3xl animate-pulse" style="animation-delay: -3s;"></div>
    </div>

    <div class="container mx-auto px-6 py-12 relative z-10">
        {{-- Header Section --}}
        <div class="text-center mb-16">
            <div class="inline-flex items-center space-x-3 bg-white/10 border border-white/20 rounded-full px-6 py-3 mb-8">
                <div class="relative">
                    <div class="w-3 h-3 bg-white rounded-full animate-ping"></div>
                    <div class="absolute inset-0 w-3 h-3 bg-white rounded-full"></div>
                </div>
                <span class="text-white font-bold tracking-wider">VISUAL EXCELLENCE</span>
            </div>
            
            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black text-white mb-6">
                AUTOMOTIVE <span class="bg-gradient-to-r from-white to-gray-400 bg-clip-text text-transparent">ARTISTRY</span>
            </h1>
            <p class="text-gray-400 text-xl max-w-4xl mx-auto leading-relaxed mb-12">
                Immerse yourself in our curated collection of breathtaking automotive photography, 
                capturing the essence of speed, luxury, and engineering perfection.
            </p>

            {{-- Action Button --}}
            <a href="{{ route('galleries.create') }}" class="group inline-flex items-center space-x-3 bg-gradient-to-r from-white to-gray-200 text-black px-8 py-4 rounded-full font-bold hover:from-gray-100 hover:to-white transition-all duration-500 transform hover:scale-105 hover:shadow-2xl hover:shadow-white/25">
                <svg class="w-5 h-5 group-hover:rotate-90 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                <span>UPLOAD MASTERPIECE</span>
            </a>
        </div>

        @if($galleries->count())
            {{-- Masonry Gallery Grid --}}
            <div class="columns-1 sm:columns-2 lg:columns-3 xl:columns-4 gap-6 space-y-6">
                @foreach($galleries as $index => $gallery)
                    <div class="break-inside-avoid group relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl overflow-hidden hover:bg-white/10 transition-all duration-500 animate-fade-in" style="animation-delay: {{ $index * 0.1 }}s;">
                        {{-- Image Container --}}
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('storage/' . $gallery->image_dokumentasi) }}" 
                                 alt="{{ $gallery->title }}" 
                                 class="w-full h-auto object-cover group-hover:scale-110 transition-transform duration-700 cursor-pointer"
                                 onclick="openGalleryModal({{ $gallery->id }})">
                            
                            {{-- Gradient Overlay --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                            
                            {{-- Floating Action Buttons --}}
                            <div class="absolute top-4 right-4 flex flex-col space-y-2 opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-4 group-hover:translate-x-0 z-20">
                                <button class="w-10 h-10 bg-white/20 backdrop-blur-sm border border-white/30 rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 hover:scale-110 cursor-pointer">
                                    <svg class="w-4 h-4 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </button>
                                <a href="{{ route('galleries.edit', $gallery->id) }}" class="w-10 h-10 bg-white/20 backdrop-blur-sm border border-white/30 rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 hover:scale-110 cursor-pointer">
                                    <svg class="w-4 h-4 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </a>
                                <button type="button"
                                        onclick="deleteGallery(event, {{ $gallery->id }})"
                                        class="w-10 h-10 bg-red-500/20 backdrop-blur-sm border border-red-500/30 rounded-full flex items-center justify-center text-red-400 hover:bg-red-500/30 transition-all duration-300 hover:scale-110 cursor-pointer">
                                    <svg class="w-4 h-4 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                </button>
                                {{-- Hidden form for deletion --}}
                                <form id="delete-form-{{ $gallery->id }}" action="{{ route('galleries.destroy', $gallery->id) }}" method="POST" class="hidden">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>

                            {{-- Photo Info Overlay --}}
                            <div class="absolute bottom-0 left-0 right-0 p-6 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 pointer-events-none">
                                <h3 class="text-white font-bold text-lg mb-2 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">{{ $gallery->title }}</h3>
                                <div class="flex items-center space-x-4 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-200">
                                    <div class="flex items-center space-x-2 text-gray-300 text-sm">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                        <span>{{ rand(150, 999) }}</span>
                                    </div>
                                    <div class="flex items-center space-x-2 text-gray-300 text-sm">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                        </svg>
                                        <span>{{ rand(25, 89) }}</span>
                                    </div>
                                </div>
                            </div>
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">GALLERY AWAITS</h3>
                        <p class="text-gray-400 mb-8">Your automotive masterpieces will be showcased here. Start building your visual legacy.</p>
                        <a href="{{ route('galleries.create') }}" class="inline-flex items-center space-x-2 bg-gradient-to-r from-white to-gray-200 text-black px-6 py-3 rounded-full font-semibold hover:from-gray-100 hover:to-white transition-all duration-300">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <span>UPLOAD FIRST PHOTO</span>
                        </a>
                    </div>
                </div>
            </div>
        @endif
    </div>

    {{-- Gallery Detail Modal --}}
    <div id="galleryModal" class="fixed inset-0 bg-black/90 backdrop-blur-sm z-50 hidden items-center justify-center p-4">
        <div class="relative max-w-6xl w-full max-h-[90vh] overflow-y-auto">
            <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-3xl overflow-hidden transform scale-95 transition-all duration-500" id="galleryModalContent">
                {{-- Modal content will be loaded here --}}
            </div>
            
            {{-- Close Button --}}
            <button onclick="closeGalleryModal()" class="absolute top-4 right-4 w-12 h-12 bg-white/20 backdrop-blur-sm border border-white/30 rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 z-10">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </div>
</div>

<script>
function openGalleryModal(galleryId) {
    const modal = document.getElementById('galleryModal');
    const modalContent = document.getElementById('galleryModalContent');
    
    // Show modal with animation
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    
    setTimeout(() => {
        modalContent.style.transform = 'scale(1)';
    }, 50);
    
    // Load gallery details (you can fetch via AJAX here)
    // For now, we'll redirect to the show page
    window.location.href = `/galleries/${galleryId}`;
}

function closeGalleryModal() {
    const modal = document.getElementById('galleryModal');
    const modalContent = document.getElementById('galleryModalContent');
    
    modalContent.style.transform = 'scale(0.95)';
    
    setTimeout(() => {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }, 300);
}

// Function to handle delete action
function deleteGallery(event, galleryId) {
    // Stop event from bubbling up to prevent modal opening
    event.stopPropagation();
    event.preventDefault();
    
    // Show confirmation dialog
    if (confirm('Delete this masterpiece?')) {
        // Submit the hidden form
        document.getElementById('delete-form-' + galleryId).submit();
    }
}

// Close modal when clicking outside
document.getElementById('galleryModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeGalleryModal();
    }
});

// Add event listeners to prevent image click when clicking action buttons
document.addEventListener('DOMContentLoaded', function() {
    const actionButtons = document.querySelectorAll('[onclick*="deleteGallery"], [href*="galleries"][href*="edit"]');
    actionButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    });
});
</script>
@endsection