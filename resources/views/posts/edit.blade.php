@extends('layouts.main')

@section('content')
    <h1 class="text-3xl">
        Edit post
    </h1>

    <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="post">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Post Title</label>
            <input class="border-2 w-1/2" type="text" name="title" value="{{ $post->title }}">
        </div>

        <div>
            <label class="block" for="description">Post Description</label>
            <textarea class="border-2" name="description" cols="30" rows="10">{{ $post->description }}</textarea>
        </div>

        <div>
            <button class="app-button" type="submit">Edit</button>
        </div>

    </form>

    <hr>

    <div>
        <h3>Danger Zone</h3>

        <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <div>
                <label for="title">Post title to delete</label>
                <input class="border-2 w-1/2" type="text" name="title">
            </div>

            <button class="px-4 border-2 bg-red-600" type="submit">DELETE</button>

        </form>
    </div>

@endsection
