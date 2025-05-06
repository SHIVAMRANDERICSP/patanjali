@extends('adminlte::page')
@section('title', 'Hair Styles')
@section('content_header')
<h1 class="text-center font-bold">Hair Styles</h1>
@endsection

@section('css')
<!-- Include DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="container">
    <!-- Display success message -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- Display error message -->
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <h1>Hair Styles List</h1>
    <div class="mb-3 text-right">
        <a href="{{ route('admin.hairstyles.create') }}" class="btn btn-primary text-end">Add New Hair Style</a>
    </div>
    <table id="usersTable" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Photo</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($hairStylesDetails as $details)
            <tr>
                <td>{{ $details->id }}</td>
                <td>{{ $details->user->name }}</td>
                <td>{{ $details->user->email }}</td>
                <td>{{ $details->contact_number }}</td>
                <td>
                    @if($details->photo)
                    <img src="{{ asset('storage/' . $details->photo) }}" alt="Hair Style Photo" width="50" height="50">
                    @else
                    No Photo
                    @endif
                </td>
                <td>{{ $details->created_at }}</td>
                <td>
                    <a href="{{ route('admin.hairstyles.edit', $details->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.hairstyles.destroy', $details->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this hairstyle?')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">No users found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

@section('js')
<!-- Include jQuery and DataTables JS -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#usersTable').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true
        });
    });
</script>
@endsection