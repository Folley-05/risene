<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EtatActivites;

class EtatActivitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EtatActivites::factory()->count(5)->create();
    }
}
