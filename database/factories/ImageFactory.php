<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwl6luAiGR932LrYXt65jM_qTUuZ3ayKcJow&usqp=CAU",
            'product_id' => Product::inRandomOrder()->first()->id,
        ];
    }
}
