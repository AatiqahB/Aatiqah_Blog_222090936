@extends('layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/index-style.css') }}">
    
    <div class="py-12 create-container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-stretch -mx-6"> 
                <div class="w-full lg:w-1/2 px-6"> 
                    <div class="back overflow-hidden shadow-sm sm:rounded-lg h-full"> 
                        <div class="p-6 text-gray-900">
                            {!! __('
                                <h1 style="font-size: 2em; font-weight: bold; color:rgb(72, 50, 72); ">Get Creative:</h1>
                                <p>Begin writing and editing blogs to share with a vibrant community of users. Share your ideas, tell your stories,
                                     express your passions, and connect with like-minded individuals. Join us today and find your community!</p>
                            ') !!}
                            <div>
                                <a href="{{ route('posts.create') }}" class="create-post-link">Create New Post</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="posts-container">
    
        @foreach ($posts as $post)
            <div class="post-item">
                <h2><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h2>
                <p>{!! nl2br(e(Str::limit($post->body, 200))) !!}</p>
                <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
