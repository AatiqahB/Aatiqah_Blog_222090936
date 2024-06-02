@extends('layout')

@section('content')
    <h1 class="text-2xl  mt-8 mb-4 text-center" style="color:rgb(55,45,68)">Create your Blog</h1>
    <div class="bg-white border border-gray-300 rounded-lg shadow-md p-6 max-w-md mx-auto">
        <h2 class="text-xl font-bold mb-4 text-center" style="color:rgb(55,45,68)">Create a New Post</h2>
        <form method="POST" action="{{ route('posts.store') }}" class="space-y-4">
            @csrf
            <div>
                <label for="title" class="block " style="color:rgb(55,45,68)">Title</label>
                <input type="text" id="title" name="title" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500">
            </div>
            <div>
                <label for="body" class="block "  style="color:rgb(55,45,68)">Body</label>
                <textarea id="body" name="body" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500 resize-none"></textarea>
            </div>
            <button type="submit" class="w-full px-4 py-2  text-white rounded-md hover:bg-purple-800 focus:outline-none focus:bg-purple-800" style="background-color:rgb(55,45,68)">Create</button>
        </form>
    </div>
@endsection
