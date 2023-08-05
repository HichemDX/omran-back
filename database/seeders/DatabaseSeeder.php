<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\Admin::factory(2)->create();
        $this->call([
            //AdminSeeder::class,
            WilayaSeeder::class,
            CommuneSeeder::class,
            // UniteSeeder::class,
            SliderOffreSeeder::class,
            // SliderSeeder::class,
            StoreSeeder::class,
            // ProductSeeder::class,
            CustomerSeeder::class,
            // ReportSeeder::class,
            // OrderSeeder::class,
            // OrdersDetails::class,
            // CategorySeeder::class
        ]);
    }
}
