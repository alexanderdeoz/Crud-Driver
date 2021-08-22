<?php

namespace Database\Factories;

use app\Models\Driver;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class DriverFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Driver::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id'=> $this->faker->unique()->ean8(),
            'name'=> $this->faker->name(),
            'birthday' => $this->faker->date(),
            'joined_date'=> $this->faker->date(),
            'email'=> $this->faker->unique()->safeEmail,
            'phone'=> $this->faker->phoneNumber(),
        ];
    }
}
