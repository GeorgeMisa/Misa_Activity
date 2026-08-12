@extends('layouts.app')

@section('title', 'Product Details')

@section('content')

    <div class="page-header">

        <h2>Product Details</h2>

        <a
            href="{{ route('products.index') }}"
            class="button button-secondary"
        >
            Back
        </a>

    </div>

    <div class="card">

        <h2>{{ $product->name }}</h2>

        <p>
            <strong>Description:</strong>
        </p>

        <p>
            {{ $product->description ?? 'No description available.' }}
        </p>

        <p class="price">
            ₱{{ number_format($product->price, 2) }}
        </p>

        <a
            href="{{ route('products.edit', $product) }}"
            class="button"
        >
            Edit Product
        </a>

    </div>

@endsection