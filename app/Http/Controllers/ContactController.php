<?php

namespace App\Http\Controllers;

use App\Models\ContactFrom;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function contactPage() : View {
        return view('frontent.pages.contact');
    }

    public function submitFrom(Request $request) {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255', // Subject is optional
            'message' => 'required|string',
        ]);

        // Store the data in the database
        ContactFrom::create($validatedData);

        // Redirect or return a response
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
