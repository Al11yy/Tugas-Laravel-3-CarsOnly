@extends('layout.main')

@section('title', 'Edit Event - OnlyCars')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-900 via-black to-gray-900 pt-24">
    {{-- Animated Background --}}
    <div class="fixed inset-0 opacity-30">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-white/5 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gray-500/5 rounded-full blur-3xl animate-pulse" style="animation-delay: -2s;"></div>
    </div>

    <div class="container mx-auto px-6 py-12 max-w-4xl relative z-10">
        {{-- Header Section --}}
        <div class="text-center mb-16 animate-fade-in">
            <div class="inline-flex items-center space-x-3 bg-gray-500/10 border border-gray-500/20 rounded-full px-6 py-3 mb-8">
                <div class="relative">
                    <div class="w-3 h-3 bg-gray-400 rounded-full animate-ping"></div>
                    <div class="absolute inset-0 w-3 h-3 bg-gray-400 rounded-full"></div>
                </div>
                <span class="text-gray-300 font-bold tracking-wider">MODIFY EXPERIENCE</span>
            </div>
            
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white mb-6">
                EDIT <span class="bg-gradient-to-r from-gray-300 to-gray-500 bg-clip-text text-transparent">EVENT</span>
            </h1>
            <p class="text-gray-400 text-xl max-w-3xl mx-auto">Perfect your automotive experience and make it even more spectacular</p>
        </div>

        {{-- Form Container --}}
        <div class="relative animate-slide-up">
            <div class="absolute inset-0 bg-gradient-to-r from-gray-500/5 to-white/5 rounded-3xl blur-xl"></div>
            <div class="relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-8 lg:p-12">
                
                @if ($errors->any())
                    <div class="relative mb-8 animate-slide-up">
                        <div class="absolute inset-0 bg-gradient-to-r from-red-500/10 to-pink-500/10 rounded-2xl blur-lg"></div>
                        <div class="relative bg-red-500/10 backdrop-blur-sm border border-red-500/20 rounded-2xl p-6">
                            <div class="flex items-center space-x-3 mb-4">
                                <div class="w-8 h-8 bg-red-500/20 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-red-400 font-bold text-lg">Validation Required</h3>
                            </div>
                            <div class="space-y-2">
                                @foreach ($errors->all() as $error)
                                    <div class="flex items-center space-x-2 text-red-300">
                                        <div class="w-1.5 h-1.5 bg-red-400 rounded-full"></div>
                                        <span class="text-sm">{{ $error }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

                <form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                    @csrf
                    @method('PUT')

                    {{-- Event Title --}}
                    <div class="space-y-3">
                        <label class="flex items-center space-x-2 text-white font-bold text-lg">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                            </svg>
                            <span>Event Title</span>
                        </label>
                        <div class="relative">
                            <input type="text" name="title" value="{{ old('title', $event->title) }}" 
                                   placeholder="Enter an epic event title..."
                                   class="w-full bg-white/5 backdrop-blur-sm border border-white/20 rounded-2xl px-6 py-4 text-white placeholder-gray-400 focus:border-white/50 focus:bg-white/10 focus:outline-none transition-all duration-300">
                            <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-white/5 to-gray-500/5 opacity-0 hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                        </div>
                    </div>

                    {{-- Event Date & Location Grid --}}
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div class="space-y-3">
                            <label class="flex items-center space-x-2 text-white font-bold text-lg">
                                <svg class="w-5 h-5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span>Event Date</span>
                            </label>
                            <div class="relative">
                                <input type="date" name="date" value="{{ old('date', $event->date) }}"
                                       class="w-full bg-white/5 backdrop-blur-sm border border-white/20 rounded-2xl px-6 py-4 text-white focus:border-white/50 focus:bg-white/10 focus:outline-none transition-all duration-300">
                                <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-gray-500/5 to-white/5 opacity-0 hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                            </div>
                        </div>

                        <div class="space-y-3">
                            <label class="flex items-center space-x-2 text-white font-bold text-lg">
                                <svg class="w-5 h-5 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                </svg>
                                <span>Location</span>
                            </label>
                            <div class="relative">
                                <input type="text" name="location" value="{{ old('location', $event->location) }}" 
                                       placeholder="Where the magic happens..."
                                       class="w-full bg-white/5 backdrop-blur-sm border border-white/20 rounded-2xl px-6 py-4 text-white placeholder-gray-400 focus:border-white/50 focus:bg-white/10 focus:outline-none transition-all duration-300">
                                <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-white/5 to-gray-400/5 opacity-0 hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                            </div>
                        </div>
                    </div>

                    {{-- Event Description --}}
                    <div class="space-y-3">
                        <label class="flex items-center space-x-2 text-white font-bold text-lg">
                            <svg class="w-5 h-5 text-gray-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <span>Event Description</span>
                        </label>
                        <div class="relative">
                            <textarea name="description" rows="6" 
                                      placeholder="Describe the ultimate automotive experience you're creating..."
                                      class="w-full bg-white/5 backdrop-blur-sm border border-white/20 rounded-2xl px-6 py-4 text-white placeholder-gray-400 focus:border-white/50 focus:bg-white/10 focus:outline-none resize-none transition-all duration-300">{{ old('description', $event->description) }}</textarea>
                            <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-gray-300/5 to-white/5 opacity-0 hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                        </div>
                    </div>

                    {{-- Current Image & Upload --}}
                    <div class="space-y-4">
                        <label class="flex items-center space-x-2 text-white font-bold text-lg">
                            <svg class="w-5 h-5 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span>Event Poster</span>
                        </label>
                        
                        @if($event->image_event)
                            <div class="relative mb-6">
                                <div class="absolute inset-0 bg-gradient-to-r from-white/5 to-gray-500/5 rounded-2xl blur-lg"></div>
                                <div class="relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6">
                                    <p class="text-gray-400 font-medium mb-4 flex items-center space-x-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <span>Current Poster:</span>
                                    </p>
                                    <img src="{{ asset('storage/' . $event->image_event) }}" 
                                         alt="{{ $event->title }}"
                                         class="w-48 h-48 object-cover rounded-xl border border-white/20 hover:scale-105 transition-transform duration-300">
                                </div>
                            </div>
                        @endif
                        
                        <div class="relative">
                            <div class="bg-white/5 backdrop-blur-sm border-2 border-dashed border-white/20 rounded-2xl p-12 text-center hover:border-white/40 hover:bg-white/10 transition-all duration-300 group">
                                <div class="w-16 h-16 bg-gradient-to-br from-white/10 to-gray-500/10 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                    </svg>
                                </div>
                                <input type="file" name="cover_image" accept="image/*" 
                                       class="w-full text-gray-300 file:mr-4 file:py-3 file:px-6 file:rounded-xl file:border-0 file:text-sm file:font-bold file:bg-gradient-to-r file:from-white file:to-gray-200 file:text-black hover:file:from-gray-100 hover:file:to-white file:transition-all file:duration-300">
                                <p class="text-gray-400 mt-4 font-medium">Upload new poster to replace current one</p>
                                <p class="text-gray-500 text-sm mt-2">JPG, PNG, GIF up to 10MB</p>
                            </div>
                        </div>
                    </div>

                    {{-- Action Buttons --}}
                    <div class="flex flex-col sm:flex-row gap-6 pt-8">
                        <button type="submit" class="group flex-1 relative overflow-hidden bg-gradient-to-r from-gray-300 to-gray-500 text-black px-8 py-5 rounded-2xl font-bold text-lg hover:from-gray-200 hover:to-gray-400 transition-all duration-500 transform hover:scale-105 hover:shadow-2xl hover:shadow-gray-500/25">
                            <span class="relative z-10 flex items-center justify-center space-x-3">
                                <svg class="w-6 h-6 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>UPDATE EVENT</span>
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-r from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </button>
                        
                        <a href="{{ route('events.index') }}" class="group flex-1 relative bg-white/5 backdrop-blur-sm border border-white/20 text-white px-8 py-5 rounded-2xl font-bold text-lg hover:bg-white/10 hover:border-white/30 transition-all duration-300 text-center">
                            <span class="flex items-center justify-center space-x-3">
                                <svg class="w-6 h-6 group-hover:-translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                                </svg>
                                <span>CANCEL</span>
                            </span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
