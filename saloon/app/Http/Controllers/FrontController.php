<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $services = Services::all();
        return view('welcome', compact('services'));
    }
}
