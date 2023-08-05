<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //'reportable_id' => 1,
            'reporting_customer_id' => Customer::inRandomOrder()->first()->id,
            //'reporting_store_id' => null,
            'store_id' => null,
            'customer_id' => null,
            'reportable_type' => 1,
            'report_type' => 'store',
            'content' => Str::random(10),
            'image' => Str::random(10),
        ];
    }
}
