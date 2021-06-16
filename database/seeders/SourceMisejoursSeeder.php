<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SourceMisejours;

class SourceMisejoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SourceMisejours::factory()->count(10)->create();
    }
}
