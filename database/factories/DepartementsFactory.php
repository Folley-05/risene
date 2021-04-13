<?php

namespace Database\Factories;

use App\Models\Departements;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepartementsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Departements::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code'=>$this->faker->unique()->numberBetween($min=0, $max=52),
            'libelle'=>$this->faker->firstName,
            'region'=>$this->faker->randomDigit()
        ];
    }
}
