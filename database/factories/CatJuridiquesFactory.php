<?php

namespace Database\Factories;

use App\Models\CatJuridiques;
use Illuminate\Database\Eloquent\Factories\Factory;

class CatJuridiquesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CatJuridiques::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code'=>$this->faker->unique()->numberBetween($min=0, $max=10),
            'institule'=>$this->faker->lastName,
        ];
    }
}
