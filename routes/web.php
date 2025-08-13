<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MerchandiseController;

// Landing Page
Route::get('/', function () {
    return view('landing');
})->name('landing');

// routes/web.php
Route::get('/about', function () {
    return view('about');
})->name('about');


// Event CRUD
Route::resource('events', EventController::class);

// Gallery CRUD
Route::resource('galleries', GalleryController::class);

// Merchandise CRUD
Route::resource('merchandise', MerchandiseController::class);
