@extends('adminlte::page')

@section('title', 'Hair Stylist')

@section('content_header')
<div class="d-flex justify-content-between align-items-center">
    <h1 class="mb-0">Hair Stylist</h1>
    <a href="{{ route('admin.hairstylist.create') }}" class="btn btn-primary">Add New Hair Stylist</a>
</div>
@endsection

@section('css')
<!-- Include DataTables CSS (Bootstrap 5 integration for better styling) -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')
<div class="container-fluid">
    <!-- Display success message -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <!-- Display error message -->
    @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title mb-0">Hair Stylist List</h3>
        </div>
        <div class="card-body">

            <div class="row">
                @forelse($hairstylist as $details)
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                            {{ $details->user->email }}
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b> {{ $details->user->name  }}</b></h2>
                                    <p class="text-muted text-sm"><b>Experience: </b>{{ $details->experience }} </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">

                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + {{ $details->contact_number }}</li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">

                                    <img src="{{ asset('storage/' . $details->photo) }}" alt="user-avatar" class="img-circle img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="{{ route('admin.hairstylist.edit', $details->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.hairstylist.destroy', $details->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this hairstyle?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                @empty

                @endforelse

            </div> <!-- /.table-responsive -->
        </div>
    </div> <!-- /.card -->
</div> <!-- /.container-fluid -->
@endsection

@if(!$hairstylist->isEmpty())
@section('js')
<!-- Include jQuery, DataTables JS and Bootstrap integration -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#usersTable').DataTable({
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
@endif