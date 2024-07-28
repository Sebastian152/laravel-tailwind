{{-- Another way to make a layout is using layout documents
@extends('layouts.app') <- use this in this document
    layouts <- it is your layouts folder
    app     <- it is your layout document name eg. app.blade.php
...
@section('content')     <- use this in this document
    content <- it is the variable rendered content
...
    here you can put your variable content
...
@endsection()           <- close the section in this document

-----------------------------------------------------------
@yield('content')       <- use this in your layout document 
    content <- it is the variable rendered content
--}}
<x-app-layout title="My laravel tailwind app">
    <div class="max-w-4xl mx-auto px-auto">
        <h1>Welcome to My Laravel-Tailwind app</h1>
        <x-alert class="mb-8">
            <x-slot name="title">Titulo a!</x-slot>
            Contenido de la alerta
        </x-alert>
        <p>Hola mundo</p>
    </div>
</x-app-layout>
