@extends('include.admin.adminapp')

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="container">
            <h1>Edit Product</h1>
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description">{{ $product->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
                </div>

                <div class="mb-3">
                    <label for="product_category_id" class="form-label">Category</label>
                    <select class="form-control" id="product_category_id" name="product_category_id" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == $product->product_category_id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Image Upload -->
                <div class="mb-3">
                    <label for="image" class="form-label">Product Image</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*">

                    <!-- Display existing image if available -->
                    @if($product->image)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" width="150">
                            <p>Current Image</p>
                        </div>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Update Product</button>
            </form>
        </div>
    </div>
</div>
@endsection
