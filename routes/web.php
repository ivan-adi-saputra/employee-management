<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('auth')->group(function () {
    Route::get('/signin', [AuthController::class, 'index'])->name('auth.signin');
    Route::post('/signin', [AuthController::class, 'signin'])->name('auth');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('/admin', AdminController::class);
});
