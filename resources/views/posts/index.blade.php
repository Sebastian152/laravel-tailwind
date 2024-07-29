<x-app-layout title="Blog posts">
    <a href="{{ route('posts.create') }}"
    class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
        New post +
    </a>

    <h1 class="mt-4">Here is the post list:</h1>
    @foreach ($posts as $post)
        <li class="ml-4">
            <a href="{{route('posts.show', $post)}}">
                {{ $post->title }}
            </a>
        </li>
    @endforeach

    {{ $posts->links() }}
</x-app-layout>
