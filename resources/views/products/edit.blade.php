@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Product</h1>

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Product Name</label>
                <input type="text" name="nama" id="nama" value="{{ $product->nama }}" required class="form-control">
            </div>
            <div class="form-group">
                <label for="harga">Price</label>
                <input type="number" name="harga" id="harga" step="0.01" value="{{ $product->harga }}" required class="form-control">
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" name="stock" id="stock" value="{{ $product->stock }}" required class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Update Product</button>
        </form>

        <!-- Link untuk kembali ke daftar produk -->
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Product List</a>
    </div>
@endsection