<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Inertia\Inertia;
use Illuminate\Support\Str;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::
            orderBy('created_at', 'desc')
            ->paginate(10);

        return Inertia::render('Cliente/Index', [
            'clientes' => $clientes,
        ]);
    }

    public function create()
    {
        return Inertia::render('Cliente/Create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome'     => 'required|string|max:255',
            'email'    => 'required|email|max:255|unique:clientes,email',
            'telefone' => 'nullable|string|max:255',
            'endereco' => 'nullable|string|max:255',
            'cidade'   => 'nullable|string|max:255',
            'estado'   => 'nullable|string|max:255',
            'pais'     => 'nullable|string|max:255',
        ]);

        $validated['slug'] = Str::slug($validated['nome']) . '-' . uniqid();

        Cliente::create($validated);

        return redirect()->route('admin.clientes')
            ->with('success', 'Cliente criado com sucesso!');
    }

    public function show(string $id)
    {
        $cliente = Cliente::findOrFail($id);

        return Inertia::render('Cliente/Show', [
            'cliente' => $cliente,
        ]);
    }

    public function edit(string $id)
    {
        $cliente = Cliente::findOrFail($id);

        return Inertia::render('Cliente/Edit', [
            'cliente' => $cliente,
        ]);
    }

    public function destroy(string $id)
    {
        $cliente = Cliente::where('id', $id)->first();
        $cliente->delete();

        return redirect()->route('admin.clientes');

        // return Inertia::render('Cliente/Index', [
        //     'cliente' => $cliente,
        // ]);
    }
}
