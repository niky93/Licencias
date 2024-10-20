<?php

use Illuminate\Support\Facades\Route;

/**
 * No Auth Views
 */

Route::view('/', 'home')->name('home');                     // Home View
Route::view('/login', 'login')->name('login');              // Login View
Route::view('/register', 'register')->name('register');     // Register View

/**
 * Auth Views
 */

Route::middleware(['auth'])->group(function () {
    /**
     * Private View
     */
    Route::view('/private', 'welcome')->name('private');    // Private View

    /**
     * Login Controller
     */
    Route::name('users.')->group(function () {
        Route::prefix('users')->group(function () {
            Route::post('/register', [LoginController::class, 'register'])->name('register');
            Route::post('/login', [LoginController::class, 'login'])->name('login');
            Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
        });
    });
});
