@extends('adminlte::page')
@section('title', 'Edit Product')
@section('content_header')
<section class="content-header admin-page-title-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="mt-0">Edit Product</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/admin') }}" title="Home">Home</a>
                    </li>
                    <li class="breadcrumb-item active" title="Add Product">Edit Product</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection


@section('content')
<div class="container mt-4">
    <div class="card shadow border">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Edit Product</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.products.update', $products->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group col-12 form-row mb-3">
                        <label for="category_id" class="col-3 col-form-label text-right">Category</label>
                        <div class="col-6">
                            <select name="product_category_id" id="product_category_id" class="form-control">
                                @foreach($product_categories as $category)
                                <option value="{{ $category->id }}" {{ $products->product_category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->title }}
                                </option>
                                @endforeach
                            </select>
                            @error('product_category_id')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-12 form-row mb-3">
                        <label for="title" class="col-3 col-form-label text-right">Title</label>
                        <div class="col-6">
                            <input type="text" name="title" id="title" class="form-control" value="{{ $products->title }}" required>
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-12 form-row mb-3">
                        <label for="short_description" class="col-3 col-form-label text-right">Short Description</label>
                        <div class="col-6">
                            <textarea name="short_description" id="short_description" class="form-control" rows="4">{{ $products->short_description }}</textarea>
                            @error('short_description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-12 form-row mb-3">
                        <label for="description" class="col-3 col-form-label text-right">Description</label>
                        <div class="col-6">
                            <textarea name="description" id="description" class="form-control" rows="4">{{ $products->description }}</textarea>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-12 form-row mb-3">
                        <label for="image" class="col-3 col-form-label text-right">Image</label>
                        <div class="col-6">
                            <input type="file" name="image" id="image" class="form-control">
                            <small>Current Image: <a href="{{ asset('storage/' . $products->image) }}" target="_blank">View</a></small>
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-12 form-row mb-3">
                        <label for="additional_images" class="col-3 col-form-label text-right">Additional Images</label>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header bg-secondary text-white">
                                    <h5 class="mb-0">Additional Images</h5>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="additional-images-table">
                                            @if($product_additional_images->count())
                                            @foreach($product_additional_images as $additional_image)
                                            <tr data-id="{{ $additional_image->id }}">
                                                <td>
                                                    <img src="{{ asset('storage/' . $additional_image->image) }}" alt="Thumbnail" width="50">
                                                    <input type="hidden" name="existing_images[]" value="{{ $additional_image->id }}">
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-sm remove-image" data-id="{{ $additional_image->id }}">
                                                        Remove
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @else
                                            <tr>
                                                <td colspan="2">No additional images available.</td>
                                            </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                    <div id="deleted_images"></div>
                                    <button type="button" id="add-more-images" class="btn btn-success btn-sm mt-2">Add More Images</button>
                                    <div id="delete_images"></div>
                                    @error('additional_images')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 form-row mb-3">
                        <label for="price" class="col-3 col-form-label text-right">Price</label>
                        <div class="col-6">
                            <input type="number" step="0.01" name="price" id="price" class="form-control" value="{{ $products->price }}">
                            @error('price')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-12 form-row mb-3">
                        <label for="discount_price" class="col-3 col-form-label text-right">Discount Price</label>
                        <div class="col-6">
                            <input type="number" step="0.01" name="discount_price" id="discount_price" class="form-control" value="{{ $products->discount_price }}">
                            @error('discount_price')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-12 form-row mb-3">
                        <label for="sort_order" class="col-3 col-form-label text-right">Sort Order</label>
                        <div class="col-6">
                            <input type="number" name="sort_order" id="sort_order" class="form-control" value="{{ $products->sort_order }}">
                            @error('sort_order')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-12 form-row mb-3">
                        <label for="meta_title" class="col-3 col-form-label text-right">Meta Title</label>
                        <div class="col-6">
                            <input type="text" name="meta_title" id="meta_title" class="form-control" value="{{ $products->meta_title }}">
                            @error('meta_title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-12 form-row mb-3">
                        <label for="meta_description" class="col-3 col-form-label text-right">Meta Description</label>
                        <div class="col-6">
                            <input type="text" name="meta_description" id="meta_description" class="form-control" value="{{ $products->meta_description }}">
                            @error('meta_description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-12 form-row mb-3">
                        <label for="meta_keyword" class="col-3 col-form-label text-right">Meta Keyword</label>
                        <div class="col-6">
                            <input type="text" name="meta_keywords" id="meta_keywords" class="form-control" value="{{ $products->meta_keywords }}">
                            @error('meta_keywords')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-12 form-row mb-3">
                        <label for="meta_slug" class="col-3 col-form-label text-right">Meta Slug</label>
                        <div class="col-6">
                            <input type="text" name="meta_slug" id="meta_slug" class="form-control" value="{{ $products->meta_slug }}">
                            @error('meta_slug')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-12 form-row mb-3">
                        <label for="status" class="col-3 col-form-label text-right">Status</label>
                        <div class="col-6">
                            <select name="status" id="status" class="form-control">
                                <option value="0" {{ $products->status == 0 ? 'selected' : '' }}>Active</option>
                                <option value="1" {{ $products->status == 1 ? 'selected' : '' }}>Inactive</option>
                            </select>
                            @error('status')
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
                        <input type="hidden" name="event_id" value="">
                        <input type="submit" name="submit" class="btn-success-theme btn btn-success" value="Update Product" title="Update Product">
                        <a href="{{ route('admin.products.index') }}" class="btn-default-theme btn btn-secondary" title="Discard">Discard</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
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

        // Append new image row
        $(document).ready(function() {
            // Append new image row
            $('#add-more-images').on('click', function() {
                $('#additional-images-table').append(`
                <tr>
                    <td>
                        <input type="file" name="additional_images[]" class="form-control">
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger btn-sm remove-new-image">Remove</button>
                    </td>
                </tr>
            `);
            });

            // Remove newly added image row
            $(document).on('click', '.remove-new-image', function() {
                $(this).closest('tr').remove();
            });

            // Remove existing image row and mark for deletion
            $(document).on('click', '.remove-image', function() {
                let imageId = $(this).data('id');
                $(this).closest('tr').remove();
                $('#deleted_images').append(`<input type="hidden" name="deleted_images[]" value="${imageId}">`);
            });
        });
    });
</script>
@endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection