<?php

use App\Http\Controllers\ConfiguracoesController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])
    ->prefix('admin/configuracoes')
    ->as('admin.configuracoes')
    ->group(function () {

        Route::get('/', [ConfiguracoesController::class, 'index'])->name('');

        Route::get('/editar', [ConfiguracoesController::class, 'edit'])->name('.edit');

        Route::put('/update', [ConfiguracoesController::class, 'update'])->name('.update');
    });
