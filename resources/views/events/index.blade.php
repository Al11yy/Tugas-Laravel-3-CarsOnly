@extends('layout.main')

@section('title', 'Events - OnlyCars')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-900 via-black to-gray-900 pt-24">
    {{-- Animated Background --}}
    <div class="fixed inset-0 opacity-30">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-white/5 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gray-500/5 rounded-full blur-3xl animate-pulse" style="animation-delay: -3s;"></div>
    </div>

    <div class="container mx-auto px-6 py-12 relative z-10">
        {{-- Header Section --}}
        <div class="text-center mb-16 animate-fade-in">
            <div class="inline-flex items-center space-x-3 bg-white/10 border border-white/20 rounded-full px-6 py-3 mb-8">
                <div class="relative">
                    <div class="w-3 h-3 bg-white rounded-full animate-ping"></div>
                    <div class="absolute inset-0 w-3 h-3 bg-white rounded-full"></div>
                </div>
                <span class="text-white font-bold tracking-wider">AUTOMOTIVE EXPERIENCES</span>
            </div>
            
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white mb-6">
                PREMIUM <span class="bg-gradient-to-r from-white to-gray-400 bg-clip-text text-transparent">EVENTS</span>
            </h1>
            <p class="text-gray-400 text-xl max-w-3xl mx-auto">Discover exclusive automotive experiences crafted for enthusiasts</p>
        </div>

        {{-- Action Bar --}}
        <div class="flex flex-col sm:flex-row justify-between items-center mb-12 gap-6">
            <div class="text-gray-400">
                <span class="text-2xl font-bold text-white">{{ $events->count() }}</span> Events Available
            </div>
            
            <a href="{{ route('events.create') }}" class="group relative overflow-hidden bg-gradient-to-r from-white to-gray-200 text-black px-8 py-4 rounded-2xl font-bold hover:from-gray-100 hover:to-white transition-all duration-500 transform hover:scale-105 hover:shadow-2xl hover:shadow-white/25">
                <span class="relative z-10 flex items-center space-x-3">
                    <svg class="w-5 h-5 group-hover:rotate-180 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    <span>CREATE EVENT</span>
                </span>
                <div class="absolute inset-0 bg-gradient-to-r from-gray-200/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            </a>
        </div>

        {{-- Success Message --}}
        @if(session('success'))
            <div class="relative mb-8 animate-slide-up">
                <div class="absolute inset-0 bg-gradient-to-r from-green-500/10 to-emerald-500/10 rounded-2xl blur-lg"></div>
                <div class="relative bg-green-500/10 backdrop-blur-sm border border-green-500/20 rounded-2xl p-6">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-green-500/20 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-green-400 font-bold">{{ session('success') }}</span>
                    </div>
                </div>
            </div>
        @endif

        {{-- Events Grid --}}
        @if($events->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 animate-slide-up">
                @foreach($events as $event)
                    <div class="relative group">
                        <div class="absolute inset-0 bg-gradient-to-r from-white/5 to-gray-500/5 rounded-3xl blur-lg group-hover:blur-xl transition-all duration-300"></div>
                        <div class="relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl overflow-hidden hover:bg-white/10 hover:border-white/20 transition-all duration-500 transform hover:scale-[1.02] hover:shadow-2xl hover:shadow-white/10">
                            
                            {{-- Event Image --}}
                            <div class="relative h-64 overflow-hidden">
                                @if($event->cover_image)
                                    {{-- INI YANG PENTING! Cara menampilkan gambar yang benar --}}
                                    <img src="{{ asset('storage/' . $event->cover_image) }}" 
                                         alt="{{ $event->title }}"
                                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                @else
                                    {{-- Placeholder jika tidak ada gambar --}}
                                    <div class="w-full h-full bg-gradient-to-br from-gray-700 to-gray-800 flex items-center justify-center">
                                        <div class="text-center">
                                            <svg class="w-16 h-16 text-gray-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                            <span class="text-gray-500 text-sm">No Image</span>
                                        </div>
                                    </div>
                                @endif
                                
                                {{-- Gradient Overlay --}}
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-60 group-hover:opacity-80 transition-opacity duration-300"></div>
                                
                                {{-- Event Date Badge --}}
                                <div class="absolute top-4 right-4">
                                    <div class="bg-white/20 backdrop-blur-sm border border-white/30 rounded-xl px-4 py-2">
                                        <div class="text-center">
                                            <div class="text-white font-bold text-lg leading-none">{{ \Carbon\Carbon::parse($event->date)->format('d') }}</div>
                                            <div class="text-white/80 text-xs uppercase tracking-wider">{{ \Carbon\Carbon::parse($event->date)->format('M') }}</div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Quick Actions --}}
                                <div class="absolute top-4 left-4 opacity-0 group-hover:opacity-100 transition-all duration-300 transform -translate-y-2 group-hover:translate-y-0">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('events.edit', $event->id) }}" 
                                           class="w-10 h-10 bg-blue-500/20 backdrop-blur-sm border border-blue-400/30 rounded-xl flex items-center justify-center hover:bg-blue-500/30 transition-colors duration-300">
                                            <svg class="w-4 h-4 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                            </svg>
                                        </a>
                                        <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete this event?')"
                                                    class="w-10 h-10 bg-red-500/20 backdrop-blur-sm border border-red-400/30 rounded-xl flex items-center justify-center hover:bg-red-500/30 transition-colors duration-300">
                                                <svg class="w-4 h-4 text-red-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            {{-- Event Info --}}
                            <div class="p-6 space-y-4">
                                {{-- Event Title --}}
                                <div>
                                    <h3 class="text-white font-black text-xl mb-2 line-clamp-2 group-hover:text-gray-200 transition-colors duration-300">
                                        {{ $event->title }}
                                    </h3>
                                </div>

                                {{-- Event Meta --}}
                                <div class="space-y-3">
                                    <div class="flex items-center space-x-3 text-gray-400">
                                        <div class="w-8 h-8 bg-white/10 rounded-full flex items-center justify-center">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                        <span class="font-medium">{{ \Carbon\Carbon::parse($event->date)->format('l, F j, Y') }}</span>
                                    </div>
                                    
                                    <div class="flex items-center space-x-3 text-gray-400">
                                        <div class="w-8 h-8 bg-white/10 rounded-full flex items-center justify-center">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            </svg>
                                        </div>
                                        <span class="font-medium truncate">{{ $event->location }}</span>
                                    </div>
                                </div>

                                {{-- Event Description --}}
                                <div>
                                    <p class="text-gray-300 text-sm leading-relaxed line-clamp-3">
                                        {{ $event->description }}
                                    </p>
                                </div>

                                {{-- Action Button --}}
                                <div class="pt-4">
                                    <a href="{{ route('events.show', $event->id) }}" 
                                       class="group/btn w-full bg-gradient-to-r from-white/10 to-white/5 backdrop-blur-sm border border-white/20 text-white px-6 py-3 rounded-xl font-bold text-center hover:from-white/20 hover:to-white/10 hover:border-white/30 transition-all duration-300 transform hover:scale-[1.02] flex items-center justify-center space-x-2">
                                        <span>VIEW DETAILS</span>
                                        <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            {{-- Empty State --}}
            <div class="text-center py-24 animate-slide-up">
                <div class="relative inline-block mb-8">
                    <div class="w-32 h-32 bg-gradient-to-br from-white/10 to-gray-500/10 rounded-full flex items-center justify-center mx-auto">
                        <svg class="w-16 h-16 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">No Events Yet</h3>
                <p class="text-gray-400 mb-8 max-w-md mx-auto">Start creating amazing automotive experiences for your community.</p>
                <a href="{{ route('events.create') }}" 
                   class="inline-flex items-center space-x-2 bg-gradient-to-r from-white to-gray-200 text-black px-8 py-4 rounded-2xl font-bold hover:from-gray-100 hover:to-white transition-all duration-300 transform hover:scale-105">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    <span>Create Your First Event</span>
                </a>
            </div>
        @endif
    </div>
</div>

<style>
@keyframes fade-in {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes slide-up {
    from { opacity: 0; transform: translateY(40px); }
    to { opacity: 1; transform: translateY(0); }
}

.animate-fade-in {
    animation: fade-in 0.8s ease-out;
}

.animate-slide-up {
    animation: slide-up 1s ease-out;
}

.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>

@endsection