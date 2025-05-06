@extends('adminlte::page')

@section('title', 'Services')

@section('content_header')
<div class="d-flex justify-content-between align-items-center">
    <h1 class="mb-0">Services</h1>
    <a href="{{ route('admin.services.create') }}" class="btn btn-primary">Add New Service</a>
</div>
@endsection

@section('css')
<!-- DataTables Bootstrap 5 integration CSS for a modern look -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')
<div class="container-fluid">
    <!-- Alert Messages -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <!-- Card Container -->
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title mb-0">Services List</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="servicesTable" class="table table-bordered card-body">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Sort Order</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($services as $service)
                        <tr>
                            <td>{{ $service->title }}</td>
                            <td>{{ $service->price }}</td>
                            <td>
                                @if($service->image && file_exists(public_path('storage/' . $service->image)))
                                <img src="{{ asset('storage/' . $service->image) }}" alt="Service Image" class="img-thumbnail" style="width:50px; height:50px;">
                                @else
                                <img src="{{ asset('images/default-service.png') }}" alt="Default Image" class="img-thumbnail" style="width:50px; height:50px;">
                                @endif
                            </td>
                            <td>{{ $service->sort_order }}</td>
                            <td>
                                @if($service->status == 0)
                                <span class="badge bg-success">Active</span>
                                @else
                                <span class="badge bg-danger">Inactive</span>
                                @endif
                            </td>
                            <td>{{ $service->created_at->format('Y-m-d H:i') }}</td>
                            <td>
                                <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this service?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">No services found.</td>
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
<!-- Include jQuery, DataTables and Bootstrap integration JS -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#servicesTable').DataTable({
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