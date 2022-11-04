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
        <h1>information Form</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li><br>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{ route('form2_data') }}">
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
            {{-- {{ csrf_field() }} --}}
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="name" placeholder="name"
                    class="form-control @error('name')
                    is-invalid
                @enderror"
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
                @enderror "
                    name="Email">
                @error('Email')
                    <small class="text-danger invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="password" placeholder="password"
                    class="form-control @error('Password')
                    is-invalid
                @enderror "
                    name=" Password" autocomplete="new-password">
                @error('Password')
                    <small class="text-danger invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Age</label>
                <input type="number" placeholder="Age"
                    class="form-control @error('Age')
                    is-invalid
                @enderror"
                    name="Age">
                @error('Age')
                    <small class="text-danger invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success w-100">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
