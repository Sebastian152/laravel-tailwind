<x-app-layout title="Create a post">
    <h1>Form to create a new post</h1>

    {{-- @if ($errors->any())
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
    @endif --}}

    <form action="{{route('posts.store')}}" method="POST" class="bg-gray-500 p-4">
        @csrf
        <label for="" class="block">
            Title:
            <input class="border-2 mb-2 border-gray-800" 
            type="text" name="title" value="{{old('title')}}">
        </label>
        @error('title')
            <p class="mt-1 mb-1 text-blue-800 font-bold">{{$message}}</p>
        @enderror
        <label for="" class="block">
            Slug:
            <input class="border-2 mb-2 border-gray-800" 
            type="text" name="slug" value="{{old('slug')}}">
        </label>
        @error('slug')
            <p class="mt-1 mb-1 text-blue-800 font-bold">{{$message}}</p>
        @enderror
        <label for="" class="block">
            Category:
            <input class="border-2 mb-2 border-gray-800" 
            type="text" name="category" value="{{old('category')}}">
        </label>
        @error('category')
            <p class="mt-1 mb-1 text-blue-800 font-bold">{{$message}}</p>
        @enderror
        <label for="content" class="block">
            Content:
            <textarea name="content" id="content">
                {{old('content')}}
            </textarea>
        </label>
        @error('content')
            <p class="mt-1 mb-1 text-blue-800 font-bold">{{$message}}</p>
        @enderror
        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="submit">
            Create post
        </button>
    </form>

</x-app-layout>