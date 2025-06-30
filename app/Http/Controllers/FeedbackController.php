<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("feedback.index");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ✅ Server-side validation
        $validated = $request->validate([
            'name' => 'required|string|max:60',
            'email' => 'required|email|max:60',
            'phone_number' => 'required|string|max:20',
            'message' => 'required|string|max:500',
        ]);

        // ✅ Store only validated & sanitized input
        Feedback::create($validated);

        // ✅ Redirect safely with success message
        return redirect()->back()->with('success', 'Thank you for your feedback!');
    }
}
