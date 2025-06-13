<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])
    ->prefix('admin/clientes')
    ->as('admin.clientes')
    ->group(function () {

        Route::get('/', [ClienteController::class, 'index'])->name('');

        Route::get('{slug}', [ClienteController::class, 'show'])->name('.show');

        Route::get('{slug}/editar', [ClienteController::class, 'edit'])->name('.edit');
        
        Route::delete('{slug}/destroy', [ClienteController::class, 'destroy'])->name('.destroy');
    });
