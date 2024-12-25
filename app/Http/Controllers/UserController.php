<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|unique:users,email',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'assistance_type' => 'nullable|string|max:255',
            'zipcode' => 'nullable|string|max:10',
            'message' => 'nullable|string',
            // 'password' => 'nullable|string|min:6|confirmed', // Password validation
        ]);

        // Create the user
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'address' => $validated['address'],
            'city' => $validated['city'],
            'state' => $validated['state'],
          
           
            'message' => $validated['message'],
            // 'password' => Hash::make($validated['password']),  // Hash the password
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Your information has been submitted successfully!');
    }
}
