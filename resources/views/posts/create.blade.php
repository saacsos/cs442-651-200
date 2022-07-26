@extends('layouts.main')

@section('content')
    <h1 class="text-3xl">
        Add new post
    </h1>

    <form action="{{ route('posts.store') }}" method="post">
        @csrf

        <div>
            <label for="title">Post Title</label>
            <input class="border-2" type="text" name="title">
        </div>

        <div>
            <label class="block" for="description">Post Description</label>
            <textarea class="border-2" name="description" cols="30" rows="10"></textarea>
        </div>

        <div>
            <button class="p-4 border-2 bg-green-500" type="submit">Create</button>
        </div>

    </form>

@endsection
