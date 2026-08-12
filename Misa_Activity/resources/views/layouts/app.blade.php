<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'My Website')</title>

    <style>
        .card {
            border: 1px solid #333;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
            background-color: #f5f5f5;
        }

        .card h3 {
            margin-top: 0;
        }
    </style>
</head>

<body>

    <h1>My Website</h1>

    <nav>
        <a href="{{ url('/') }}">Home</a> |
        <a href="{{ url('/contact') }}">Contact</a>
    </nav>

    <hr>

    @yield('content')

    <hr>

    <p>© 2026 My Website</p>

</body>

</html>