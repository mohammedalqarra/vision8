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
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Update Posts</h1>
            <a class="btn btn-primary px-5" href="{{ route('Posts.index') }}">All Post</a>
        </div>

        @include('forms.errors')

        <form action="{{ route('Posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            @include('Posts.form')
            <button class="btn btn-success px-5">Update</button>
        </form>
    </div>

    <!-- wysiwyg text-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.3.1/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
</body>

</html>
