<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Regions;

class RegimeImpotsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Regions::factory()->count(5)->create();
    }
}
