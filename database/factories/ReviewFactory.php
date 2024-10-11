<?php

namespace Database\Factories;

use App\Models\Review;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    protected $model = Review::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(), // Génére un utilisateur fictif associé
            'listing_id' => Listing::factory(), // Génére un listing fictif associé
            'rating' => $this->faker->numberBetween(1, 5),
            'comment' => $this->faker->paragraph,
        ];
    }
}
