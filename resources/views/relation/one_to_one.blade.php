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
    <div class="container mt-5">
        <h1>User Information</h1>
        <table class="table table-hover table-bordered table-striped mt-5 ">
            <tr class="table-dark">
                <th>Id</th>
                <th>name</th>
                <th>email</th>
                <th>Insurances Serial</th>
                <th>Insurances Expire</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->insurances->serial }}</td>
                    <td>{{ $user->insurances->expire }}</td>
                    {{-- or --}}
                    {{-- <td>{{ $user->insurances ? $user->insurances->serial : '' }}</td>
                    <td>{{ $user->insurances ? $user->insurances->expire : '' }}</td> --}}
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
