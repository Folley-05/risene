<?php

namespace Database\Factories;

use App\Models\NatureCreation;
use Illuminate\Database\Eloquent\Factories\Factory;

class NatureCreationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NatureCreation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code'=>$this->faker->unique()->randomDigit,
            'designation'=>$this->faker->name
        ];
    }
}
