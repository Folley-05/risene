<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Departements;

class DepartementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departements::factory()->count(52)->create();
    }
}
