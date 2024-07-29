<x-app-layout title="Blog posts">
    <a href="{{ route('posts.create') }}">
        New post
    </a>

    <h1>Here is the post list:</h1>
    @foreach ($posts as $post)
        <li class="ml-4">
            <a href="{{route('posts.show', $post)}}">
                {{ $post->title }}
            </a>
        </li>
    @endforeach

    {{ $posts->links() }}
</x-app-layout>
