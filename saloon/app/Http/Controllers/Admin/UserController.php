<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Import the User model

class UserController extends Controller
{
    public function index()
    {
        // Fetch users with pagination
        $users = User::role('user')->get();

        // Pass users to the view
        return view('admin.users.index', compact('users'));
    }
}
