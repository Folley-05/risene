<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CatJuridiques;

class CatJuridiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CatJuridiques::factory()->count(10)->create();
    }
}
