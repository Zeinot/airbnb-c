<?php

use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home-page');
});

Route::get('/apartments', [ApartmentController::class, "index"])->name("apartments.index");

Route::get('/n', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::post('/apartments', [ApartmentController::class, "store"])->name("apartments.store");
    Route::get('/admin/apartments/{apartment}/edit', [ApartmentController::class, "edit"])->name("apartments.edit");
    Route::delete('/admin/apartments/{apartment}/', [ApartmentController::class, "destroy"])->name("apartments.destroy");
    Route::get('/apartments/{apartment}/', [ApartmentController::class, "show"])->name("apartments.show");
    Route::get('/admin', [ApartmentController::class, "admin_index"])->name("apartments.admin_index");
    Route::get('/admin/apartments/create', [ApartmentController::class, "create"])->name("apartments.create");
//  ------------------------ profile ----------------------------
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Listings routes
Route::get('/listings', [ListingController::class, 'index']);
Route::get('/listings/{id}', [ListingController::class, 'show']);
Route::post('/listings', [ListingController::class, 'store']);
Route::put('/listings/{id}', [ListingController::class, 'update']);
Route::delete('/listings/{id}', [ListingController::class, 'destroy']);

// Reservations routes

Route::middleware('auth:sanctum')->group(function () {
    // Liste des réservations
    Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');

    // Créer une nouvelle réservation
    Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');

    // Afficher une réservation spécifique
    Route::get('/reservations/{reservation}', [ReservationController::class, 'show'])->name('reservations.show');

    // Mettre à jour une réservation
    Route::put('/reservations/{reservation}', [ReservationController::class, 'update'])->name('reservations.update');

    // Supprimer une réservation
    Route::delete('/reservations/{reservation}', [ReservationController::class, 'destroy'])->name('reservations.destroy');
});

// Reviews routes
Route::get('/reviews', [ReviewController::class, 'index']);
Route::get('/reviews/{id}', [ReviewController::class, 'show']);
Route::post('/reviews', [ReviewController::class, 'store']);
Route::put('/reviews/{id}', [ReviewController::class, 'update']);
Route::delete('/reviews/{id}', [ReviewController::class, 'destroy']);

// Photos routes
Route::get('/photos', [PhotoController::class, 'index']);
Route::get('/photos/{id}', [PhotoController::class, 'show']);
Route::post('/photos', [PhotoController::class, 'store']);
Route::put('/photos/{id}', [PhotoController::class, 'update']);
Route::delete('/photos/{id}', [PhotoController::class, 'destroy']);

require __DIR__ . '/auth.php';
