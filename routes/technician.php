<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Technician\Auth\LoginController;

Route::group(['prefix' => 'technician', 'namespace' => 'Technician', 'as' => 'technician.'], function () {
    // Menampilkan form login
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    // Proses otentikasi login
    Route::post('login', [LoginController::class, 'authenticate'])->name('authenticate');
    // Proses logout
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

});
