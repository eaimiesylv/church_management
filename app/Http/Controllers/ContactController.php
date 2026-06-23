<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // For now, log the contact submission. You can replace this with mail or DB storage.
        Log::info('Contact form submitted', $data);

        return back()->with('contact_success', 'Thanks! Your message has been received.');
    }
}
