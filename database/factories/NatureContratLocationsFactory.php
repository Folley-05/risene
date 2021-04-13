<?php

namespace Database\Factories;

use App\Models\NatureContratLocations;
use Illuminate\Database\Eloquent\Factories\Factory;

class NatureContratLocationsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NatureContratLocations::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code'=>$this->faker->unique()->randomDigit,
            'intitule'=>$this->faker->sentence(10, true)
        ];
    }
}
