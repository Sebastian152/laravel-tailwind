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

// We can except a route with  
// by adding ->except(routeName), 
// or ->except([routeName1, routeName2, ...]) at the end;
// use the CLI "php artisan r:l" to see the routes created
// by the resource
// if we only need specific routes use
// ->only(routeName) or
// ->only([routeName1, routeName2, ...])
Route::resource('posts', PostController::class);

// If you want only the api routes use Route::apiResource

// we can change the URI
// using Route::resource('articles', PostController::class)
// ->names('posts');

// we can change the parameters name too
// using Route::resource('articles', PostController::class)
// ->parameters(['articles' => 'post'])