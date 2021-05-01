<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activites;

class ActivitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activites::factory()->count(10)->create();
    }
}
