<?php

namespace Database\Factories;

use App\Models\CatImpotLiberatoires;
use Illuminate\Database\Eloquent\Factories\Factory;

class CatImpotLiberatoiresFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CatImpotLiberatoires::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
			'intitule'=>$this->faker->firstName,
			'code'=>$this->faker->unique()->numberBetween($min=0, $max=10),
        ];
    }
}
