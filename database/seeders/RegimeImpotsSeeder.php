<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RegimeImpots;

class RegimeImpotsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RegimeImpots::factory()->count(5)->create();
    }
}
