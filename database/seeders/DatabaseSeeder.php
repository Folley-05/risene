<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UserSeeder::class);
        //$this->call(RegionSeeder::class);
        //$this->call(DepartementsSeeder::class);
        //$this->call(ArrondissementsSeeder::class);
        //$this->call(EtatActivitesSeeder::class);
        //$this->call(NatureContratLocationsSeeder::class);
        //$this->call(NatureCreationSeeder::class);
        //$this->call(RegimeImpotsSeeder::class);
        //$this->call(StatusOccupationLocalsSeeder::class);
        //$this->call(SystemeDsfsSeeder::class);
        $this->call(EntreprisesSeeder::class);
    }
}
