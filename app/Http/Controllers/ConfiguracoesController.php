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

        return Inertia::render('Configuracao/Index', [
            'config' => $config,
        ]);
    }

    public function edit()
    {
        $config = Configuracao::first();

        return Inertia::render('Configuracao/Edit', [
            'config' => $config,
        ]);
    }

    public function update(Request $request)
    {
        $config = Configuracao::first();

        $config->update($request->only([
            'nome_da_empresa',
            'nome_do_site',
            'nome_do_aplicativo',
        ]));

        return redirect()->route('admin.configuracoes')->with('success', 'Configurações atualizadas.');
    }

}
