<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'nama_feedback' => 'required|string|max:255',
            'email_feedback' => 'required|email|max:255',
            'ulasan_feedback' => 'required|string',
            'saran_feedback' => 'nullable|string',
            'bintang_feedback' => 'required|integer|min:1|max:5',
        ]);

        // Create the feedback entry
        Feedback::create($request->all());

        // Redirect back with success message
        return redirect()->back()->with('success', 'Feedback submitted successfully!');
    }
}