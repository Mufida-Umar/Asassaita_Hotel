<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebPageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;




// Auth Route
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/admin_dashboard', [AuthController::class, 'dashboard'])->middleware('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Optional: Forgot Password Route
Route::get('/forgot-password', function () {
    return view('auth.forgot-password'); // Create this view as needed
})->name('password.request');


// Pages Route
Route::get('/',[WebPageController::class, 'home'])->name('home');
Route::get('/contact',[WebPageController::class, 'contact'])->name('contact');
Route::get('/update',[WebPageController::class, 'update'])->name('update');
Route::get('/booking',[WebPageController::class, 'booking'])->name('booking');
Route::get('/about',[WebPageController::class, 'about'])->name('about');


// Dashboard Auth
Route::get('/dashboard/booking', [DashboardController::class, 'booking'])->name('dashboard.booking');
Route::get('/dashboard/rooms', [DashboardController::class, 'rooms'])->name('dashboard.rooms');
Route::get('/dashboard/message', [DashboardController::class, 'message'])->name('dashboard.message');
Route::get('/dashboard/profile', [DashboardController::class, 'profile'])->name('dashboard.profile');
Route::get('/dashboard/setting', [DashboardController::class, 'setting'])->name('dashboard.setting');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');