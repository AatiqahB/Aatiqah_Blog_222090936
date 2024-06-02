@extends('layout')

@section('content')
    <h1 class="text-2xl mt-8 mb-4 text-center" style="color:rgb(55,45,68)">Edit Post</h1>
    <div class="bg-white border border-gray-300 rounded-lg shadow-md p-6 max-w-md mx-auto">
        <form action="{{ route('posts.update', $post->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title" class="block text-purple-700">Title</label>
                <input type="text" id="title" name="title" value="{{ $post->title }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" required>
            </div>
            <div class="form-group">
                <label for="body" class="block " style="color:rgb(55,45,68)">Body</label>
                <textarea id="body" name="body" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500 resize-none" required>{{ $post->body }}</textarea>
            </div>
            <button type="submit" class="w-full px-4 py-2  text-white rounded-md hover:bg-purple-800 focus:outline-none focus:bg-purple-800" style="backgroud-color:rgb(55,45,68)">Update</button>
        </form>
    </div>
@endsection
