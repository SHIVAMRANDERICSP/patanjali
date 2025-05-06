@extends('adminlte::page')

@section('title', 'Edit Hair Style')

@section('content_header')
<section class="content-header admin-page-title-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="mt-0">Edit Hair Style</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/admin') }}" title="Home">Home</a>
                    </li>
                    <li class="breadcrumb-item active" title="Edit Hair Style">Edit Hair Style</li>
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
            <h3 class="mb-0">Edit Hair Style</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.hairstylist.update', $hairstylist->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Name -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="name" title="Name">Name :</label>
                    <div class="col-md-6">
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $hairstylist->user->name) }}" placeholder="Enter name" required>
                        @error('name')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Email -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="email" title="Email">Email :</label>
                    <div class="col-md-6">
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $hairstylist->user->email) }}" placeholder="Enter email" required>
                        @error('email')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Password -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="password" title="Password">Password :</label>
                    <div class="col-md-6">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Leave blank if not changing">
                        @error('password')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Contact Number -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="contact_number" title="Contact Number">Contact Number :</label>
                    <div class="col-md-6">
                        <input type="text" name="contact_number" id="contact_number" class="form-control" value="{{ old('contact_number', $hairstylist->contact_number) }}" placeholder="Enter contact number" required>
                        @error('contact_number')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Experience -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="experience" title="Experience">Experience (years) :</label>
                    <div class="col-md-6">
                        <input type="number" name="experience" id="experience" class="form-control" value="{{ old('experience', $hairstylist->experience) }}" placeholder="Enter experience" required>
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
                        @if($hairstylist->photo)
                        <small>Current Photo: <a href="{{ asset('storage/' . $hairstylist->photo) }}" target="_blank">View</a></small>
                        @endif
                        @error('photo')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Description -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="description" title="Description">Description :</label>
                    <div class="col-md-6">
                        <textarea name="description" id="description" class="form-control" rows="4" placeholder="Enter description" required>{{ old('description', $hairstylist->description) }}</textarea>
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
                                @foreach($hairsstylistAvailability as $day)
                                <tr class="availability-group">
                                    <td>
                                        <input type="hidden" name="availability_days[{{ $day['day'] }}][day]" value="{{ $day['day'] }}">
                                        <strong>{{ ucfirst($day['day']) }}</strong>
                                    </td>
                                    <td>
                                        <input type="time" name="availability_days[{{ $day['day'] }}][0][start_time]" value="{{ $day['start_time'] }}" class="form-control" required>
                                    </td>
                                    <td>
                                        <input type="time" name="availability_days[{{ $day['day'] }}][0][end_time]" value="{{ $day['end_time'] }}" class="form-control" required>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-secondary btn-sm add-time-slot" data-day="{{ $day['day'] }}">Add Time Slot</button>
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
                            <option value="0" {{ old('status', $hairstylist->status) == 0 ? 'selected' : '' }}>Active</option>
                            <option value="1" {{ old('status', $hairstylist->status) == 1 ? 'selected' : '' }}>Inactive</option>
                        </select>
                        @error('status')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Submit/Cancel Buttons -->
                <div class="row mb-4">
                    <div class="col-md-9 offset-md-3">
                        <button type="submit" class="btn btn-primary">Update Hair Style</button>
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