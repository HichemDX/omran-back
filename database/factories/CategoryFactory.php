<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'parent' => rand(0, 1),
            'name_ar' => $this->faker->sentence(),
            'name_fr' => $this->faker->sentence(),
            'homepage' => rand(0, 1),
        ];
    }
}
