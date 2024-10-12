<?php

use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home-page');
});

Route::get('/apartments', [ApartmentController::class, "index"])->name("apartments.index");
Route::post('/apartments', [ApartmentController::class, "store"])->name("apartments.store");
Route::get('/admin', [ApartmentController::class, "admin_index"])->name("apartments.admin_index");
Route::get('/admin/apartments/create', [ApartmentController::class, "create"])->name("apartments.create");


Route::get('/n', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
