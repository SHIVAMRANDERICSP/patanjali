@extends('adminlte::page')

@section('title', 'Add Hairstylist')

@section('content_header')
<section class="content-header admin-page-title-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="mt-0">Add Hairstylist</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/admin') }}" title="Home">Home</a>
                    </li>
                    <li class="breadcrumb-item active" title="Add Hairstylist">Add Hairstylist</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection

@section('content')
<div class="container-fluid">
    <div class="card shadow-sm border">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Add Hair Style</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.hairstylist.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Name -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="name" title="Name">Name :</label>
                    <div class="col-md-6">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter name" required>
                        @error('name')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Email -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="email" title="Email">Email :</label>
                    <div class="col-md-6">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter email" required>
                        @error('email')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Password -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="password" title="Password">Password :</label>
                    <div class="col-md-6">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" required>
                        @error('password')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Contact Number -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="contact_number" title="Contact Number">Contact Number :</label>
                    <div class="col-md-6">
                        <input type="text" name="contact_number" id="contact_number" class="form-control" placeholder="Enter contact number" required>
                        @error('contact_number')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Experience -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="experience" title="Experience">Experience (years) :</label>
                    <div class="col-md-6">
                        <input type="number" name="experience" id="experience" class="form-control" placeholder="Enter experience" required>
                        @error('experience')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Photo Upload -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="photo" title="Photo">Photo :</label>
                    <div class="col-md-6">
                        <input type="file" name="photo" id="photo" class="form-control-file">
                        @error('photo')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Description -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="description" title="Description">Description :</label>
                    <div class="col-md-6">
                        <textarea name="description" id="description" class="form-control" rows="4" placeholder="Enter description" required></textarea>
                        @error('description')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Availability Time Slots -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="availability" title="Availability">Availability :</label>
                    <div class="col-md-6">
                        <table class="table table-bordered" id="availability-table">
                            <thead class="table-light">
                                <tr>
                                    <th>Day</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'] as $day)
                                <tr class="availability-group">
                                    <td>
                                        <input type="hidden" name="availability_days[{{ $day }}][day]" value="{{ $day }}">
                                        <strong>{{ ucfirst($day) }}</strong>
                                    </td>
                                    <td>
                                        <input type="time" name="availability_days[{{ $day }}][0][start_time]" class="form-control" required>
                                    </td>
                                    <td>
                                        <input type="time" name="availability_days[{{ $day }}][0][end_time]" class="form-control" required>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-secondary btn-sm add-time-slot" data-day="{{ $day }}">Add Time Slot</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @error('availability')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Status -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="status" title="Status">Status :</label>
                    <div class="col-md-6">
                        <select name="status" id="status" class="form-control" required>
                            <option value="0">Active</option>
                            <option value="1">Inactive</option>
                        </select>
                        @error('status')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="row mb-4">
                    <div class="col-md-9 offset-md-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('admin.hairstyles.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        // Dynamic addition of availability time slots
        $(document).on('click', '.add-time-slot', function() {
            const day = $(this).data('day');
            // Calculate next index for the given day by counting current start_time inputs
            const currentCount = $(`input[name^="availability_days[${day}]"][name*="start_time"]`).length;
            $(this).closest('tr').after(`
                <tr>
                    <td></td>
                    <td>
                        <input type="time" name="availability_days[${day}][${currentCount}][start_time]" class="form-control" required>
                    </td>
                    <td>
                        <input type="time" name="availability_days[${day}][${currentCount}][end_time]" class="form-control" required>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger btn-sm remove-time-slot">Remove</button>
                    </td>
                </tr>
            `);
        });

        // Remove a time slot row
        $(document).on('click', '.remove-time-slot', function() {
            $(this).closest('tr').remove();
        });
    });
</script>
@endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection