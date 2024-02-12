<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vendor\Auth\LoginController;

Route::group(['prefix' => 'vendor', 'namespace' => 'Vendor'], function () {
    // Auth Routes
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('vendor.login');
    Route::post('login', [LoginController::class, 'login']);
    Route::post('logout', [LoginController::class, 'logout'])->name('vendor.logout');

    // Other vendor routes
});
