<?php

namespace Database\Factories;

use App\Models\Commune;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => Str::random(10),
            'provider' => 'GOOGLE',
            'key' => Str::random(10),
            'phone' => Str::random(10),
            'image' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwl6luAiGR932LrYXt65jM_qTUuZ3ayKcJow&usqp=CAU",
            'commune_id' => Commune::inRandomOrder()->first()->id,
            'address' => Str::random(20),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
