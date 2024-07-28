<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        // Retrieving all posts
        $posts = Post::orderBy('id', 'desc')->get();
        return view('posts.index', compact('posts'));
    }

    public function create() {
        return view('posts.create');
    }

    public function show($post) {
        // Ways to use parameters:
        // , compact('post')
        // , ['post' => $post]
        $post = Post::find($post);
        return view('posts.show', compact('post'));
    }

    // We create a Request
    public function store(Request $request) {
        $post = new Post();

        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save();

        return redirect('/posts');
    }
    
    public function edit($post) {
        $post = Post::find($post);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $post) {
        $post = Post::find($post);
    }
}
