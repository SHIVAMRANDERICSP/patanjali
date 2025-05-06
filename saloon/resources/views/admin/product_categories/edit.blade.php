@extends('adminlte::page')
@section('title', 'Edit Product Category')

@section('content')
<div class="container mt-4">
    <div class="card shadow border">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Edit Product Category</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.product_categories.update', $productCategory->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- Title Field -->
                    <div class="form-group col-12 form-row mb-3">
                        <label for="title" class="col-3 col-form-label text-right">Title</label>
                        <div class="col-6">
                            <input type="text" name="title" id="title" class="form-control" value="{{ $productCategory->title }}" required>
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Description Field -->
                    <div class="form-group col-12 form-row mb-3">
                        <label for="description" class="col-3 col-form-label text-right">Description</label>
                        <div class="col-6">
                            <textarea name="description" id="description" class="form-control summernote" rows="4">{{ old('description', $productCategory->description) }}</textarea>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Image Field -->
                    <div class="form-group col-12 form-row mb-3">
                        <label for="image" class="col-3 col-form-label text-right">Image</label>
                        <div class="col-6">
                            @if($productCategory->image)
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $productCategory->image) }}" alt="Category Image" class="img-thumbnail" style="max-height: 150px;">
                            </div>
                            @endif
                            <input type="file" name="image" id="image" class="form-control">
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Sort Order Field -->
                    <div class="form-group col-12 form-row mb-3">
                        <label for="sort_order" class="col-3 col-form-label text-right">Sort Order</label>
                        <div class="col-6">
                            <input type="number" name="sort_order" id="sort_order" class="form-control" value="{{ old('sort_order', $productCategory->sort_order) }}">
                            @error('sort_order')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Status Field -->
                    <div class="form-group col-12 form-row mb-3">
                        <label for="status" class="col-3 col-form-label text-right">Status</label>
                        <div class="col-6">
                            <select name="status" id="status" class="form-control" required>
                                <option value="1" {{ (old('status', $productCategory->status) == 1) ? 'selected' : '' }}>Inactive</option>
                                <option value="0" {{ (old('status', $productCategory->status) == 0) ? 'selected' : '' }}>Active</option>
                            </select>
                            @error('status')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Dynamic Fields Container -->
                    <div id="dynamic-fields-container"></div>

                    <!-- Add More Fields Button -->

                </div>

                <div class="row mb-4">
                    <div class="col-md-9 offset-md-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('admin.product_categories.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 200
        });

        // Append new field row
        $('#add-more-fields').on('click', function() {
            $('#dynamic-fields-container').append(`
                <div class="form-group row">
                    <div class="col-8">
                        <input type="text" name="additional_fields[]" class="form-control" placeholder="Enter value">
                    </div>
                    <div class="col-4">
                        <button type="button" class="btn btn-danger remove-field">Remove</button>
                    </div>
                </div>
            `);
        });

        // Remove field row
        $(document).on('click', '.remove-field', function() {
            $(this).closest('.form-group').remove();
        });
    });
</script>
@endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote/dist/summernote.min.css" rel="stylesheet">
@endsection