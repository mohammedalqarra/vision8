<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>@yield('contact_us')</title>
</head>

<body>

    <div class="container mt-5">
        <h1>Basic Form</h1>
        @include('forms.errors')
        <form method="post" action="{{ route('contact_us') }}" enctype="multipart/form-data">

            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">First Name</label>
                        <input type="name" placeholder="first name" class="form-control" value="{{ old('fname') }}"
                            name="fname">
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Last Name</label>
                        <input type="name" placeholder="last name" value="{{ old('lname') }}" class="form-control"
                            name="lname">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" placeholder="Email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone</label>
                <input type="number" placeholder="Phone" class="form-control" name="phone">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Textarea</label>
                <textarea name="message" placeholder="Message" class="form-control" rows="10">{{ old('message') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">CV</label>
                <input type="file" class="form-control" name="cv">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-25">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
