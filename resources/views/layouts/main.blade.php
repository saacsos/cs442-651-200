{{-- resources/views/layouts/main.blade.php --}}
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CS442 200 Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div>
        <a href="{{ route('posts.index') }}">All Posts</a> |
        <a href="{{ route('posts.create') }}">Add New Post</a>
    </div>

    <div>
        @yield('content')
    </div>
    <div>
        Footer
    </div>
</body>
</html>
