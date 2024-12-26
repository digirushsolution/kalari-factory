@extends('include.admin.adminapp')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Products</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('admindashboard') }}"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product Categories</li>
                    </ol>
                </nav>
            </div>
        </div>
        <h6 class="mb-0 text-uppercase">Product Categories List</h6>
        <hr />
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif
        @if(Session::has('errors'))
        <div class="alert alert-danger">
            {{ Session::get('errors') }}
        </div>
        @endif
        <div class="card">
            <div class="card-header py-3">
                <h6 class="mb-0">{{ isset($editCategory) ? 'Edit Product Category' : 'Add Product Category' }}</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Add/Edit Product Category Form -->
                    <div class="col-12 col-lg-4 d-flex">
                        <div class="card border shadow-none w-100">
                            <div class="card-body">
                                @if (isset($editCategory))
                                <!-- Edit Form -->
                                <form action="{{ route('product-categories.update', $editCategory->id) }}" method="POST" class="row g-3">
                                    @csrf
                                    @method('PUT')
                                    <div class="col-12">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $editCategory->name }}" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Description</label>
                                        <input type="text" class="form-control" name="description" value="{{ $editCategory->description }}">
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary">Update Category</button>
                                            <a href="{{ route('product-categories.index') }}" class="btn btn-secondary">Cancel Edit</a>
                                        </div>
                                    </div>
                                </form>
                                @else
                                <!-- Create Form -->
                                <form action="{{ route('product-categories.store') }}" method="POST" class="row g-3">
                                    @csrf
                                    <div class="col-12">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Category name" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Description</label>
                                        <input type="text" class="form-control" name="description" placeholder="Description">
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn btn-primary">Add Category</button>
                                        </div>
                                    </div>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Categories List -->
                    <div class="col-12 col-lg-8 d-flex">
                        <div class="card border shadow-none w-100">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-middle">
                                        <thead class="table-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($productCategories as $category)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ $category->description }}</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3 fs-6">
                                                        <a href="{{ route('product-categories.edit', $category->id) }}" 
                                                           class="btn btn-primary" 
                                                           data-bs-toggle="tooltip" 
                                                           data-bs-placement="bottom" 
                                                           data-bs-original-title="Edit info" 
                                                           aria-label="Edit">Edit</a>
                                                        <form action="{{ route('product-categories.destroy', $category->id) }}" 
                                                              method="POST" 
                                                              class="delete-form" 
                                                              style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" 
                                                                    class="btn btn-danger" 
                                                                    data-bs-toggle="tooltip" 
                                                                    data-bs-placement="bottom" 
                                                                    title="Delete">Delete</button>
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
            </div>
        </div>
    </div>
</div>
@endsection

@section('heads')
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.delete-form').forEach(function(form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault(); // Prevent the form from submitting immediately
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
                        form.submit(); // Submit the form if confirmed
                    }
                });
            });
        });
    });
</script>
@endsection
