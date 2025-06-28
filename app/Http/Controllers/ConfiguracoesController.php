<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Configuracao;
use Inertia\Inertia;

class ConfiguracoesController extends Controller
{
    public function index()
    {
        $config = Configuracao::first();

        return Inertia::render('Configuracao/Configuracao', [
            'config' => $config,
        ]);
    }
}
