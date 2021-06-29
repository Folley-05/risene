<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FormeJuridiques;

class FormeJuridiquesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FormeJuridiques::factory()->count(10)->create();
    }
}
