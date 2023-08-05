<?php

namespace Database\Factories;

use App\Models\Wilaya;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommuneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_fr' => Str::random(6),
            'name_ar' => Str::random(6),
            'wilaya_id' => Wilaya::inRandomOrder()->first()->id,
        ];
    }
}
