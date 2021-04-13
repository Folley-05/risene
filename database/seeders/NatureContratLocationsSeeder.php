<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NatureContratLocations;


class NatureContratLocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NatureContratLocations::factory()->count(5)->create();
    }
}
