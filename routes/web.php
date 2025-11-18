<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Authenticated routes
Route::middleware(['auth', 'verified'])->group(function () {
    // Home page
    Route::get('/', function () {
        return Inertia::render('Index');
    })->name('dashboard');

    // Profile page
    Route::get('profile', function () {
        return Inertia::render('Profile');
    })->name('profile');
});

require __DIR__.'/auth.php';
