<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    // Display a listing of all reservations
    public function index()
    {
        $reservations = Reservation::all();
        return response()->json($reservations);
    }

    // Show a specific reservation
    public function show($id)
    {
        $reservation = Reservation::findOrFail($id);
        return response()->json($reservation);
    }

    // Store a newly created reservation
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'listing_id' => 'required|exists:listings,id',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after:start_date',
        ]);

        $reservation = Reservation::create($validatedData);

        return response()->json(['message' => 'Reservation created successfully', 'reservation' => $reservation], 201);
    }

    // Update a specific reservation
    public function update(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);

        $validatedData = $request->validate([
            'user_id' => 'sometimes|exists:users,id',
            'listing_id' => 'sometimes|exists:listings,id',
            'start_date' => 'sometimes|date|after_or_equal:today',
            'end_date' => 'sometimes|date|after:start_date',
        ]);

        $reservation->update($validatedData);

        return response()->json(['message' => 'Reservation updated successfully', 'reservation' => $reservation], 200);
    }

    // Delete a specific reservation
    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return response()->json(['message' => 'Reservation deleted successfully'], 200);
    }
}
