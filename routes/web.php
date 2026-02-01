<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterUserController;
use Illuminate\Support\Facades\Route;
// Controllers.
use Inertia\Inertia;
use Laravel\Fortify\Features;

// Basic route definitions.
Route::get('/register', [RegisterUserController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterUserController::class, 'store'])->middleware(['guest', 'throttle:auth']);

Route::get('/login', [LoginController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'store'])->middleware(['guest', 'throttle:auth']);

Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

// Inertia-based routes.
Route::get('/', fn () => Inertia::render('Welcome', [
    'canRegister' => Features::enabled(Features::registration()),
]))->name('home');

Route::get('dashboard', fn () => Inertia::render('Dashboard'))->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php'; // Settings related routes.
