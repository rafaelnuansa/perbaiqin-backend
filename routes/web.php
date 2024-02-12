<?php

use App\Http\Controllers\Landing\AskTechnicianController;
use App\Http\Controllers\Landing\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('landing.home.index');
Route::get('/ask-technician', [AskTechnicianController::class, 'index'])->name('landing.ask-technician.index');


require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/technician.php';
