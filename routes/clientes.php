<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])
    ->prefix('admin/clientes')
    ->as('admin.clientes')
    ->group(function () {

        Route::get('/', [ClienteController::class, 'index'])->name('');

        Route::get('/adicionar', [ClienteController::class, 'create'])->name('.create');

        Route::post('/store', [ClienteController::class, 'store'])->name('.store');

        Route::get('{id}/{slug}', [ClienteController::class, 'show'])->name('.show');

        Route::get('{id}/editar/{slug}', [ClienteController::class, 'edit'])->name('.edit');
        
        Route::delete('{id}/destroy', [ClienteController::class, 'destroy'])->name('.destroy');
    });
