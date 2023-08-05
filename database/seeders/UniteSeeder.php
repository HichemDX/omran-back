<?php

namespace Database\Seeders;

use App\Models\Unite;
use Illuminate\Database\Seeder;

class UniteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u1 = Unite::create([
            'name_fr' => "Piece",
            'name_ar' => "قطعة",
        ]);
        $u2 = Unite::create([
            'name_fr' => "Metre",
            'name_ar' => "متر",
        ]);
        $u3 = Unite::create([
            'name_fr' => "KG",
            'name_ar' => "كغ",
        ]);
        $u4 = Unite::create([
            'name_fr' => "Quintal",
            'name_ar' => "قنطار",
        ]);
    }
}
