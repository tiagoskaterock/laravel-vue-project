<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/**
 * Início de tudo aqui
 * */
Route::get('/', function () {
    return redirect('login');
});

Route::middleware('auth')->group(function () {
    Route::get('admin/perfil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('admin/perfil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('admin/perfil', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

require __DIR__.'/blog.php';

require __DIR__.'/clientes.php';

require __DIR__.'/dashboard.php';

require __DIR__.'/configuracoes.php';
require __DIR__.'/api-configuracoes.php';
