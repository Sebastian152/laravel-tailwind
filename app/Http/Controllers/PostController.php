<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        // Retrieving all posts
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function create() {
        return view('posts.create');
    }

    public function show(Post $post) {
        // Ways to use parameters:
        // , compact('post')
        // , ['post' => $post]

        //$post = Post::find($post);

        return view('posts.show', compact('post'));
    }

    // We create a Request
    public function store(Request $request) {
        Post::create($request->all());
        return redirect()->route('post.index');
    }
    
    public function edit(Post $post) {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post) {
        $post->update($request->all());
        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
