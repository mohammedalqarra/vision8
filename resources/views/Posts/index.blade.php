<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>@yield('Form1')</title>
</head>

<body>

    <div class="container mt-5">
        <h1>All Posts</h1>
        <table class="table table-hover table-bordered table-striped">
            <tr class="table-dark">
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Image</th>
                <th>Create At</th>
                <th>Update At</th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <th>{{ $post->id }}</th>
                    <th>{{ $post->title }}</th>
                    <th>{{ Str::words($post->content, 10, '...') }}</th>
                    {{-- <th>{{ $post->content }}</th> --}}
                    <th><img width="80px" src="{{ $post->image }}" alt=""></th>
                    <th>{{ $post->created_at }}</th>
                    <th>{{ $post->updated_at }}</th>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
