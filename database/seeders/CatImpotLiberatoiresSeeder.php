<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CatImpotLiberatoires;

class CatImpotLiberatoiresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CatImpotLiberatoires::factory()->count(10)->create();
    }
}
