<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'My Website')</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #333;
        }

        header {
            background: #1f2937;
            color: white;
            padding: 20px;
        }

        .header-container {
            max-width: 1100px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            margin: 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .page-header h2 {
            margin: 0;
        }

        .button {
            display: inline-block;
            background: #1f2937;
            color: white;
            padding: 10px 16px;
            border-radius: 6px;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }

        .button:hover {
            background: #374151;
        }

        .button-danger {
            background: #dc2626;
        }

        .button-danger:hover {
            background: #b91c1c;
        }

        .button-secondary {
            background: #6b7280;
        }

        .card {
            background: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }

        .product-card {
            background: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .product-card h3 {
            margin-top: 0;
            color: #1f2937;
        }

        .price {
            font-size: 22px;
            font-weight: bold;
            color: #16a34a;
        }

        .actions {
            margin-top: 20px;
        }

        .actions a,
        .actions button {
            margin-right: 8px;
        }

        .success {
            background: #dcfce7;
            color: #166534;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .error {
            background: #fee2e2;
            color: #991b1b;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        textarea {
            min-height: 100px;
        }

        label {
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 20px;
        }

        footer {
            text-align: center;
            padding: 30px;
            color: #777;
        }

    </style>

</head>

<body>

    <header>

        <div class="header-container">

            <h1>My Website</h1>

            <nav>
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/contact') }}">Contact</a>
                <a href="{{ route('products.index') }}">Products</a>
            </nav>

        </div>

    </header>

    <main>

        @yield('content')

    </main>

    <footer>
        <p>© 2026 My Website</p>
    </footer>

</body>

</html>