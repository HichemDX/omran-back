<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c1 = Category::create(
            [
                'parent' => null,
                'name_ar' => "طوب",
                'name_fr' => "Brique",
                'homepage' => 1,
            ]
        );

        Category::insert(
            [
                [
                    'parent' => $c1->id,
                    'name_ar' => "طوب 8",
                    'name_fr' => "Brique 8",
                    'homepage' => 0,
                ],
                [
                    'parent' => $c1->id,
                    'name_ar' => "طوب 12",
                    'name_fr' => "Brique 12",
                    'homepage' => 0,
                ],
            ]
        );
        Category::insert(
            [
                [
                    'parent' => null,
                    'name_ar' => "حصى",
                    'name_fr' => "Gravier",
                    'homepage' => 1,
                ],
                [
                    'parent' => null,
                    'name_ar' => "رمل",
                    'name_fr' => "Sable",
                    'homepage' => 1,
                ],
                [
                    'parent' => null,
                    'name_ar' => "حديد",
                    'name_fr' => "Fer",
                    'homepage' => 1,
                ],
            ]
        );
    }
}
