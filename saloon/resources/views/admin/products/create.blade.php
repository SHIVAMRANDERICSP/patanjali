@extends('adminlte::page')

@section('title', 'Product')

@section('content_header')
<h1 class="text-center font-bold mb-4">Add Product</h1>
@endsection

@section('css')
<!-- DataTables CSS if needed (commented out for this form) -->
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css"> -->
<!-- Summernote CSS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content_header')
<section class="content-header admin-page-title-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="mt-0">Add Product</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/admin') }}" title="Home">Home</a>
                    </li>
                    <li class="breadcrumb-item active" title="Add Product">Add Product</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="container-fluid">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title mb-0">Add New Product</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Category Select -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="product_category_id" title="Category">Category :</label>
                    <div class="col-md-6">
                        <select name="product_category_id" id="product_category_id" class="form-control custom-select" required>
                            <option value="" disabled selected>Select a category</option>
                            @foreach($product_categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                        @error('product_category_id')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Title Field -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="title" title="Title">Title :</label>
                    <div class="col-md-6">
                        <input type="text" name="title" id="title" class="form-control" placeholder="Enter product title" required>
                        @error('title')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Short Description Field -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="short_description" title="Short Description">Short Description :</label>
                    <div class="col-md-6">
                        <textarea name="short_description" id="short_description" class="form-control" rows="3" placeholder="Enter a brief description"></textarea>
                        @error('short_description')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Description Field with Summernote -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="description" title="Description">Description :</label>
                    <div class="col-md-6">
                        <textarea name="description" id="description" class="form-control summernote" rows="4" placeholder="Enter detailed description"></textarea>
                        @error('description')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Main Image Upload -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="image" title="Image">Image :</label>
                    <div class="col-md-6">
                        <input type="file" name="image" id="image" class="form-control-file">
                        @error('image')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Additional Images -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="additional_images" title="Additional Images">Additional Images :</label>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-sm btn-outline-success mb-2" id="add-image-btn">+ Add Image</button>
                        <div class="card">
                            <div class="card-body p-0">
                                <table class="table mb-0" id="additional-images-table">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Additional images rows will be appended here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @error('additional_images')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="price" title="Price">Price :</label>
                    <div class="col-md-6">
                        <input type="number" step="0.01" name="price" id="price" class="form-control" placeholder="Enter price" required>
                        @error('price')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Discount Price Field (Separate Row) -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="discount_price" title="Discount Price">Discount Price :</label>
                    <div class="col-md-6">
                        <input type="number" step="0.01" name="discount_price" id="discount_price" class="form-control" placeholder="Enter discount price">
                        @error('discount_price')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Sort Order Field (Separate Row) -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="sort_order" title="Sort Order">Sort Order :</label>
                    <div class="col-md-6">
                        <input type="number" name="sort_order" id="sort_order" class="form-control" placeholder="Enter sort order">
                        @error('sort_order')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Meta Data -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="meta_title" title="Meta Title">Meta Title :</label>
                    <div class="col-md-6">
                        <input type="text" name="meta_title" id="meta_title" class="form-control" placeholder="Enter meta title">
                        @error('meta_title')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="meta_description" title="Meta Description">Meta Description :</label>
                    <div class="col-md-6">
                        <input type="text" name="meta_description" id="meta_description" class="form-control" placeholder="Enter meta description">
                        @error('meta_description')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="meta_keyword" title="Meta Keyword">Meta Keyword :</label>
                    <div class="col-md-6">
                        <input type="text" name="meta_keyword" id="meta_keyword" class="form-control" placeholder="Enter meta keywords">
                        @error('meta_keyword')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="meta_slug" title="Meta Slug">Meta Slug :</label>
                    <div class="col-md-6">
                        <input type="text" name="meta_slug" id="meta_slug" class="form-control" placeholder="Enter meta slug">
                        @error('meta_slug')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Status Field -->
                <div class="row mb-4">
                    <label class="col-md-3 form-label text-md-right" for="status" title="Status">Status :</label>
                    <div class="col-md-6">
                        <select name="status" id="status" class="form-control custom-select" required>
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
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<!-- Include Summernote JS -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        // Initialize Summernote on the description textarea
        $('#description').summernote({
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

        // Add additional image rows dynamically
        $('#add-image-btn').click(function() {
            $('#additional-images-table tbody').append(`
                    <tr>
                        <td><input type="file" name="additional_images[]" class="form-control-file"></td>
                        <td><button type="button" class="btn btn-sm btn-outline-danger remove-image-btn">Remove</button></td>
                    </tr>
                `);
        });

        // Remove an additional image row
        $(document).on('click', '.remove-image-btn', function() {
            $(this).closest('tr').remove();
        });
    });
</script>
@endsection