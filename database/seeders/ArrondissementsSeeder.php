<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Arrondissements;

class ArrondissementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Arrondissements::factory()->count(256)->create();
    }
}
