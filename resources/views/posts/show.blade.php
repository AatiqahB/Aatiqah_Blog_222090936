@extends('layout')

@section('content')
    <div class="max-w-3xl mx-auto p-4 bg-gray-100 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
        <p class="text-lg leading-relaxed mb-6 whitespace-pre-wrap">{{ $post->body }}</p>
        <div class="flex items-center mb-4">
            <a href="{{ route('posts.edit', $post->id) }}" class="mr-4 inline-block px-4 py-2  text-white rounded-md transition-colors hover:bg-purple-800" style="background-color:rgb(55,45,68)">Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="inline-block px-4 py-2  text-white rounded-md transition-colors hover:bg-purple-800" style="background-color:rgb(55,45,68)">Delete</button>
            </form>
        </div>
        <a href="{{ route('chirps.index') }}" class="inline-block  text-white px-4 py-2 rounded-md transition-colors hover:bg-purple-800" style="background-color:rgb(55,45,68)">{{ __('Comment') }}</a>
    </div>
@endsection
