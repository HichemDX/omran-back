<?php

namespace Database\Seeders;

use App\Models\Wilaya;
use App\Models\Commune;
use App\Models\Customer;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::insert([
            [
                'name' => "Merouane",
                'provider' => 'GOOGLE',
                'key' => Str::random(10),
                'phone' => "0565875475",
                'image' => "https://via.placeholder.com/150",
                'commune_id' => Commune::inRandomOrder()->first()->id,
                'address' => Wilaya::inRandomOrder()->first()->name_fr,
                'email' => "marwan@gmail.com",
            ],
            [
                'name' => "Hamid",
                'provider' => 'GOOGLE',
                'key' => Str::random(10),
                'phone' => "0565875475",
                'image' => "https://via.placeholder.com/150",
                'commune_id' => Commune::inRandomOrder()->first()->id,
                'address' => Wilaya::inRandomOrder()->first()->name_fr,
                'email' => "hamid@gmail.com",
            ],
        ]);
    }
}
