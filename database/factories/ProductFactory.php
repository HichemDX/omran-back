<?php

namespace Database\Factories;

use App\Models\Store;
use App\Models\Unite;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'store_id' => Store::inRandomOrder()->first()->id,
            'name' => Str::random(10),
            'description' => Str::random(10),
            'price' => 35.1254,
            'qty' => 2,
            'unite_id' => Unite::inRandomOrder()->first()->id,
        ];
    }
}
