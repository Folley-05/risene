<?php

namespace Database\Factories;

use App\Models\FormeJuridiques;
use Illuminate\Database\Eloquent\Factories\Factory;

class FormeJuridiquesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FormeJuridiques::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code'=>$this->faker->unique()->numberBetween($min=0, $max=10),
            'libelle'=>$this->faker->lastName,
        ];
    }
}
