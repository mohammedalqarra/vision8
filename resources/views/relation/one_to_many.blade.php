<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('relation')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <style>
        .navigation {
            position: fixed;
            top: 40%;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            translation: all 0.3 ease;
        }

        .navigation:hover {
            transform: scale(1.2);
        }

        .navigation img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
        }

        .navigation.next {
            left: 40px;
        }

        .navigation.prev {
            right: 40px;
        }

        .navigation .arrow {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(42, 41, 41, 0);
            border-radius: 50%;
            font-size: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }
    </style>
</head>

<body>

    @if ($prev)
        <a href="{{ route('mypost', $prev->id) }}" class="navigation next">
            <img src="{{ asset('uploads/Posts/' . $prev->image) }}" alt="">
            <div class="arrow"><i class="fa-solid fa-angle-left"></i></div>
        </a>
    @endif
    @if ($next)
        <a href="{{ route('mypost', $next->id) }}" class="navigation prev">
            <img src="{{ asset('uploads/posts/' . $next->image) }}" alt="">
            <div class="arrow"><i class="fa-solid fa-chevron-right"></i></div>
        </a>
    @endif
    <div class="container  text-center my-5 ">
        <h1 class="mb-3">{{ $post->title }}</h1>
        <img class="w-50" src="{{ asset('uploads/Posts/' . $post->image) }}" alt="">
        <div class="my-3">
            {!! $post->content !!}
        </div>
        <h4 class="mb-4">All Comments ({{ $post->comments->count() }})</h4>
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($post->comments as $comment)
                    <div class="text-start">
                        <div class="d-flex justify-content-between align-items-center ">
                            <h4>{{ $comment->user->name }}</h4>
                            <small>{{ $comment->created_at->diffForHumans() }}</small>
                        </div>
                        <p>{{ $comment->comment }}</p>
                    </div>
                    @if (!$loop->last)
                        <hr>
                    @endif
                @endforeach
                <h2>Add New Comment</h2>
                <form action="{{ route('one_to_many_data') }}" method="POST" enctype="multipart/form">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <textarea name="comment" id="" rows="5" class="form-control" placeholder="Type your comment here..."></textarea>
                    <button class="btn btn-success mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
