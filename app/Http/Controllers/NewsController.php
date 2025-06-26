<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class NewsController extends Controller
{
    /**
     * Display the form or list of announcements.
     */
    public function index()
    {
        $announcements = Announcement::all(); // Fetch all announcements
        return view('news.main', compact('announcements'));
    }

    /**
     * Handle the form submission and store the data.
     */
    public function store(Request $request)
    {
        // Validate the input data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:announcements,email',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:500',
        ]);

        // Save the data into the announcements table
        Announcement::create($validated);

        // Redirect back with a success message
        return redirect()->route('news')->with('success', 'Information submitted successfully!');
    }

    public function news_form() {
        return view("news.news-form");
    }
}
