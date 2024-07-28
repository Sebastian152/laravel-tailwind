<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // If only one method is used, it's preferred to use __invoke
    public function __invoke() {
        return "Welcome to My Laravel-Tailwind app";
    }
}
