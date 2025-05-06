@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
<div class="d-flex justify-content-between align-items-center">
    <h1 class="mb-0">Users</h1>
    {{-- Optional: Add a button for creating new users if needed --}}
    {{-- <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Add New User</a> --}}
</div>
@endsection

@section('css')
<!-- DataTables Bootstrap 5 integration CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')
<div class="container-fluid">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title mb-0">User List</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="usersTable" class="table table-bordered card-body">
                    <thead class="table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Photo</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->contact }}</td>
                            <td>
                                @if($user->photo)
                                <img src="{{ asset('storage/' . $user->photo) }}" alt="User Photo" class="rounded-circle" style="width:50px; height:50px;">
                                @else
                                <span class="badge bg-secondary">N/A</span>
                                @endif
                            </td>
                            <td>{{ $user->created_at->format('Y-m-d H:i') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">No users found.</td>
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
<!-- Include jQuery, DataTables, and Bootstrap 5 integration JS -->
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