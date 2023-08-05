<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class SliderOffreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_ar' => Str::random(10),
            'name_fr' => Str::random(10),
            'desc_ar' => Str::random(10),
            'desc_fr' => Str::random(10),
            'days' => 20,
            'prix' => 3000,
        ];
    }
}
