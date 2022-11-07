<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('Contact_data')</title>
</head>

<body>
    <div class="container mt-5">
        <div class="alert alert-warning">
            <h2>Welcome to our website</h2>
            <p><b>Name</b>:{{ $name }}</p>
            <p><b>Email</b>:{{ $email }}</p>
            <p><b>Phone</b>:{{ $number }}</p>
            <p><b>Textarea <b>:{{ $textarea }}</b></b></p>
        </div>
    </div>
</body>

</html>
