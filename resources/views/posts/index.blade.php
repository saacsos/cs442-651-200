{{-- resources/views/posts/index.blade.php --}}
@extends('layouts.main')

@section('content')
    <h1 class="text-3xl">
        All Posts
    </h1>

    @foreach($posts as $post)
        <div>
            <p>
                {{ $post->title }}
            </p>
        </div>

    @endforeach


@endsection
