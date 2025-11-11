<?php

use App\Http\Controllers\ImagemController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])
    ->prefix('admin/imagens')
    ->as('admin.imagens')
    ->group(function () {

        Route::get('/', [ImagemController::class, 'index'])->name('');

        Route::get('/adicionar', [ImagemController::class, 'create'])->name('.create');

        Route::post('/store', [ImagemController::class, 'store'])->name('.store');

        Route::get('{id}/{slug}', [ImagemController::class, 'show'])->name('.show');

        Route::get('{id}/editar/{slug}', [ImagemController::class, 'edit'])->name('.edit');

        Route::put('{id}/update', [ImagemController::class, 'update'])->name('.update');
        
        Route::delete('{id}/destroy', [ImagemController::class, 'destroy'])->name('.destroy');
    });
