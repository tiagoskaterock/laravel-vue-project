<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Inertia\Inertia;
use Illuminate\Support\Str;

class ClienteController extends Controller
{
    public function index(Request $request)
    {
        $query = Cliente::query();

        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nome', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('telefone', 'like', "%{$search}%");
            });
        }

        $clientes = $query->orderBy('created_at', 'desc')->paginate(10)->withQueryString();

        return Inertia::render('Cliente/Index', [
            'clientes' => $clientes,
            'page_title' => 'Clientes'
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

        return Inertia::location(route('admin.clientes') . '?success=Cliente criado com sucesso!');
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

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        $validated = $request->validate([
            'nome'     => 'required|string|max:255',
            'email'    => 'required|email|max:255|unique:clientes,email,' . $cliente->id,
            'telefone' => 'nullable|string|max:20',
            'endereco' => 'nullable|string|max:255',
            'cidade'   => 'nullable|string|max:100',
            'estado'   => 'nullable|string|max:100',
            'pais'     => 'nullable|string|max:100',
        ]);

        $cliente->fill($validated);

        if ($cliente->isDirty()) {
            $cliente->save();
            return Inertia::location(route('admin.clientes') . '?success=Cliente atualizado com sucesso!');
        } else {
            return Inertia::location(route('admin.clientes') . '?info=Nada foi modificado!');
        }

    }

    public function destroy(string $id)
    {
        $cliente = Cliente::where('id', $id)->first();
        $cliente->delete();
        return redirect()->route('admin.clientes');
    }
}
