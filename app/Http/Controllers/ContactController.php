<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class ContactController extends Controller
{
    
    public function store(Request $request)
{
    // Extract only the desired fields from the request
    $data = $request->only(['name', 'email', 'number', 'address', 'message']);

    // Define validation rules for the desired fields
    $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'number' => 'required|string|max:15',
        'address' => 'required|string|max:255',
        'message' => 'required|string',
    ];

    // Perform validation
    $validator = Validator::make($data, $rules);

    // Check if validation fails
    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    // If validation passes, get validated data
    $validated = $validator->validated();

    // Save the data to the database
    Contact::create($validated);

    // Redirect back with success message
    return redirect()->back()->with('success', 'Your message has been sent successfully!');
}
}
