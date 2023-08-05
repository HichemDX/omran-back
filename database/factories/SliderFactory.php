<?php

namespace Database\Factories;

use App\Models\SliderOffre;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class SliderFactory extends Factory
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
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwl6luAiGR932LrYXt65jM_qTUuZ3ayKcJow&usqp=CAU',
            'link' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwl6luAiGR932LrYXt65jM_qTUuZ3ayKcJow&usqp=CAU',
            'begin' => now(),
            'slider_offres_id' => SliderOffre::inRandomOrder()->first()->id,
        ];
    }
}
