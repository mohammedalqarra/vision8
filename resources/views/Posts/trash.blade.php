<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <title>@yield('Posts ')</title>
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
                <th>Action</th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <th>{{ $post->id }}</th>
                    <th>{{ $post->title }}</th>
                    <th>{{ Str::words($post->content, 5, '...') }}</th>
                    <th><img width="80px" src="{{ $post->image }}" alt=""></th>
                    <th>
                        <a href="{{ route('Posts.restore', $post->id) }}" class="btn btn-sm btn-success"><i
                                class="fas fa-undo"></i></a>
                        <a onclick="return confirm('Are you sure you want to forcedelete this post?')"
                            href="{{ route('Posts.forcedelete', $post->id) }}" class="btn btn-sm btn-danger"><i
                                class="fas fa-times"></i></a>
                    </th>
                </tr>
            @endforeach
        </table>
        <a href="{{ route('Posts.restore_all') }}" class="btn btn-sm btn-success"><i class="fas fa-undo"></i>Restore
            All</a>
        <a onclick="return confirm('Are you sure')"href="{{ route('Posts.delete_all') }}"
            class="btn btn-sm btn-danger"><i class="fas fa-times"></i>Delete
            All</a>
    </div>

</body>

</html>
