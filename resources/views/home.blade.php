<x-app-layout>
    <div class="max-w-4xl mx-auto px-auto">
        <h1>Welcome to My Laravel-Tailwind app</h1>
        <x-alert class="mb-8">
            <x-slot name="title">Titulo a!</x-slot>
            Contenido de la alerta
        </x-alert>
        <p>Hola mundo</p>
    </div>
</x-app-layout>
