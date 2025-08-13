@extends('layout.main')

@section('title', 'Add Product - OnlyCars')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-900 via-black to-gray-900 pt-24">
    {{-- Animated Background --}}
    <div class="fixed inset-0 opacity-30">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-white/5 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gray-500/5 rounded-full blur-3xl animate-pulse" style="animation-delay: -4s;"></div>
    </div>

    <div class="container mx-auto px-6 py-12 max-w-4xl relative z-10">
        {{-- Header Section --}}
        <div class="text-center mb-16 animate-fade-in">
            <div class="inline-flex items-center space-x-3 bg-white/10 border border-white/20 rounded-full px-6 py-3 mb-8">
                <div class="relative">
                    <div class="w-3 h-3 bg-white rounded-full animate-ping"></div>
                    <div class="absolute inset-0 w-3 h-3 bg-white rounded-full"></div>
                </div>
                <span class="text-white font-bold tracking-wider">CREATE PRODUCT</span>
            </div>
            
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white mb-6">
                NEW <span class="bg-gradient-to-r from-white to-gray-400 bg-clip-text text-transparent">MERCHANDISE</span>
            </h1>
            <p class="text-gray-400 text-xl max-w-3xl mx-auto">Design premium automotive merchandise that represents the OnlyCars lifestyle</p>
        </div>

        {{-- Form Container --}}
        <div class="relative animate-slide-up">
            <div class="absolute inset-0 bg-gradient-to-r from-white/5 to-gray-500/5 rounded-3xl blur-xl"></div>
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

                <form action="{{ route('merchandise.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                    @csrf

                    {{-- Product Name & Price Grid --}}
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div class="space-y-3">
                            <label class="flex items-center space-x-2 text-white font-bold text-lg">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                </svg>
                                <span>Product Name</span>
                            </label>
                            <div class="relative">
                                <input type="text" name="name" value="{{ old('name') }}" 
                                       placeholder="Enter premium product name..."
                                       class="w-full bg-white/5 backdrop-blur-sm border border-white/20 rounded-2xl px-6 py-4 text-white placeholder-gray-400 focus:border-white/50 focus:bg-white/10 focus:outline-none transition-all duration-300">
                                <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-white/5 to-gray-500/5 opacity-0 hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                            </div>
                        </div>

                        <div class="space-y-3">
                            <label class="flex items-center space-x-2 text-white font-bold text-lg">
                                <svg class="w-5 h-5 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                </svg>
                                <span>Price (IDR)</span>
                            </label>
                            <div class="relative">
                                <div class="absolute left-6 top-1/2 transform -translate-y-1/2 text-gray-400 font-bold">Rp</div>
                                <input type="number" name="price" value="{{ old('price') }}" 
                                       placeholder="0"
                                       class="w-full bg-white/5 backdrop-blur-sm border border-white/20 rounded-2xl pl-12 pr-6 py-4 text-white placeholder-gray-400 focus:border-white/50 focus:bg-white/10 focus:outline-none transition-all duration-300">
                                <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-gray-200/5 to-white/5 opacity-0 hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                            </div>
                        </div>
                    </div>

                    {{-- Product Description --}}
                    <div class="space-y-3">
                        <label class="flex items-center space-x-2 text-white font-bold text-lg">
                            <svg class="w-5 h-5 text-gray-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <span>Product Description</span>
                        </label>
                        <div class="relative">
                            <textarea name="description" rows="6" 
                                      placeholder="Describe your premium automotive merchandise..."
                                      class="w-full bg-white/5 backdrop-blur-sm border border-white/20 rounded-2xl px-6 py-4 text-white placeholder-gray-400 focus:border-white/50 focus:bg-white/10 focus:outline-none resize-none transition-all duration-300">{{ old('description') }}</textarea>
                            <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-gray-100/5 to-white/5 opacity-0 hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                        </div>
                    </div>

                    {{-- Product Image Upload --}}
                    <div class="space-y-3">
                        <label class="flex items-center space-x-2 text-white font-bold text-lg">
                            <svg class="w-5 h-5 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span>Product Image</span>
                        </label>
                        <div class="relative">
                            <div class="bg-white/5 backdrop-blur-sm border-2 border-dashed border-white/20 rounded-2xl p-16 text-center hover:border-white/40 hover:bg-white/10 transition-all duration-300 group">
                                <div class="w-20 h-20 bg-gradient-to-br from-white/10 to-gray-500/10 rounded-full flex items-center justify-center mx-auto mb-8 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-10 h-10 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                    </svg>
                                </div>
                                <input type="file" name="image_merch" accept="image/*" required
                                       class="w-full text-gray-300 file:mr-4 file:py-4 file:px-8 file:rounded-xl file:border-0 file:text-sm file:font-bold file:bg-gradient-to-r file:from-white file:to-gray-200 file:text-black hover:file:from-gray-100 hover:file:to-white file:transition-all file:duration-300">
                                <p class="text-gray-400 mt-6 font-medium text-lg">Upload premium product image</p>
                                <p class="text-gray-500 text-sm mt-3">JPG, PNG, GIF up to 10MB • Professional quality recommended</p>
                            </div>
                        </div>
                    </div>

                    {{-- Action Buttons --}}
                    <div class="flex flex-col sm:flex-row gap-6 pt-8">
                        <button type="submit" class="group flex-1 relative overflow-hidden bg-gradient-to-r from-white to-gray-200 text-black px-8 py-5 rounded-2xl font-bold text-lg hover:from-gray-100 hover:to-white transition-all duration-500 transform hover:scale-105 hover:shadow-2xl hover:shadow-white/25">
                            <span class="relative z-10 flex items-center justify-center space-x-3">
                                <svg class="w-6 h-6 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                                <span>ADD PRODUCT</span>
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-r from-gray-200/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </button>
                        
                        <a href="{{ route('merchandise.index') }}" class="group flex-1 relative bg-white/5 backdrop-blur-sm border border-white/20 text-white px-8 py-5 rounded-2xl font-bold text-lg hover:bg-white/10 hover:border-white/30 transition-all duration-300 text-center">
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
