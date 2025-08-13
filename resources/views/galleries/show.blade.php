@extends('layout.main')

@section('title', $gallery->title . ' - OnlyCars')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-900 via-black to-gray-900 pt-24">
    {{-- Animated Background --}}
    <div class="fixed inset-0 opacity-30">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-green-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-teal-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: -3s;"></div>
    </div>

    <div class="container mx-auto px-6 py-12 max-w-6xl relative z-10">
        {{-- Back Button --}}
        <div class="mb-12 animate-fade-in">
            <a href="{{ route('galleries.index') }}" class="group inline-flex items-center space-x-3 bg-white/5 backdrop-blur-sm border border-white/20 px-6 py-3 rounded-full text-white hover:bg-white/10 hover:border-white/30 transition-all duration-300">
                <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                </svg>
                <span class="font-semibold">Back to Gallery</span>
            </a>
        </div>

        {{-- Photo Display --}}
        <div class="relative animate-slide-up">
            <div class="absolute inset-0 bg-gradient-to-r from-green-500/5 to-teal-500/5 rounded-3xl blur-xl"></div>
            <div class="relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl overflow-hidden">
                
                {{-- Photo Container --}}
                <div class="relative">
                    <div class="aspect-video lg:aspect-[21/9] bg-black/20 flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('storage/' . $gallery->image_dokumentasi) }}" 
                             alt="{{ $gallery->title }}" 
                             class="w-full h-full object-contain hover:scale-105 transition-transform duration-700">
                    </div>
                    
                    {{-- Photo Overlay Info --}}
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent p-8">
                        <div class="flex items-center justify-between">
                            <div>
                                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white mb-4">{{ $gallery->title }}</h1>
                                <div class="flex items-center space-x-6">
                                    <div class="flex items-center space-x-2 text-gray-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                        <span class="font-semibold">{{ rand(150, 999) }} views</span>
                                    </div>
                                    <div class="flex items-center space-x-2 text-gray-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                        </svg>
                                        <span class="font-semibold">{{ rand(25, 89) }} likes</span>
                                    </div>
                                    <div class="flex items-center space-x-2 text-gray-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                        </svg>
                                        <span class="font-semibold">{{ rand(5, 25) }} comments</span>
                                    </div>
                                </div>
                            </div>
                            
                            {{-- Quick Actions --}}
                            <div class="flex space-x-3">
                                <button class="w-12 h-12 bg-white/20 backdrop-blur-sm border border-white/30 rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 hover:scale-110">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </button>
                                <button class="w-12 h-12 bg-white/20 backdrop-blur-sm border border-white/30 rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 hover:scale-110">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                                    </svg>
                                </button>
                                <button class="w-12 h-12 bg-white/20 backdrop-blur-sm border border-white/30 rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300 hover:scale-110">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Photo Details --}}
                <div class="p-8 lg:p-12">
                    {{-- Photo Meta --}}
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                        <div class="relative">
                            <div class="absolute inset-0 bg-gradient-to-r from-green-500/10 to-teal-500/10 rounded-2xl blur-lg"></div>
                            <div class="relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 text-center">
                                <div class="w-12 h-12 bg-gradient-to-br from-green-500/20 to-teal-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-white font-bold text-lg mb-2">Resolution</h3>
                                <p class="text-gray-400">4K Ultra HD</p>
                            </div>
                        </div>

                        <div class="relative">
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 rounded-2xl blur-lg"></div>
                            <div class="relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 text-center">
                                <div class="w-12 h-12 bg-gradient-to-br from-blue-500/20 to-purple-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m0 0V1a1 1 0 011-1h2a1 1 0 011 1v3M7 4H5a1 1 0 00-1 1v16a1 1 0 001 1h14a1 1 0 001-1V5a1 1 0 00-1-1h-2M7 4h10M9 9h6m-6 4h6m-3 4h3"></path>
                                    </svg>
                                </div>
                                <h3 class="text-white font-bold text-lg mb-2">Category</h3>
                                <p class="text-gray-400">Automotive</p>
                            </div>
                        </div>

                        <div class="relative">
                            <div class="absolute inset-0 bg-gradient-to-r from-orange-500/10 to-red-500/10 rounded-2xl blur-lg"></div>
                            <div class="relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 text-center">
                                <div class="w-12 h-12 bg-gradient-to-br from-orange-500/20 to-red-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-white font-bold text-lg mb-2">Rating</h3>
                                <p class="text-gray-400">4.8/5.0</p>
                            </div>
                        </div>
                    </div>

                    {{-- Action Buttons --}}
                    <div class="flex flex-col sm:flex-row gap-6">
                        <button class="group flex-1 relative overflow-hidden bg-gradient-to-r from-green-600 to-teal-600 text-white px-8 py-5 rounded-2xl font-bold text-lg hover:from-green-500 hover:to-teal-500 transition-all duration-500 transform hover:scale-105 hover:shadow-2xl hover:shadow-green-500/25">
                            <span class="relative z-10 flex items-center justify-center space-x-3">
                                <svg class="w-6 h-6 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                </svg>
                                <span>DOWNLOAD HD</span>
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-r from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </button>
                        
                        <a href="{{ route('galleries.edit', $gallery->id) }}" class="group flex-1 relative bg-white/5 backdrop-blur-sm border border-white/20 text-white px-8 py-5 rounded-2xl font-bold text-lg hover:bg-white/10 hover:border-white/30 transition-all duration-300 text-center">
                            <span class="flex items-center justify-center space-x-3">
                                <svg class="w-6 h-6 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                                <span>EDIT PHOTO</span>
                            </span>
                        </a>
                        
                        <form action="{{ route('galleries.destroy', $gallery->id) }}" method="POST" class="flex-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    onclick="return confirm('Are you sure you want to delete this masterpiece? This action cannot be undone.')"
                                    class="group w-full relative bg-red-500/10 backdrop-blur-sm border border-red-500/20 text-red-400 px-8 py-5 rounded-2xl font-bold text-lg hover:bg-red-500/20 hover:border-red-500/30 transition-all duration-300">
                                <span class="flex items-center justify-center space-x-3">
                                    <svg class="w-6 h-6 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                    <span>DELETE PHOTO</span>
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
