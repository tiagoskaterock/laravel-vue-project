<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\RedirectResponse;

class BlogController extends Controller
{
    public function index() : Response
    {
        $posts = Post::
            with('user')
            ->orderBy('created_at', 'desc')
            ->get();

        return Inertia::render('Blog/Index', [
            'posts' => $posts,
        ]);
    }

    public function show(string $slug) : Response
    {
        $post = Post::
            with('user')
            ->where('slug', $slug)
            ->firstOrFail();

        return Inertia::render('Blog/Show', [
            'post' => $post,
        ]);
    }

    public function edit(string $slug) : Response
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return Inertia::render('Blog/Edit', [
            'post' => $post,
        ]);
    }

    public function update(Request $request, string $id) : RedirectResponse
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post = Post::findOrFail($id);

        $post->update($data);

        return redirect()->route('admin.blog.show', $post->slug)
            ->with('success', 'Post atualizado com sucesso!'); 
    }
}
