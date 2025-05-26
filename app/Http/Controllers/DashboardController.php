<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Post;
use App\Models\Cliente;

class DashboardController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard/Dashboard', [
            'total_de_posts' => Post::count(),
            'total_de_clientes' => Cliente::count(),
        ]);
    }
}
