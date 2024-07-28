<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        // Retrieving all posts
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create() {
        return view('posts.create');
    }

    public function show($post) {
        // Ways to use parameters:
        // , compact('post')
        // , ['post' => $post]
        return view('posts.show', compact('post'));
    }

    
}
