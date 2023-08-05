<?php

namespace Database\Factories;

use App\Models\Commune;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'provider' => 'GOOGLE',
            'key' => Str::random(10),
            'phone' => Str::random(10),
            'address' => Str::random(10),
            'longitude' => 35.1254,
            'latitude' => 2.05,
            'image' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwl6luAiGR932LrYXt65jM_qTUuZ3ayKcJow&usqp=CAU",
            'status' => 'PENDING',
            'commune_id' => Commune::inRandomOrder()->first()->id,
            'min_amount_order' => 40
        ];
    }
}
