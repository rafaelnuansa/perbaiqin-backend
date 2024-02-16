<?php

use App\Http\Controllers\Landing\AppointmentController;
use App\Http\Controllers\Landing\AskTechnicianController;
use App\Http\Controllers\Landing\HomeController;
use App\Http\Controllers\Landing\ProductController;
use App\Http\Controllers\Landing\VideoController;
use App\Http\Controllers\User\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('landing.home.index');
Route::get('/ask-technician', [AskTechnicianController::class, 'index'])->name('landing.ask-technician.index');
Route::get('/ask-technician/{slug}', [AskTechnicianController::class, 'show'])->name('landing.ask-technician.show');

Route::get('/appointments', [AppointmentController::class, 'index'])->name('landing.appointments.index');
Route::get('/videos', [VideoController::class, 'index'])->name('landing.videos.index');
Route::get('/products', [ProductController::class, 'index'])->name('landing.products.index');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/technician.php';
