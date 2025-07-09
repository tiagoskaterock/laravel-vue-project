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
        $validated = $request->validate([
            'empresa' => 'required|string|max:255',
            'site' => 'required|string|max:255',
            'aplicativo' => 'required|string|max:255',
        ]);

        $config = Configuracao::firstOrFail();

        $config->fill($validated);

        if ($config->isDirty()) {
            $config->save();
            return Inertia::location(route('admin.configuracoes') . '?success=' . urlencode('Configurações atualizadas com sucesso!'));
        } else {
            // dd('else');
            return Inertia::location(route('admin.configuracoes') . '?info=Nada foi modificado!');
        }
    }

}
