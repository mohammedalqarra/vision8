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
    <style>
        .table th,
        .table td {
            vertical-align: middle;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>All Posts</h1>
            <a class="btn btn-primary px-5" href="{{ route('Posts.create') }}">Create New Post</a>
        </div>
        {{-- @if (session('msg'))
            <div class="alert alert-success">
                {{ session('msg') }}
            </div>
        @endif --}}


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
                    <th><img width="80px" src="{{ asset('uploads/Posts/' . $post->image) }}" alt=""></th>
                    {{-- <th><img width="80px" src="{{ $post->image }}" alt=""></th> --}}
                    <th>{{ $post->created_at->format('M d , Y') }}</th>
                    <th>{{ $post->updated_at->diffForHumans() }}</th>
                    <th>
                        <a href="{{ route('Posts.show', $post->id) }}" class="btn btn-sm btn-success"><i
                                class="fas fa-eye"></i></a>
                        <a href="{{ route('Posts.edit' , $post->id) }}" class="btn btn-sm btn-primary"><i
                                class="fas fa-edit"></i></a>
                        {{-- <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a> --}}
                        <button class="btn btn-sm btn-danger btn-delete"> <i class="fas fa-trash"></i> </button>
                        <form class="d-inline" action="{{ route('Posts.destroy', $post->id) }}" method="post">
                            @csrf
                            @method('delete')
                            {{-- <button onclick="return confirm('Are you sure you want to delete this post?')"
                                class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button> --}}
                        </form>
                    </th>
                </tr>
            @endforeach
        </table>
        {{-- {{ $posts->links() }} --}}
        {{-- {{ $posts->appends(['q' => request()->q])->links() }} --}}
        {{ $posts->appends($_GET)->links() }}

    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    @if (session('msg'))
        <script>
            Swal.fire(
                'Good job!',
                '{{ session('msg') }}',
                'success'
            )
        </script>
    @endif
    <script>
        $('.btn-delete').on('click', function() {
            let form = $(this).next('form');
            Swal.fire({
                title: 'Are you sure you want to delete this post?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Swal.fire(
                    //     'Deleted!',
                    //     'Your file has been deleted.',
                    //     'success'
                    // )
                    form.submit();
                }
            })
        })
    </script>
</body>

</html>
