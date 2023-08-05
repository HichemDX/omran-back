<?php

namespace Database\Factories;

use App\Models\Commune;
use App\Models\Customer;
use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => Str::random(10),
            'customer_id' => Customer::inRandomOrder()->first()->id,
            'store_id' => Store::inRandomOrder()->first()->id,
            'commune_id' => Commune::inRandomOrder()->first()->id,
            'name' => Str::random(10),
            "phone" => $this->faker->e164PhoneNumber(), 
            "address" => $this->faker->address(),
            'shipping_cost' => 100,
            'grand_total' => 1000,
            'status' => 'PENDING'
        ];
    }
}
