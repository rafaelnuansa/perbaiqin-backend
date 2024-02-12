<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {
    // Menampilkan form login
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    // Proses otentikasi login
    Route::post('login', [LoginController::class, 'authenticate'])->name('authenticate');
    // Proses logout
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    // Tambahkan rute lainnya untuk admin di sini...

    // with middleware auth:admin
    Route::middleware('admin')->group(function () {
        // Dashboard
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Tambahkan rute lainnya yang memerlukan otentikasi admin di sini...
    });
    // Route lainnya
});
