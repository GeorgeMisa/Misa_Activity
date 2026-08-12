<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
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