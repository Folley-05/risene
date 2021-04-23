<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Entreprises;

class EntreprisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Entreprises::factory()->count(10)->create(); 
    }
}
