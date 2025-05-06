<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all services
        $services = Services::all();

        // Return the view with the services
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Pass the current timestamp to the view
        $currentTimestamp = now();

        // Return the view to create a new service
        return view('admin.services.create', compact('currentTimestamp'));
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
            'price' => 'numeric',
            'discount_price' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'sort_order' => 'nullable|integer',
            'status' => 'required',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public'); // Save image to 'storage/app/public/images'
            $validatedData['image'] = $imagePath;
        }

        // Create a new service
        $service = Services::create($validatedData);

        if ($service) {
            // Redirect to the services index page with a success message
            return redirect()->route('admin.services.index')->with('success', 'Service created successfully.');
        } else {
            // Redirect back with an error message
            return redirect()->back()->with('error', 'Failed to create service.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Services $services)
    {
        // Fetch the service by ID
        $services = Services::findOrFail($id);
        // Pass the service to the edit view
        return view('admin.services.edit', compact('services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request, Services $services)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'numeric',
            'discount_price' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'sort_order' => 'nullable|integer',
            'status' => 'required',
        ]);

        // Fetch the service by ID
        $service = Services::findOrFail($id);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public'); // Save image to 'storage/app/public/images'
            $validatedData['image'] = $imagePath;
        }

        // If no new image is provided, keep the old image path
        if (!$request->hasFile('image')) {
            $validatedData['image'] = $service->image;
        } else if ($request->hasFile('image') && $service->image) {
            // Delete the old image if it exists
            $oldImagePath = public_path('storage/' . $service->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        // Update the service with validated data
        $service->update($validatedData);

        // Redirect to the services index page with a success message
        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, Services $services)
    {
        // Find the service by ID

        $service = Services::findOrFail($id);

        // Delete the service
        if ($service->delete()) {
            return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to delete service.');
        }
    }
}
