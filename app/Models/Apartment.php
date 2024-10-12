<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Apartment extends Model
{
    use HasFactory;
    protected $guarded = ["id"];
    public function apartment_images(): HasMany
    {
        return $this->hasMany(ApartmentImages::class);
    }
}
