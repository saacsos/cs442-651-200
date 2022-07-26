{{-- resources/views/posts/index.blade.php --}}
@extends('layouts.main')

@section('content')
    <h1 class="text-3xl mx-4 mt-6">
        All Posts
    </h1>

    @foreach($posts as $post)
        <div class="border-2 mx-4 my-1 px-8 py-2">
            <p>
                <a class="text-blue-700 hover:text-blue-500 active:underline" href="{{ route('posts.show', ['post' => $post->id]) }}">
                    {{ $post->title }}
                </a>
            </p>
        </div>

    @endforeach


@endsection
