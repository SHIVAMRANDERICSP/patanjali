@extends('adminlte::page')
@section('title', 'categories')
@section('content_header')
<h1 class="text-center font-bold">Categories</h1>
@endsection

@section('content')
<form action="{{ route('admin.product_categories.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- Name Field (used for Title) -->
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" required>
        @error('title')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Description Field -->
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control" rows="4"></textarea>
        @error('description')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Image Field -->
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control">
        @error('image')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>


    <!-- Sort Order Field -->
    <div class="form-group">
        <label for="sort_order">Sort Order</label>
        <input type="number" name="sort_order" id="sort_order" class="form-control">
        @error('sort_order')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Status Field -->
    <div class="form-group">
        <label for="status">Status</label>
        <select name="status" id="status" class="form-control">
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
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('#description').summernote({
            height: 200, // Set editor height
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });
</script>
@endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection