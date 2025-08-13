@extends('layout.main')

@section('title', $event->title . ' - OnlyCars')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-900 via-black to-gray-900 pt-24">
    {{-- Animated Background --}}
    <div class="fixed inset-0 opacity-30 pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-white/5 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gray-500/5 rounded-full blur-3xl animate-pulse" style="animation-delay: -2s;"></div>
    </div>

    <div class="container mx-auto px-6 py-12 max-w-6xl relative z-10">
        {{-- Back Button --}}
        <div class="mb-12 animate-fade-in">
            <a href="{{ route('events.index') }}" class="group inline-flex items-center space-x-3 bg-white/5 backdrop-blur-sm border border-white/20 px-6 py-3 rounded-full text-white hover:bg-white/10 hover:border-white/30 transition-all duration-300">
                <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                </svg>
                <span class="font-semibold">Back to Events</span>
            </a>
        </div>

        {{-- Event Hero Section --}}
        <div class="relative animate-slide-up">
            <div class="absolute inset-0 bg-gradient-to-r from-white/5 to-gray-500/5 rounded-3xl blur-xl"></div>
            <div class="relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl overflow-hidden">
                
                {{-- Event Image --}}
                @if($event->cover_image)
                    <div class="relative h-80 sm:h-96 lg:h-[500px] overflow-hidden">
                        <img src="{{ asset('storage/' . $event->cover_image) }}" 
                             alt="{{ $event->title }}" 
                             class="w-full h-full object-cover"
                             onerror="this.parentElement.style.display='none'; this.parentElement.nextElementSibling.style.display='flex';">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        
                        {{-- Floating Event Info --}}
                        <div class="absolute bottom-8 left-8 right-8">
                            <div class="flex items-center space-x-3 mb-4">
                                <div class="bg-white/20 backdrop-blur-sm border border-white/30 px-4 py-2 rounded-full flex items-center space-x-2">
                                    <div class="w-2 h-2 bg-white rounded-full animate-pulse"></div>
                                    <span class="text-white font-bold text-sm">LIVE EVENT</span>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm border border-white/20 px-4 py-2 rounded-full">
                                    <span class="text-white font-semibold text-sm">{{ \Carbon\Carbon::parse($event->date)->format('F d, Y') }}</span>
                                </div>
                            </div>
                            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white mb-4 leading-tight">
                                {{ $event->title }}
                            </h1>
                        </div>
                    </div>
                @endif
                
                {{-- Fallback for no image or broken image --}}
                <div class="h-80 sm:h-96 bg-gradient-to-br from-white/10 to-gray-500/10 flex items-center justify-center relative {{ $event->cover_image ? 'hidden' : '' }}" id="fallbackImage">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="relative text-center">
                        <div class="w-24 h-24 bg-white/10 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-12 h-12 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black bg-gradient-to-r from-white to-gray-400 bg-clip-text text-transparent mb-4">
                            {{ $event->title }}
                        </h1>
                        <div class="flex items-center justify-center space-x-3 mb-4">
                            <div class="bg-white/20 backdrop-blur-sm border border-white/30 px-4 py-2 rounded-full flex items-center space-x-2">
                                <div class="w-2 h-2 bg-white rounded-full animate-pulse"></div>
                                <span class="text-white font-bold text-sm">LIVE EVENT</span>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm border border-white/20 px-4 py-2 rounded-full">
                                <span class="text-white font-semibold text-sm">{{ \Carbon\Carbon::parse($event->date)->format('F d, Y') }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Event Details --}}
                <div class="p-8 lg:p-12">
                    {{-- Event Meta Information --}}
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                        <div class="relative">
                            <div class="absolute inset-0 bg-gradient-to-r from-white/5 to-gray-500/5 rounded-2xl blur-lg"></div>
                            <div class="relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 text-center">
                                <div class="w-12 h-12 bg-gradient-to-br from-white/10 to-gray-500/10 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-white font-bold text-lg mb-2">Event Date</h3>
                                <p class="text-gray-400">{{ \Carbon\Carbon::parse($event->date)->format('F d, Y') }}</p>
                            </div>
                        </div>

                        @if($event->location)
                            <div class="relative">
                                <div class="absolute inset-0 bg-gradient-to-r from-white/5 to-gray-500/5 rounded-2xl blur-lg"></div>
                                <div class="relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 text-center">
                                    <div class="w-12 h-12 bg-gradient-to-br from-white/10 to-gray-500/10 rounded-full flex items-center justify-center mx-auto mb-4">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-white font-bold text-lg mb-2">Location</h3>
                                    <p class="text-gray-400">{{ $event->location }}</p>
                                </div>
                            </div>
                        @endif

                        <div class="relative">
                            <div class="absolute inset-0 bg-gradient-to-r from-white/5 to-gray-500/5 rounded-2xl blur-lg"></div>
                            <div class="relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 text-center">
                                <div class="w-12 h-12 bg-gradient-to-br from-white/10 to-gray-500/10 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-white font-bold text-lg mb-2">Attendees</h3>
                                <p class="text-gray-400">{{ rand(25, 150) }} Registered</p>
                            </div>
                        </div>
                    </div>

                    {{-- Event Description --}}
                    @if($event->description)
                        <div class="mb-12">
                            <h2 class="text-3xl font-black text-white mb-6 flex items-center space-x-3">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                <span>About This Event</span>
                            </h2>
                            <div class="relative">
                                <div class="absolute inset-0 bg-gradient-to-r from-white/5 to-gray-500/5 rounded-2xl blur-lg"></div>
                                <div class="relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-8">
                                    <p class="text-gray-300 leading-relaxed text-lg">{{ $event->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endif

                    {{-- Debug Info (remove in production) --}}
                    @if(config('app.debug'))
                        <div class="mb-8 p-4 bg-yellow-500/10 border border-yellow-500/20 rounded-lg">
                            <h4 class="text-yellow-400 font-bold mb-2">Debug Info:</h4>
                            <p class="text-yellow-300 text-sm">Cover Image: {{ $event->cover_image ?? 'No image' }}</p>
                            <p class="text-yellow-300 text-sm">Full Path: {{ $event->cover_image ? asset('storage/' . $event->cover_image) : 'N/A' }}</p>
                        </div>
                    @endif

                    {{-- Action Buttons --}}
                    <div class="flex flex-col sm:flex-row gap-6">
                        <button class="group flex-1 relative overflow-hidden bg-gradient-to-r from-white to-gray-200 text-black px-8 py-5 rounded-2xl font-bold text-lg hover:from-gray-100 hover:to-white transition-all duration-500 transform hover:scale-105 hover:shadow-2xl hover:shadow-white/25">
                            <span class="relative z-10 flex items-center justify-center space-x-3">
                                <svg class="w-6 h-6 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                </svg>
                                <span>JOIN EVENT</span>
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-r from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </button>
                        
                        <a href="{{ route('events.edit', $event->id) }}" class="group flex-1 relative bg-white/5 backdrop-blur-sm border border-white/20 text-white px-8 py-5 rounded-2xl font-bold text-lg hover:bg-white/10 hover:border-white/30 transition-all duration-300 text-center">
                            <span class="flex items-center justify-center space-x-3">
                                <svg class="w-6 h-6 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                                <span>EDIT EVENT</span>
                            </span>
                        </a>
                        
                        <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="flex-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    onclick="return confirm('Are you sure you want to cancel this event? This action cannot be undone.')"
                                    class="group w-full relative bg-red-500/10 backdrop-blur-sm border border-red-500/20 text-red-400 px-8 py-5 rounded-2xl font-bold text-lg hover:bg-red-500/20 hover:border-red-500/30 transition-all duration-300">
                                <span class="flex items-center justify-center space-x-3">
                                    <svg class="w-6 h-6 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                    <span>CANCEL EVENT</span>
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