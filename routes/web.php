<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

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

// Index Route, not passing any method 
// as its going to use the __invoke
Route::get('/', HomeController::class);

// GET : Posts Routes
Route::get('/posts', [PostController::class, 'index'])
->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])
->name('posts.create');
Route::get('/posts/{post}/', [PostController::class, 'show'])
->name('posts.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])
->name('posts.edit');

//PUT : Post Route
Route::put('/posts/{post}/', [PostController::class, 'update'])
->name('posts.update');

// POST : Post Route
Route::post('/posts', [PostController::class, 'store'])
->name('posts.store');

//DELETE : Post Route
Route::delete('/posts/{post}', [PostController::class, 'destroy'])
->name('posts.destroy');

// test route
Route::get('test', function() {
    /* 
    ! Creating new post
    $post = new Post;

    $post->title = 'Titulo de prueba 1';
    $post->content = 'Contenido de prueba 1';
    $post->category = 'Categoria de prueba 1';

    $post->save();

    return $post;
    */
    // ! Searching by id
    // $post = Post::find(1);

    // ! Searching by title / Update register
    /*
   $post = Post::where('title', 'Titulo de prueba 1')
    ->first();

    $post->title = 'My new title';
    $post->save();

    return $post;
    */

    /* 
    ? Return all posts
    $posts = Post::all();

    ? Return all posts with condition
    $posts = Post::where('category', 'Web Development');

    ? Order posts by parameter
    $posts = Post::orderBy('id', 'desc')->get();
    $posts = Post::orderBy('id', 'asc')->get();

    ? Selecting only the category from each register
    ? and showing only 2 registers
    $posts = Post::orderBy('id', 'asc')
            ->select('category')
            ->take(2)
            ->get();

    return $posts;
    */

    /*
    ! Deleting register
    $post = Post::find(1);
    $post->delete();
    return "Register was deleted succesfully";
    */

}); 