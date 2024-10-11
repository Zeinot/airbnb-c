<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Display a listing of all listings
    public function index()
{
    $listings = Listing::all();
    return view('home-page', compact('listings'));
}


    // Show a specific listing
    public function show($id)
    {
        $listing = Listing::findOrFail($id);
        return response()->json($listing);
    }

    // Store a newly created listing
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'location' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id',
        ]);

        $listing = Listing::create($validatedData);

        return response()->json(['message' => 'Listing created successfully', 'listing' => $listing], 201);
    }

    // Update a specific listing
    public function update(Request $request, $id)
    {
        $listing = Listing::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'price' => 'sometimes|numeric',
            'location' => 'sometimes|string|max:255',
            'user_id' => 'sometimes|exists:users,id',
        ]);

        $listing->update($validatedData);

        return response()->json(['message' => 'Listing updated successfully', 'listing' => $listing], 200);
    }

    // Delete a specific listing
    public function destroy($id)
    {
        $listing = Listing::findOrFail($id);
        $listing->delete();

        return response()->json(['message' => 'Listing deleted successfully'], 200);
    }
}
