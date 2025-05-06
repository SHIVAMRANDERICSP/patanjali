@extends('adminlte::page')

@section('title', 'Edit Service')

@section('content_header')
<section class="content-header admin-page-title-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="mt-0">Edit Service</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/admin') }}" title="Home">Home</a>
                    </li>
                    <li class="breadcrumb-item active" title="Edit Service">Edit Service</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="container-fluid mt-4">
    <div class="card shadow-sm border">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Edit Service</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.services.update', $services->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Title Field -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="title" title="Title">Title :</label>
                    <div class="col-md-6">
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ old('title', $services->title) }}" placeholder="Enter product title" required>
                        @error('title')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Description Field -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="description" title="Description">Description :</label>
                    <div class="col-md-6">
                        <textarea name="description" id="description" class="form-control summernote" rows="4"
                            placeholder="Enter detailed description" required>{{ old('description', $services->description) }}</textarea>
                        @error('description')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Image Field -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="image" title="Image">Image :</label>
                    <div class="col-md-6">
                        @if($services->image)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $services->image) }}" alt="Service Image" class="img-thumbnail" style="max-height: 150px;">
                        </div>
                        @endif
                        <input type="file" name="image" id="image" class="form-control">
                        @error('image')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Price Field -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="price" title="Price">Price :</label>
                    <div class="col-md-6">
                        <input type="number" step="0.01" name="price" id="price" class="form-control"
                            value="{{ old('price', $services->price) }}" placeholder="Enter price">
                        @error('price')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Discount Price Field -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="discount_price" title="Discount Price">Discount Price :</label>
                    <div class="col-md-6">
                        <input type="number" step="0.01" name="discount_price" id="discount_price" class="form-control"
                            value="{{ old('discount_price', $services->discount_price) }}" placeholder="Enter discount price">
                        @error('discount_price')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Sort Order Field -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="sort_order" title="Sort Order">Sort Order :</label>
                    <div class="col-md-6">
                        <input type="number" name="sort_order" id="sort_order" class="form-control"
                            value="{{ old('sort_order', $services->sort_order) }}" placeholder="Enter sort order">
                        @error('sort_order')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Status Field -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="status" title="Status">Status :</label>
                    <div class="col-md-6">
                        <select name="status" id="status" class="form-control" required>
                            <option value="1" {{ old('status', $services->status) == 1 ? 'selected' : '' }}>Inactive</option>
                            <option value="0" {{ old('status', $services->status) == 0 ? 'selected' : '' }}>Active</option>
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
                        <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Discard</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<!-- Include Summernote JS -->
<script src="https://cdn.jsdelivr.net/npm/summernote/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 200,
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
<link href="https://cdn.jsdelivr.net/npm/summernote/dist/summernote.min.css" rel="stylesheet">
@endsection