<x-app-layout>

    <a href="{{route('posts.index')}}"
        class=" focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
        Return to posts...
    </a>
    <h1 class="mt-4 mb-4">
        <b>Title:</b> {{ $post->title }}
    </h1>
    <p>
        <b>Category: </b> {{ $post->category }}
    </p>

    <p class="mb-8 mt-2">
        {{ $post->content }}
    </p>

    <a class="py-2.5 px-5 me-2 mb-2 text-sm 
    font-medium text-gray-900 
    focus:outline-none bg-white rounded-lg 
    border border-gray-200 hover:bg-gray-100 
    hover:text-blue-700 focus:z-10 focus:ring-4 
    focus:ring-gray-100 dark:focus:ring-gray-700 
    dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 
    dark:hover:text-white dark:hover:bg-gray-700"
        href="{{route('posts.edit', $post)}}">
        Edit this post...
    </a>
    <form action="{{route('posts.destroy', $post)}}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit"
            class="mt-4 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
            Delete this post...
        </button>
    </form>
</x-app-layout>
