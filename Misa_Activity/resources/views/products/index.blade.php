<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Products</title>

    <style>

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

        header h1 {
            margin: 0;
        }

        nav {
            margin-top: 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }

        main {
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .button {
            background: #1f2937;
            color: white;
            padding: 10px 15px;
            border-radius: 6px;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }

        .button:hover {
            background: #374151;
        }

        .card {
            background: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .product-card {
            background: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .product-card h3 {
            margin-top: 0;
        }

        .price {
            font-size: 20px;
            font-weight: bold;
            color: green;
        }

        .success {
            background: #d1fae5;
            color: #065f46;
            padding: 12px;
            border-radius: 6px;
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

    <h1>My Website</h1>

    <nav>

        <a href="{{ url('/') }}">Home</a>

        <a href="{{ url('/contact') }}">Contact</a>

        <a href="{{ route('products.index') }}">Products</a>

    </nav>

</header>

<main>

    <div class="page-header">

        <h2>Products Dashboard</h2>

        <a href="{{ route('products.create') }}" class="button">
            + Add Product
        </a>

    </div>

    @if(session('success'))

        <div class="success">
            {{ session('success') }}
        </div>

    @endif

    @if($products->count() > 0)

        <div class="product-grid">

            @foreach($products as $product)

                <div class="product-card">

                    <h3>
                        {{ $product->name }}
                    </h3>

                    <p>
                        {{ $product->description ?? 'No description available.' }}
                    </p>

                    <p class="price">
                        ₱{{ number_format($product->price, 2) }}
                    </p>

                    <a
                        href="{{ route('products.show', $product) }}"
                        class="button"
                    >
                        View
                    </a>

                    <a
                        href="{{ route('products.edit', $product) }}"
                        class="button"
                    >
                        Edit
                    </a>

                </div>

            @endforeach

        </div>

    @else

        <div class="card">

            <h3>No Products Yet</h3>

            <p>
                No products available.
            </p>

            <a
                href="{{ route('products.create') }}"
                class="button"
            >
                Add Product
            </a>

        </div>

    @endif

</main>

<footer>

    <p>© 2026 My Website</p>

</footer>

</body>

</html>