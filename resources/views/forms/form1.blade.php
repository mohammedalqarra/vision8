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
        <h1>Basic Form</h1>
        <form method="post" action="{{ route('form1_data') }}">
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
            {{-- {{ csrf_field() }} --}}
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="name" placeholder="name" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Age</label>
                <input type="number" placeholder="Age" class="form-control" name="Age">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-25">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
