@extends('adminlte::page')
@section('title', 'Hair Styles')
@section('content_header')
<h1 class="text-center font-bold">Hair Styles</h1>
@endsection

@section('content')
<form action="{{ route('admin.hairstyles.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" required>
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" required>
        @error('email')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" required>
        @error('password')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="contact_number">Contact Number</label>
        <input type="text" name="contact_number" id="contact_number" class="form-control" required>
        @error('contact_number')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="experience">Experience</label>
        <input type="number" name="experience" id="experience" class="form-control" required>
        @error('experience')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="photo">Photo</label>
        <input type="file" name="photo" id="photo" class="form-control" required>
        @error('photo')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
        @error('description')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div id="availability-container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Day</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Actions</th>
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
                        <button type="button" class="btn btn-secondary add-time-slot" data-day="{{ $day }}">Add Time Slot</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <select name="status" id="status" class="form-control" required>
            <option value="0">Active</option>
            <option value="1">Inactive</option>
        </select>
        @error('status')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>


    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        // Add new time slot to a specific day
        $(document).on('click', '.add-time-slot', function() {
            const day = $(this).data('day');
            const timeSlotIndex = $(`input[name^="availability_days[${day}]"]`).length / 2; // Calculate next index
            $(this).closest('tr').after(`
                <tr>
                    <td></td>
                    <td>
                        <input type="time" name="availability_days[${day}][${timeSlotIndex}][start_time]" class="form-control" required>
                    </td>
                    <td>
                        <input type="time" name="availability_days[${day}][${timeSlotIndex}][end_time]" class="form-control" required>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger remove-time-slot">Remove</button>
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