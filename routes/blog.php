<?php

use App\Http\Controllers\BlogController;

Route::get('/admin/blog', [BlogController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('admin.blog');