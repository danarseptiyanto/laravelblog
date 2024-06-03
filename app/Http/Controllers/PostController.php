<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('admin.post.newpost');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'thumbnail' => 'required|string|max:255',
            'body' => 'required|string|max:5000',
        ]);

        $request->user()->posts()->create($validated);

        return redirect(route('admin'));
    }

    public function edit(Post $post)
    {
        return view('admin.post.editpost', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'thumbnail' => 'required|string|max:255',
            'body' => 'required|string|max:1000',
        ]);

        $post->update($validated);
        return redirect(route('admin'));
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect(route('admin'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('detail-post', compact('post', 'slug'));
    }
}
