<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return "Aquí se mostrarán todos los posts";
    }

    public function create() {
        return "Aqui se mostrará un formulario para crear un post";
    }

    public function show($post) {
        return "Aquí se mostrará el post {$post}";
    }

    
}
