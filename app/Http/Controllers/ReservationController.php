<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Affiche la liste des réservations.
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('admin.reservations.index', compact('reservations'));
    }

    /**
     * Affiche le formulaire de création d'une nouvelle réservation.
     */
    public function create()
    {
        return view('admin.reservations.create');
    }

    /**
     * Enregistre une nouvelle réservation dans la base de données.
     */
    public function store(Request $request)
    {
        $request->validate([
            'apartment_id' => 'required|exists:apartments,id',
            'user_id' => 'required|exists:users,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'status' => 'required|in:pending,confirmed,canceled',
        ]);

        Reservation::create($request->all());

        return redirect()->route('admin.reservations.index')
            ->with('success', 'Réservation créée avec succès.');
    }

    /**
     * Affiche les détails d'une réservation spécifique.
     */
    public function show(Reservation $reservation)
    {
        return view('admin.reservations.show', compact('reservation'));
    }

    /**
     * Affiche le formulaire d'édition d'une réservation existante.
     */
    public function edit(Reservation $reservation)
    {
        return view('admin.reservations.edit', compact('reservation'));
    }

    /**
     * Met à jour une réservation dans la base de données.
     */
    public function update(Request $request, Reservation $reservation)
    {
        $request->validate([
            'apartment_id' => 'required|exists:apartments,id',
            'user_id' => 'required|exists:users,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'status' => 'required|in:pending,confirmed,canceled',
        ]);

        $reservation->update($request->all());

        return redirect()->route('admin.reservations.index')
            ->with('success', 'Réservation mise à jour avec succès.');
    }

    /**
     * Supprime une réservation de la base de données.
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return redirect()->route('admin.reservations.index')
            ->with('success', 'Réservation supprimée avec succès.');
    }
}
