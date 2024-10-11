<?php

namespace Database\Factories;

use App\Models\Photo;
use App\Models\Listing;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoFactory extends Factory
{
    protected $model = Photo::class;

    public function definition()
    {
        return [
            'listing_id' => Listing::factory(), // Génére un listing fictif associé
            'path' => $this->faker->imageUrl(640, 480, 'business', true), // URL d'une image fictive
        ];
    }
}
