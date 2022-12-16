<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('relation')</title>
</head>

<body>
    <div class="container  text-center my-5 ">
        <h1>{{ $post->title }}</h1>
        <img class="w-50" src="{{ asset('uploads/Posts/' . $post->image) }}" alt="">
        <div class="my-3">
            {!! $post->content !!}
        </div>
        <h4>All Comments</h4>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-start">
                    <div class="d-flex justify-content-between align-items-center ">
                        <h6>User name</h6>
                        <small>1 min ago</small>
                    </div>
                    <p>Lorem Ipsum dolor sit amet, consectetur adipis consectetur adip </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
