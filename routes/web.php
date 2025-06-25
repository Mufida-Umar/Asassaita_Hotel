<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebPageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\MessageController;


// Public Pages
Route::get('/', [WebPageController::class, 'home'])->name('home');
Route::get('/contact', [WebPageController::class, 'contact'])->name('contact');
Route::get('/update', [WebPageController::class, 'update'])->name('update');
Route::get('/booking', [WebPageController::class, 'booking'])->name('booking');
Route::get('/about', [WebPageController::class, 'about'])->name('about');

// Booking Form Submission (public)
Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');

// Authentication Routes (public)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

Route::post('/contact', [MessageController::class, 'send'])->name('contact.send');
// Admin & Dashboard Routes (protected)
Route::middleware(['auth'])->group(function () {
    // All Admin Route


Route::get('/admin/messages', [MessageController::class, 'index'])->name('dashboard.messages');
    
Route::get('/admin/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::post('/admin/rooms', [RoomController::class, 'store'])->name('rooms.store');
    Route::get('/admin_dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/bookings', [BookingController::class, 'index'])->name('booking.index');
    Route::post('/admin/bookings/{booking}/assign', [BookingController::class, 'assignRoom'])->name('booking.assignRoom');
    Route::delete('/admin/bookings/{booking}', [BookingController::class, 'destroy'])->name('booking.delete');
    Route::get('/admin/bookings/{booking}/edit', [BookingController::class, 'update'])->name('booking.update');
    Route::post('/admin/bookings/{booking}/checkout', [BookingController::class, 'checkout'])->name('booking.checkout');

    // Dashboard
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('/bookings', [DashboardController::class, 'bookings'])->name('dashboard.bookings');
        Route::get('/rooms', [DashboardController::class, 'rooms'])->name('dashboard.rooms');
        Route::get('/message', [DashboardController::class, 'message'])->name('dashboard.message');
        Route::get('/profile', [DashboardController::class, 'profile'])->name('dashboard.profile');
        Route::get('/setting', [DashboardController::class, 'setting'])->name('dashboard.setting');
    });
});