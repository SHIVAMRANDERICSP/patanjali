<?php

namespace App\Http\Controllers;

use App\Models\HairStylesDetails;
use App\Models\HairStylesAvailability;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class HairStylesDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all hair styles details
        $hairStylesDetails = HairStylesDetails::with('user')->get();


        // Return the view with the hair styles details
        return view('admin.hair_styles.index', compact('hairStylesDetails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the view to create a new hair style detail
        return view('admin.hair_styles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'description' => 'nullable|string',
            // 'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Save user details in the users table
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);
        $role = $user->assignRole('hair_stylist');
        // Handle photo upload
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public'); // Save photo to 'storage/app/public/photos'
        }

        $hairStyleDetail = HairStylesDetails::create([
            'user_id' => $user->id,
            'contact_number' => $request['contact_number'] ?? null,
            'experience' => $request['experience'] ?? null,
            'description' => $request['description'] ?? null,
            'photo' => $photoPath, // Save photo path
            'status' => $request['status'] ?? '0',
        ]);

        // Handle availability if provided
        if ($request->has('availability_days')) {
            foreach ($request->input('availability_days') as $day => $timeSlots) {
                foreach ($timeSlots as $timeSlot) {
                    if (is_array($timeSlot)) { // Ensure $timeSlot is an array
                        HairStylesAvailability::create([
                            'hair_styles_details_id' => $hairStyleDetail->id,
                            'day' => $day,
                            'start_time' => $timeSlot['start_time'],
                            'end_time' => $timeSlot['end_time'],
                        ]);
                    }
                }
            }
        }

        // Redirect to the index page with a success message
        return redirect()->route('admin.hairstyles.index')->with('success', 'Hair style details saved successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(HairStylesDetails $hairStylesDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Retrieve the HairStylesDetails record along with the related user
        $hairStyleDetail = HairStylesDetails::with('user')->find($id);
        $hairsstyleAvailability = HairStylesAvailability::where('hair_styles_details_id', $id)->get();

        if (!$hairStyleDetail) {
            return redirect()->route('admin.hairstyles.index')
                ->with('error', 'Hair style detail not found.');
        }

        return view('admin.hair_styles.edit', compact('hairStyleDetail', 'hairsstyleAvailability'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Retrieve the hair style detail record
        $hairStyleDetail = HairStylesDetails::findOrFail($id);

        // Retrieve the associated user
        $user = $hairStyleDetail->user;

        // Validate the incoming request.
        // Note: For the email uniqueness rule, we ignore the current user's ID.
        $validatedData = $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password'    => 'nullable|string|min:8',
            'description' => 'nullable|string',
            'photo'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update user details
        $user->name  = $validatedData['name'];
        $user->email = $validatedData['email'];
        if ($request->filled('password')) {
            $user->password = bcrypt($validatedData['password']);
        }
        $user->save();

        // Update HairStylesDetails fields
        $hairStyleDetail->contact_number = $request->input('contact_number', $hairStyleDetail->contact_number);
        $hairStyleDetail->experience     = $request->input('experience', $hairStyleDetail->experience);
        $hairStyleDetail->description    = $validatedData['description'] ?? $hairStyleDetail->description;
        $hairStyleDetail->status         = $request->input('status', $hairStyleDetail->status);

        // Handle photo update: if a new photo is uploaded, delete the old one and store the new photo.
        if ($request->hasFile('photo')) {
            // Delete old photo if it exists
            if ($hairStyleDetail->photo) {
                Storage::disk('public')->delete($hairStyleDetail->photo);
            }
            // Store the new photo and update the path
            $photoPath = $request->file('photo')->store('photos', 'public');
            $hairStyleDetail->photo = $photoPath;
        }

        $hairStyleDetail->save();

        // Redirect to the index page with a success message
        return redirect()->route('admin.hairstyles.index')->with('success', 'Hair style details updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HairStylesDetails $hairStylesDetails, $id)
    {
        // Find the hair style detail record
        $hairStylesDetails = HairStylesDetails::findOrFail($id);

        // Delete the associated user if needed
        if ($hairStylesDetails->user) {
            $hairStylesDetails->user->delete();
            $hairStylesDetails->where('user_id', $hairStylesDetails->user->id)->delete();
        }

        // Delete the photo if it exists
        if ($hairStylesDetails->photo) {
            Storage::disk('public')->delete($hairStylesDetails->photo);
        }

        return redirect()->route('admin.hairstylist.index')->with('success', 'Hair style details deleted successfully.');
    }
}
