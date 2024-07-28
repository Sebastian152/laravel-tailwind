<x-app-layout title="Blog posts">

    <h1>Aquí se mostrarán todos los posts</h1>
        @foreach ($posts as $post)
            <li class="ml-4">
                <a href="/posts/{{$post->id}}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
</x-app-layout>