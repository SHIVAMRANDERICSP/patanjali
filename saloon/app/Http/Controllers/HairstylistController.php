<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Hairstylist;
use App\Models\Hairstylist_availabilities;
use App\Models\User;
use Illuminate\Http\Request;

class HairstylistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all hair stylists details
        $hairstylist = Hairstylist::with('user')->get();


        // Return the view with the hair stylists details
        return view('admin.hairstylist.index', compact('hairstylist'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the view to create a new hair stylist detail
        return view('admin.hairstylist.create');
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

        $hairstylist = Hairstylist::create([
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
                        Hairstylist_availabilities::create([
                            'hairstylist_id' => $hairstylist->id,
                            'day' => $day,
                            'start_time' => $timeSlot['start_time'],
                            'end_time' => $timeSlot['end_time'],
                        ]);
                    }
                }
            }
        }

        // Redirect to the index page with a success message
        return redirect()->route('admin.hairstylist.index')->with('success', 'Hair stylist details saved successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hairstylist_availabilities $Hairstylist_availabilities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Retrieve the HairstylistsDetails record along with the related user
        $hairstylist = hairstylist::with('user')->find($id);
        $hairsstylistAvailability = Hairstylist_availabilities::where('hairstylist_id', $id)->get();

        if (!$hairstylist) {
            return redirect()->route('admin.hairstylists.index')
                ->with('error', 'Hair stylist detail not found.');
        }

        return view('admin.hairstylist.edit', compact('hairstylist', 'hairsstylistAvailability'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Retrieve the hair stylist detail record
        $hairstylist = Hairstylist::findOrFail($id);

        // Retrieve the associated user
        $user = $hairstylist->user;

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

        // Update HairstylistsDetails fields
        $hairstylist->contact_number = $request->input('contact_number', $hairstylist->contact_number);
        $hairstylist->experience     = $request->input('experience', $hairstylist->experience);
        $hairstylist->description    = $validatedData['description'] ?? $hairstylist->description;
        $hairstylist->status         = $request->input('status', $hairstylist->status);

        // Handle photo update: if a new photo is uploaded, delete the old one and store the new photo.
        if ($request->hasFile('photo')) {
            // Delete old photo if it exists
            if ($hairstylist->photo) {
                Storage::disk('public')->delete($hairstylist->photo);
            }
            // Store the new photo and update the path
            $photoPath = $request->file('photo')->store('photos', 'public');
            $hairstylist->photo = $photoPath;
        }

        $hairstylist->save();

        // Redirect to the index page with a success message
        return redirect()->route('admin.hairstylist.index')->with('success', 'Hair stylist details updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hairstylist $hairstylist, $id)
    {
        // Find the hair stylist detail record
        $hairstylist = hairstylist::findOrFail($id);

        // Delete the associated user if needed
        if ($hairstylist->user) {
            $hairstylist->user->delete();
            $hairstylist->where('user_id', $hairstylist->user->id)->delete();
        }

        // Delete the photo if it exists
        if ($hairstylist->photo) {
            Storage::disk('public')->delete($hairstylist->photo);
        }

        return redirect()->route('admin.hairstylist.index')->with('success', 'Hair stylist details deleted successfully.');
    }
}
