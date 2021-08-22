<?php

namespace Database\Seeders;


use App\Models\Driver;
use App\Models\Vehicule;
use App\Models\Travel;


use Illuminate\Database\Seeder;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Driver::factory(10)->create();
        Travel::factory(10)->create();
        Vehicule::factory(10)->create();
        
        
    }
}