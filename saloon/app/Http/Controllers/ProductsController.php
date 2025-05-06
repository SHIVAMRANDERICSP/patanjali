<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Models\Products;
use Illuminate\Support\Facades\Storage;
use App\Models\Products_Additional_image;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $product_categories = ProductCategory::all();
        // Return the view to create a new product  
        return view('admin.products.create', compact('product_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // Validate the incoming request
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'product_category_id' => 'required|exists:product_categories,id',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'price' => 'numeric',
            'discount_price' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'sort_order' => 'nullable|integer',
            'status' => 'required',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'meta_slug' => 'nullable|string',
        ]);
        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public'); // Save image to 'storage/app/public/images'
            $validatedData['image'] = $imagePath;
        }
        // Create a new product
        $product = Products::create($validatedData);
        // Handle additional images if provided
        if ($request->hasFile('additional_images')) {
            foreach ($request->file('additional_images') as $image) {
                $additionalImagePath = $image->store('images', 'public'); // Save image to 'storage/app/public/images'
                Products_Additional_image::create([
                    'product_id' => $product->id,
                    'image' => $additionalImagePath,
                ]);
            }
        }
        if ($product) {
            // Redirect to the products index page with a success message
            return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
        } else {
            // Redirect back with an error message
            return redirect()->back()->with('error', 'Failed to create product.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products, $id)
    {

        $product_categories = ProductCategory::all();
        $products = Products::find($id);
        $product_additional_images = Products_Additional_image::where('product_id', $id)->get();
        return view('admin.products.edit', compact('products', 'product_categories', 'products', 'product_additional_images'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $products, $id)
    {

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'product_category_id' => 'required|exists:product_categories,id',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'price' => 'numeric',
            'discount_price' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'sort_order' => 'nullable|integer',
            'status' => 'required',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'meta_slug' => 'nullable|string',
        ]);
        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public'); // Save image to 'storage/app/public/images'
            $validatedData['image'] = $imagePath;
        }

        if ($request->has('deleted_images')) {
            $deletedImages = Products_Additional_image::whereIn('id', $request->deleted_images)->get();
            foreach ($deletedImages as $image) {
                Storage::disk('public')->delete($image->image);
                $image->delete();
            }
        }

        // Handle new additional images
        if ($request->hasFile('additional_images')) {
            foreach ($request->file('additional_images') as $image) {
                $additionalImagePath = $image->store('images', 'public');
                Products_Additional_image::create([
                    'product_id' => $id,
                    'image' => $additionalImagePath,
                ]);
            }
        }
        // Update the product
        $product = Products::find($id);
        $product->update($validatedData);
        if ($product) {
            // Redirect to the products index page with a success message
            return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
        } else {
            // Redirect back with an error message
            return redirect()->back()->with('error', 'Failed to update product.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products)
    {
        //
    }
}
