<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Post;

class DashboardController extends Controller
{
    public function index()
    {
        $total_de_posts = Post::count();
        return Inertia::render('Dashboard/Dashboard', [
            'total_de_posts' => $total_de_posts,
        ]);
    }
}
