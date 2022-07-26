{{-- resources/views/posts/show.blade.php --}}
@extends('layouts.main')

@section('content')
    <h1 class="text-3xl">
        {{ $post->title }}
    </h1>

    <div>
        {{ $post->like_count }} likes |
        {{ $post->view_count }} views
    </div>

    <p class="p-2">
        {{ $post->description }}
    </p>

    <div>
        <a class="app-button" href="{{ route('posts.edit', ['post' => $post->id]) }}">
            Edit this post
        </a>
    </div>
@endsection
