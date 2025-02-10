<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LeaveController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('auth')->group(function () {
    Route::get('/signin', [AuthController::class, 'index'])->name('auth.signin');
    Route::post('/signin', [AuthController::class, 'signin'])->name('auth');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::resource('/admin', AdminController::class)->middleware('auth');
Route::resource('/employee', EmployeeController::class)->middleware('auth');
Route::resource('/leave', LeaveController::class)->middleware('auth');
