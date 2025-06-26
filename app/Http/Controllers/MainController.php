<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\MedicalRecord;

class MainController extends Controller
{
    public function index()
    {
        // Find a test user by ID (1) or replace with actual authenticated user logic
        $user = User::find(1);

        // If user exists, fetch their medical records; otherwise, return an empty array
        $records = $user ? MedicalRecord::where('user_id', $user->id)->get() : [];

        // Debugging: Check if user and records are fetched correctly
        // Remove this line once verified
        // dd($user, $records);

        // Pass the user and records data to the Blade view
        return view('mainpage', compact('user', 'records'));
    }
}