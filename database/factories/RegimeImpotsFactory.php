<?php

namespace Database\Factories;

use App\Models\RegimeImpots;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegimeImpotsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RegimeImpots::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code'=>$this->faker->unique()->randomDigit,
            'designation'=>$this->faker->name,
            'intitule'=>$this->faker->name
        ];
    }
}
