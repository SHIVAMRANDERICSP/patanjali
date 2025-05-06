@extends('adminlte::page')

@section('title', 'Edit Hair Style')

@section('content')
<div class="container mt-4">
    <div class="card shadow border">
        <div class="card-header bg-secondary text-white">
            <h3 class="mb-0">Edit Hair Style</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.hairstyles.update', $hairStyleDetail->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="form-group col-12 form-row mb-3">
                        <label for="name" class="col-3 col-form-label text-right">Name</label>
                        <div class="col-6">
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $hairStyleDetail->user->name) }}" required>
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-12 form-row mb-3">
                        <label for="email" class="col-3 col-form-label text-right">Email</label>
                        <div class="col-6">
                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $hairStyleDetail->user->email) }}" required>
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-12 form-row mb-3">
                        <label for="password" class="col-3 col-form-label text-right">Password</label>
                        <div class="col-6">
                            <input type="password" name="password" id="password" class="form-control">
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-12 form-row mb-3">
                        <label for="contact_number" class="col-3 col-form-label text-right">Contact Number</label>
                        <div class="col-6">
                            <input type="text" name="contact_number" id="contact_number" class="form-control" value="{{ old('contact_number', $hairStyleDetail->contact_number) }}" required>
                            @error('contact_number')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-12 form-row mb-3">
                        <label for="experience" class="col-3 col-form-label text-right">Experience (years)</label>
                        <div class="col-6">
                            <input type="number" name="experience" id="experience" class="form-control" value="{{ old('experience', $hairStyleDetail->experience) }}" required>
                            @error('experience')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-12 form-row mb-3">
                        <label for="photo" class="col-3 col-form-label text-right">Photo</label>
                        <div class="col-6">
                            <input type="file" name="photo" id="photo" class="form-control">
                            @if($hairStyleDetail->photo)
                            <small>Current Photo: <a href="{{ asset('storage/' . $hairStyleDetail->photo) }}" target="_blank">View</a></small>
                            @endif
                            @error('photo')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-12 form-row mb-3">
                        <label for="availability" class="col-3 col-form-label text-right">Availability</label>
                        <div class="col-6">
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
                                    @foreach($hairsstyleAvailability as $day)
                                    <tr>
                                        <td>
                                            <input type="hidden" name="availability_days[{{ $day['day'] }}][day]" value="{{ $day['day'] }}">
                                            {{ ucfirst($day['day']) }}
                                        </td>
                                        <td>
                                            <input type="time" name="availability_days[{{ $day['day'] }}][0][start_time]" value="{{ $day['start_time'] }}" class="form-control" required>
                                        </td>
                                        <td>
                                            <input type="time" name="availability_days[{{ $day['day'] }}][0][end_time]" value="{{ $day['end_time'] }}" class="form-control" required>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-secondary btn-sm add-time-slot" data-day="{{ $day['day'] }}">Add</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @error('availability')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-12 form-row mb-3">
                        <label for="status" class="col-3 col-form-label text-right">Status</label>
                        <div class="col-6">
                            <select name="status" id="status" class="form-control">
                                <option value="0" {{ old('status', $hairStyleDetail->status) == 0 ? 'selected' : '' }}>Active</option>
                                <option value="1" {{ old('status', $hairStyleDetail->status) == 1 ? 'selected' : '' }}>Inactive</option>
                            </select>
                            @error('status')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-12 form-row mb-3">
                        <label for="description" class="col-3 col-form-label text-right">Description</label>
                        <div class="col-6">
                            <textarea name="description" id="description" class="form-control" rows="4">{{ old('description', $hairStyleDetail->description) }}</textarea>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-12">
                        <hr>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-9">
                        <button type="submit" class="btn btn-success">Update Hair Style</button>
                        <a href="{{ route('admin.hairstyles.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal for managing time slots -->
<div class="modal fade" id="manageTimeSlotsModal" tabindex="-1" role="dialog" aria-labelledby="manageTimeSlotsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- ...existing code for modal... -->
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    // ...existing JavaScript code...
</script>
@endsection