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
        <form action="{{ route('Posts.index') }}" method="get">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search here..." name="q"
                    value="{{ request()->q }}">
                <button class="btn btn-dark px-5" id="button-addon2">Search</button>
            </div>
        </form>
        <table class="table table-hover table-bordered table-striped">
            <tr class="table-dark">
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Image</th>
                <th>Create At</th>
                <th>Update At</th>
                <th>Action</th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <th>{{ $post->id }}</th>
                    <th>{{ $post->title }}</th>
                    <th>{{ Str::words($post->content, 5, '...') }}</th>
                    {{-- <th>{{ $post->content }}</th> --}}
                    <th><img width="80px" src="{{ $post->image }}" alt=""></th>
                    <th>{{ $post->created_at->format('M d , Y') }}</th>
                    <th>{{ $post->updated_at->diffForHumans() }}</th>
                    <th>
                        <a href="" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </th>
                </tr>
            @endforeach
        </table>
        {{-- {{ $posts->appends(['q' => request()->q])->links() }} --}}
                {{ $posts->appends($_GET)->links() }}

    </div>
</body>

</html>
