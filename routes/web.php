<?php

use App\Livewire\Drag;
use Illuminate\Support\Facades\Route;

Route::get('/', Drag::class)
    ->name('drag');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
