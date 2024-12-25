<?php

namespace App\Http\Controllers;

use App\Models\FranchiseContact;
use Illuminate\Http\Request;

class FranchiseContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'assistance_type' => 'required|string|max:255',
            'zipcode' => 'required|string|max:10',
            'message' => 'required|string',
        ]);

        // Save the validated data into the database
        FranchiseContact::create($validated);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your franchise inquiry has been submitted successfully!');
    }
}

