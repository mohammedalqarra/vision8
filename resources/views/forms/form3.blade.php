<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('Form2')</title>
</head>

<body>
    <div class="container mt-5">
        <h1>Basic Form</h1>
        {{-- @dump($errors)
        @dump($errors->any())
        @dump($errors->all())
        @if ($errors->any())
            <p>There is an errors in form</p>
        @endif --}}
        @include('forms.errors')

        <form method="post" action="{{ route('form3_data') }}">
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
            {{ csrf_field() }}
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="name" placeholder="name" class="form-control  @error('name') is-invalid  @enderror"
                    name="name">
                @error('name')
                    <small class="text-danger invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" placeholder="email"
                    class="form-control @error('Email')
                    is-invalid
                @enderror"
                    name="Email">
                @error('Email')
                    <small class="text-danger invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success w-25">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
