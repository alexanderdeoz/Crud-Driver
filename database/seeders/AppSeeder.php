<?php

namespace Database\Seeders;


use App\Models\Driver;
ise App\Models\Vehicule;
use App\Models\Role;
use App\Models\Travel;
use App\Models\User;

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
        Travel::factory(10)->create();
        Vehicule::factory(10)->create();
        User::factory(10)->create();
        Driver::factory(10)->create();
        
    }
}