<?php

namespace Database\Factories;

use App\Models\Arrondissements;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArrondissementsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Arrondissements::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code'=>$this->faker->unique()->numberBetween($min=0, $max=256),
            'libelle'=>$this->faker->firstName,
            'departement'=>$this->faker->numberBetween($min=0, $max=52)
        ];
    }
}
