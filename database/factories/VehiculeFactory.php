<?php

namespace Database\Factories;

use App\Models\Vehicule;
use Driver;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehiculeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehicule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->unique()->ean8(),
            'color'=> $this->faker->hexColor(['rojo', 'amarillo', 'negro']),
            'model'=> $this->faker->sentence(),
            'plate_car'=> $this->faker->sentence(),
            'type'=> $this->faker->word(),

            'driver_id'=> Driver::all()->random()->id,

        ];
    }
}
