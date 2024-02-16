<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SpecialistController;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    // Menampilkan form login
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    // Proses otentikasi login
    Route::post('login', [LoginController::class, 'authenticate'])->name('authenticate');
    // Proses logout
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    // with middleware auth:admin
    Route::middleware('admin')->group(function () {
        // Dashboard
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('specialists', SpecialistController::class);
    });
    // Route lainnya
});
