<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterUserController;
use Illuminate\Support\Facades\Route;
// Controllers.
use Inertia\Inertia;
use Laravel\Fortify\Features;

// Basic route definitions.
Route::get('/register', [RegisterUserController::class, 'create'])->middleware('guest')->name('register');
Route::get('/login', [LoginController::class, 'login'])->middleware('guest')->name('login');

// Inertia-based routes.
Route::get('/', fn () => Inertia::render('Welcome', [
    'canRegister' => Features::enabled(Features::registration()),
]))->name('home');

Route::get('dashboard', fn () => Inertia::render('Dashboard'))->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php'; // Settings related routes.
