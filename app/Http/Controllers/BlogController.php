<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Inertia\Inertia;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::
            with('user')
            ->orderBy('created_at', 'desc')
            ->get();

        return Inertia::render('Blog/Index', [
            'posts' => $posts,
        ]);
    }

    public function show(string $slug)
    {
        $post = Post::
            with('user')
            ->where('slug', $slug)
            ->first();

        return Inertia::render('Blog/Show', [
            'post' => $post,
        ]);
    }

    public function edit(string $slug)
    {
        $post = Post::where('slug', $slug)->first();

        return Inertia::render('Blog/Edit', [
            'post' => $post,
        ]);
    }
}
