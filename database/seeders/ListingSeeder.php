<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Listing;

class ListingSeeder extends Seeder
{
    public function run()
    {
        Listing::factory(10)->create();  // Crée 10 listings fictifs
    }
}
