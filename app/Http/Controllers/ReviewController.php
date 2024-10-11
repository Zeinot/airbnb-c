<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // Display a listing of all reviews
    public function index()
    {
        $reviews = Review::all();
        return response()->json($reviews);
    }

    // Show a specific review
    public function show($id)
    {
        $review = Review::findOrFail($id);
        return response()->json($review);
    }

    // Store a newly created review
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'listing_id' => 'required|exists:listings,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:500',
        ]);

        $review = Review::create($validatedData);

        return response()->json(['message' => 'Review created successfully', 'review' => $review], 201);
    }

    // Update a specific review
    public function update(Request $request, $id)
    {
        $review = Review::findOrFail($id);

        $validatedData = $request->validate([
            'user_id' => 'sometimes|exists:users,id',
            'listing_id' => 'sometimes|exists:listings,id',
            'rating' => 'sometimes|integer|min:1|max:5',
            'comment' => 'sometimes|string|max:500',
        ]);

        $review->update($validatedData);

        return response()->json(['message' => 'Review updated successfully', 'review' => $review], 200);
    }

    // Delete a specific review
    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return response()->json(['message' => 'Review deleted successfully'], 200);
    }
}
