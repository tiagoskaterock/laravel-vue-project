<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Inertia\Inertia;

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

    public function show(string $id)
    {
        $cliente = Cliente::findOrFail($id);

        return Inertia::render('Cliente/Show', [
            'cliente' => $cliente,
        ]);
    }

    public function edit(string $id)
    {
        $cliente = Cliente::where('id', $id)->first();

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
