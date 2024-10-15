<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'apartment_id',
        'user_id',
        'start_date',
        'end_date',
        'status',
    ];

    /**
     * Relation avec le modèle Apartment.
     * Un appartement peut avoir plusieurs réservations.
     */
    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }

    /**
     * Relation avec le modèle User.
     * Un utilisateur peut effectuer plusieurs réservations.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
