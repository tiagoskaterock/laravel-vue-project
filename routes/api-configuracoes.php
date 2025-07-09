<?php

use App\Http\Controllers\ApiConfiguracoesController;
use Illuminate\Support\Facades\Route;

Route::middleware(['api', 'verified'])
    ->prefix('api/configuracoes')
    ->as('api.configuracoes')
    ->group(function () {

        Route::get('/', [ApiConfiguracoesController::class, 'index'])->name('');
        
    });
