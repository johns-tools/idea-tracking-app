<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

// Controllers.
use App\Http\Controllers\RegisterUserController;

// Basic route definitions.
Route::get('/register', [RegisterUserController::class, 'create'])->middleware('guest')->name('register');

// Inertia-based routes.
Route::get('/', fn () => Inertia::render('Welcome', [
    'canRegister' => Features::enabled(Features::registration()),
]))->name('home');

Route::get('dashboard', fn () => Inertia::render('Dashboard'))->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php'; // Settings related routes.
