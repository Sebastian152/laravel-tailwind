<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    
});

Route::get('/posts', function() {
    return "Aqui se mostrarán los posts";
});

Route::get('/posts/create', function() {
    return "Aqui se mostrará un formulario para crear un post";
});

Route::get('/posts/{post}/{category}', function($post, $category) {
    if($category) {
        return "Aquí se mostrarán el post {$post}, con la categoría: {$category}";
    }
    return "Aquí se mostrará el post {$post}";
});