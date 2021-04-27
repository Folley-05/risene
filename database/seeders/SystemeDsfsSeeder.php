<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SystemeDsfs;

class SystemeDsfsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SystemeDsfs::factory()->count(10)->create();
    }
}
