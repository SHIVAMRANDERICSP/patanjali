<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all product categories
        $productCategories = ProductCategory::all();

        // Return the view with the product categories
        return view('admin.product_categories.index', compact('productCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the view to create a new product category
        return view('admin.product_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'sort_order' => 'nullable|integer',
            'status' => 'required|boolean',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public'); // Save image to 'storage/app/public/images'
            $validatedData['image'] = $imagePath;
        }
        // Create a new product category
        $productCategory = ProductCategory::create($validatedData);

        if ($productCategory) {
            // Redirect to the product categories index page with a success message
            return redirect()->route('admin.product_categories.index')->with('success', 'Product category created successfully.');
        } else {
            // Redirect back with an error message
            return redirect()->back()->with('error', 'Failed to create product category.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, ProductCategory $productCategory)
    {
        // Fetch the product category by ID
        $productCategory = ProductCategory::findOrFail($id);
        // Return the view to edit the product category
        return view('admin.product_categories.edit', compact('productCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Fetch the product category by ID
        $productCategory = ProductCategory::findOrFail($id);

        // Validate the incoming request
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'sort_order' => 'nullable|integer',
            'status' => 'required|boolean',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public'); // Save image to 'storage/app/public/images'
            $validatedData['image'] = $imagePath;
        }

        // Update the product category
        $productCategory->update($validatedData);

        // Redirect to the product categories index page with a success message
        return redirect()->route('admin.product_categories.index')->with('success', 'Product category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductCategory $productCategory, $id)
    {
        // Delete the product category
        $productCategory->where('id', $id)->delete();

        // Redirect to the product categories index page with a success message
        return redirect()->route('admin.product_categories.index')->with('success', 'Product category deleted successfully.');
    }
}
