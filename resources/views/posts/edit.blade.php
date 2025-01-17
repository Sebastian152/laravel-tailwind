<x-app-layout>
    <h1>Form to edit a post</h1>

    @if ($errors->any())
        <div>
            <h2>Errors:</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('posts.update', $post)}}" method="POST" class="bg-gray-500 p-4">
        @csrf
        @method('PUT')
        
        <label for="" class="block">
            Title:
            <input class="border-2 mb-2 border-gray-800" 
            type="text" name="title" value="{{old('title', $post->title)}}">
        </label>
        <label for="" class="block">
            Slug:
            <input class="border-2 mb-2 border-gray-800" 
            type="text" name="slug" value="{{old('slug', $post->slug)}}">
        </label>
        <label for="" class="block">
            Category:
            <input class="border-2 mb-2 border-gray-800" 
            type="text" name="category" value="{{old('category', $post->category)}}">
        </label>
        <label for="content" class="block">
            Content:
            <textarea name="content" id="content">
                {{old('content', $post->content)}}
            </textarea>
        </label>
        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="submit">
            Update post
        </button>
    </form>
</x-app-layout>