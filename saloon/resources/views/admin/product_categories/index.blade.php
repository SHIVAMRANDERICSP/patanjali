@extends('adminlte::page')

@section('title', 'Product Categories')

@section('content_header')
<div class="d-flex justify-content-between align-items-center">
    <h1 class="mb-0">Product Categories</h1>
    <a href="{{ route('admin.product_categories.create') }}" class="btn btn-primary">Add New Category</a>
</div>
@endsection

@section('css')
<!-- DataTables Bootstrap 5 CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')
<div class="container-fluid">
    <!-- Display Success Alert -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <!-- Display Error Alert -->
    @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <!-- Card Container -->
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title mb-0">Categories List</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="categoriesTable" class="table table-bordered card-body">
                    <thead class="">
                        <tr>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Sort Order</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($productCategories as $category)
                        <tr>
                            <td>{{ $category->title }}</td>
                            <td>
                                @if($category->image)
                                <img src="{{ asset('storage/' . $category->image) }}" alt="Category Image" class="img-thumbnail rounded-circle" style="width:50px; height:50px;">
                                @else
                                <span class="badge bg-secondary">No Photo</span>
                                @endif
                            </td>
                            <td>{{ $category->sort_order }}</td>
                            <td>
                                @if($category->status == 0)
                                <span class="badge bg-success">Active</span>
                                @else
                                <span class="badge bg-danger">Inactive</span>
                                @endif
                            </td>
                            <td>{{ $category->created_at->format('Y-m-d H:i') }}</td>
                            <td>
                                <a href="{{ route('admin.product_categories.edit', $category->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.product_categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">No categories found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div><!-- /.table-responsive -->
        </div><!-- /.card-body -->
    </div><!-- /.card -->
</div><!-- /.container-fluid -->
@endsection

@section('js')
<!-- Include jQuery, DataTables and Bootstrap 5 integration JS -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#categoriesTable').DataTable({
            paging: true,
            lengthChange: true,
            searching: true,
            ordering: true,
            info: true,
            autoWidth: false,
            responsive: true
        });
    });
</script>
@endsection