<?php

namespace Database\Factories;
use App\Models\Driver;
use App\Models\Travel;
use Illuminate\Database\Eloquent\Factories\Factory;

class TravelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Travel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->unique()->ean8(),
            'start_time' => $this->faker->datetime(),
            'end_time' => $this->faker->datetime(),
            
            'driver_id'=> Driver::all()->random()->id,
            
        ];
    }
}
