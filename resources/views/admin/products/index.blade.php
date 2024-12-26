@extends('include.admin.adminapp')

<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
<style>
    .dataTables_wrapper .dataTables_length select {
        border: 1px solid #aaa;
        border-radius: 3px;
        padding: 5px;
        background-color: transparent;
        color: inherit;
        padding: 5px 19px !important;
    }

    .product-image {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 5px;
    }
</style>

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-wrapper">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admindashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product List</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('products.create') }}"><button type="button" class="btn btn-primary">Add Product</button></a>
                </div>
            </div>
        </div>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="product_table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr No.</th>
                                <th>Product Image</th> <!-- Added column for image -->
                                <th>Product Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Created Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                
                                <!-- Display product image -->
                                <td>
                                    @if ($product->image)
                                        <img src="{{ asset('public/storage/' . $product->image) }}" alt="Product Image" class="product-image">
                                    @else
                                        <p>No Image</p>
                                    @endif
                                </td>

                                <td>
                                    <div class="d-flex align-items-center gap-3 cursor-pointer">
                                        <div class="">
                                            <p class="mb-0">{{ $product->name }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    @if ($product->category)
                                        {{ $product->category->name }}
                                    @else
                                        --
                                    @endif
                                </td>
                                <td>${{ $product->price }}</td>
                                <td>{{ $product->status }}</td>
                                <td>{{ $product->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-2 fs-6">
                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary mb-3"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">Edit</a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                            class="delete-form" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger delete-btn"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const form = this.closest('form');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>
@endsection
@endsection
