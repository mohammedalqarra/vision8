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
        <h1>Register Form</h1>
        @include('forms.errors')
        <form method="post" action="{{ route('form4_data') }}">
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
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="Email" placeholder="Email"
                    class="form-control @error('email')
                    is-invalid
                @enderror"
                    name="email" value="{{ old('email') }}">
                @error('email')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="password" placeholder="Password"
                    class="form-control @error('password')
                    is-invalid
                @enderror"
                    outocomplete="new-password" name="password">
                @error('password')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Confirmation Password</label>
                <input type="password" placeholder="Password"
                    class="form-control @error('password')
                    is-invalid
                @enderror"
                    outocomplete="new-password" name="password_confirmation">
                @error('password')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Bio</label>
                <textarea name="bio" placeholder="Bio"
                    class="form-control @error('bio')
                    is-invalid
                @enderror" cols="30"
                    rows="10">{{ old('bio') }}</textarea>
                @error('bio')
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
