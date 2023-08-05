<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Store;
use App\Models\Unite;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
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
                'icon'=>'storage/images/categories/6391baf637e53construction.png'
            ]
        );

        $sc1 = Category::create(
            [
                'parent' => $c1->id,
                    'name_ar' => "طوب 8",
                    'name_fr' => "Brique 8",
                    'homepage' => 0,
                    'icon'=>'storage/images/categories/6391baf637e53construction.png'
            ]
        );
        $sc2 = Category::create(
            [
                'parent' => $c1->id,
                    'name_ar' => "طوب 12",
                    'name_fr' => "Brique 12",
                    'homepage' => 0,
                    'icon'=>'storage/images/categories/6391baf637e53construction.png'
            ]
        );

        $c2 = Category::create([
                    'parent' => null,
                    'name_ar' => "حصى",
                    'name_fr' => "Gravier",
                    'homepage' => 1,
                    'icon'=>'storage/images/categories/6391baf637e53construction.png'
                ]);
        $c3 = Category::create([
                    'parent' => null,
                    'name_ar' => "رمل",
                    'name_fr' => "Sable",
                    'homepage' => 1,
                    'icon'=>'storage/images/categories/6391baf637e53construction.png'
                ]);
        $c4 = Category::create([
                    'parent' => null,
                    'name_ar' => "حديد",
                    'name_fr' => "Fer",
                    'homepage' => 1,
                    'icon'=>'storage/images/categories/6391baf637e53construction.png'
                ]);

        $store1 = Store::create([
            'name' => "Blida Store",
            'provider' => 'GOOGLE',
            'key' => Str::random(10),
            'phone' => "0534567877",
            'address' => "Blida",
            'longitude' => 35.1254,
            'latitude' => 2.05,
            'image' => "https://via.placeholder.com/150",
            'status' => 'ACCEPTED',
            'commune_id' => 285,
            'min_amount_order' => 40,
            'fcm_token' => 'eoL6h93_RZO_HCr5U1Sju-:APA91bF_E8n5DFBfnsuJf5yyrChyydjELOfSmrehtdUii8SP8KIqgvI5jBOxqRwRgtvqCaFqJDYd0IdMH_pcnnS7y3NnN1ySXOkp76bagDFjUkbg6NshLuORAmUUGBqCGo7gMiQA4s6-'
        ]
        );

        $store2 = Store::create([
            'name' => "Alger Store",
            'provider' => 'GOOGLE',
            'key' => Str::random(10),
            'phone' => "0534567877",
            'address' => "Alger",
            'longitude' => 35.1254,
            'latitude' => 2.05,
            'image' => "https://via.placeholder.com/150",
            'status' => 'ACCEPTED',
            'commune_id' => 555,
            'min_amount_order' => 40,
            'fcm_token' => 'eoL6h93_RZO_HCr5U1Sju-:APA91bF_E8n5DFBfnsuJf5yyrChyydjELOfSmrehtdUii8SP8KIqgvI5jBOxqRwRgtvqCaFqJDYd0IdMH_pcnnS7y3NnN1ySXOkp76bagDFjUkbg6NshLuORAmUUGBqCGo7gMiQA4s6-'

        ]
        );

        $store3 = Store::create([
            'name' => "Tipaza Store",
            'provider' => 'GOOGLE',
            'key' => Str::random(10),
            'phone' => "0534567877",
            'address' => "Tipaza",
            'longitude' => 35.1254,
            'latitude' => 2.05,
            'image' => "https://via.placeholder.com/150",
            'status' => 'ACCEPTED',
            'commune_id' => 1358,
            'min_amount_order' => 40,
            'fcm_token' => 'eoL6h93_RZO_HCr5U1Sju-:APA91bF_E8n5DFBfnsuJf5yyrChyydjELOfSmrehtdUii8SP8KIqgvI5jBOxqRwRgtvqCaFqJDYd0IdMH_pcnnS7y3NnN1ySXOkp76bagDFjUkbg6NshLuORAmUUGBqCGo7gMiQA4s6-'

        ]
        );

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
        $u5 = Unite::create([
            'name_fr' => "Chargement",
            'name_ar' => "شحنة",
        ]);


        $p1 = Product::create([
            'store_id' => $store1->id,
            'name' => "Brique de 8 trous",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint rem molestias illum saepe. Possimus placeat amet quia nulla nihil. Nobis minima eveniet et culpa, repellat itaque rerum enim consequatur laboriosam!",
            'price' => 35,
            'qty' => 2000,
            'unite_id' => $u1->id,
        ]);
        $p1->categories()->attach([
            'category_id' => $sc1->id
        ]);

        $p2 = Product::create([
            'store_id' => $store1->id,
            'name' => "Brique de 10 trous",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint rem molestias illum saepe. Possimus placeat amet quia nulla nihil. Nobis minima eveniet et culpa, repellat itaque rerum enim consequatur laboriosam!",
            'price' => 35,
            'qty' => 2000,
            'unite_id' => $u1->id,
        ]);
        $p2->categories()->attach([
            'category_id' => $sc2->id
        ]);

        $p3 = Product::create([
            'store_id' => $store2->id,
            'name' => "Fer de 8",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint rem molestias illum saepe. Possimus placeat amet quia nulla nihil. Nobis minima eveniet et culpa, repellat itaque rerum enim consequatur laboriosam!",
            'price' => 7000,
            'qty' => 100,
            'unite_id' => $u4->id,
        ]);
        $p3->categories()->attach([
            'category_id' => $c4->id
        ]);

        $p4 = Product::create([
            'store_id' => $store2->id,
            'name' => "Fer de 12",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint rem molestias illum saepe. Possimus placeat amet quia nulla nihil. Nobis minima eveniet et culpa, repellat itaque rerum enim consequatur laboriosam!",
            'price' => 11000,
            'qty' => 200,
            'unite_id' => $u4->id,
        ]);
        $p4->categories()->attach([
            'category_id' => $c4->id
        ]);

        $p5 = Product::create([
            'store_id' => $store3->id,
            'name' => "Sable bougezoul noir",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint rem molestias illum saepe. Possimus placeat amet quia nulla nihil. Nobis minima eveniet et culpa, repellat itaque rerum enim consequatur laboriosam!",
            'price' => 7000,
            'qty' => 10,
            'unite_id' => $u5->id,
        ]);
        $p5->categories()->attach([
            'category_id' => $c3->id
        ]);

        $p6 = Product::create([
            'store_id' => $store3->id,
            'name' => "Sable messila",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint rem molestias illum saepe. Possimus placeat amet quia nulla nihil. Nobis minima eveniet et culpa, repellat itaque rerum enim consequatur laboriosam!",
            'price' => 5000,
            'qty' => 20,
            'unite_id' => $u5->id,
        ]);
        $p6->categories()->attach([
            'category_id' => $c3->id
        ]);

        Image::insert([
            ['product_id'=>$p1->id,'name'=>"storage/images/products/150.png"],
            ['product_id'=>$p2->id,'name'=>"storage/images/products/150.png"],
            ['product_id'=>$p3->id,'name'=>"storage/images/products/150.png"],
            ['product_id'=>$p4->id,'name'=>"storage/images/products/150.png"],
            ['product_id'=>$p5->id,'name'=>"storage/images/products/150.png"],
            ['product_id'=>$p6->id,'name'=>"storage/images/products/150.png"],
            ['product_id'=>$p1->id,'name'=>"storage/images/products/150.png"],
            ['product_id'=>$p2->id,'name'=>"storage/images/products/150.png"],
            ['product_id'=>$p3->id,'name'=>"storage/images/products/150.png"],
            ['product_id'=>$p4->id,'name'=>"storage/images/products/150.png"],
            ['product_id'=>$p5->id,'name'=>"storage/images/products/150.png"],
            ['product_id'=>$p6->id,'name'=>"storage/images/products/150.png"],
        ]);
    }
}
