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
        <h1>Welcome {{ $std->name }}</h1>
        {{-- @dump($std->course->find(2)) --}}
        <form action="{{ route('many_to_many_data') }}" method="POST">

            @csrf
            <table class="table table-hover table-bordered table-striped mt-5 ">
                <tr>
                    <th></th>
                    <th>Course name</th>
                    <th>Course Hours</th>
                </tr>
                @foreach ($courses as $course)
                    <tr>
                        <td>
                            <input {{ $std->course->find($course->id) ? 'checked' : '' }} type="checkbox"
                                name="course_id[]" value="{{ $course->id }}">
                        </td>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->hours }}</td>
                    </tr>
                @endforeach
            </table>
            <button class="btn btn-primary px-3">Register</button>
        </form>
    </div>
</body>

</html>
