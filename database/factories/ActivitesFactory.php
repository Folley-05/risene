<?php

namespace Database\Factories;

use App\Models\Activites;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivitesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Activites::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code'=>$this->faker->unique()->randomDigit,
            'intitule'=>$this->faker->unique()->sentence()
        ];
    }
}
