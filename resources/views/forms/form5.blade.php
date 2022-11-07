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
        <form method="post" action="{{ route('form5_data') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="name" placeholder="name"
                    class="form-control @error('name')
                    is-invalid
                @enderror"
                    name="name" value="{{ old('name') }}">
                @error('name')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">File</label>
                <input type="file" placeholder="file"
                    class="form-control @error('cv')
                    is-invalid
                @enderror"
                    name="cv" value="{{ old('cv') }}">
                @error('cv')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-25">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
