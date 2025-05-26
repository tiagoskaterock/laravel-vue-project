<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('admin.dashboard');

Route::get('/dashboard', function () {
    return redirect(route('admin.dashboard'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', function () {
    return redirect(route('admin.dashboard'));
})->middleware(['auth', 'verified'])->name('dashboard');