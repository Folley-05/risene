<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NatureCreation;


class NatureCreationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NatureCreation::factory()->count(5)->create();
        
    }
}
