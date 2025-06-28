<?php

use App\Http\Controllers\ConfiguracoesController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])
    ->prefix('admin/configuracoes')
    ->as('admin.configuracoes')
    ->group(function () {

        Route::get('/', [ConfiguracoesController::class, 'index'])->name('');
    });
