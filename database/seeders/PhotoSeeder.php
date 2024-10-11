<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Photo;

class PhotoSeeder extends Seeder
{
    public function run()
    {
        Photo::factory(10)->create();  // Crée 10 photos fictives
    }
}
