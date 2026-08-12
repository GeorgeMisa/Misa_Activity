@extends('layouts.app')

@section('title', 'Add Product')

@section('content')

    <div class="page-header">

        <h2>Add Product</h2>

        <a
            href="{{ route('products.index') }}"
            class="button button-secondary"
        >
            Back
        </a>

    </div>

    @if($errors->any())

        <div class="error">

            <strong>Please fix the following:</strong>

            <ul>

                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    <div class="card">

        <form
            action="{{ route('products.store') }}"
            method="POST"
        >

            @csrf

            <div class="form-group">

                <label for="name">
                    Product Name
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    required
                >

            </div>

            <div class="form-group">

                <label for="description">
                    Description
                </label>

                <textarea
                    id="description"
                    name="description"
                >{{ old('description') }}</textarea>

            </div>

            <div class="form-group">

                <label for="price">
                    Price
                </label>

                <input
                    type="number"
                    id="price"
                    name="price"
                    step="0.01"
                    min="0"
                    value="{{ old('price') }}"
                    required
                >

            </div>

            <button
                type="submit"
                class="button"
            >
                Save Product
            </button>

        </form>

    </div>

@endsection