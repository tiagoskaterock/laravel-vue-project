<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])
    ->prefix('admin/blog')
    ->as('admin.blog')
    ->group(function () {

        Route::get('/', [BlogController::class, 'index'])->name('');

        Route::get('{slug}', [BlogController::class, 'show'])->name('.show');

        Route::get('{slug}/editar', [BlogController::class, 'edit'])->name('.edit');

        Route::put('{id}/update', [BlogController::class, 'update'])->name('.update');

    });
