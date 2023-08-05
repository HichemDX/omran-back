<?php

namespace Database\Seeders;

use App\Models\Slider;
use App\Models\SliderOffre;
use Illuminate\Database\Seeder;

class SliderOffreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $of1 = SliderOffre::create([
            'name_ar' => "عرض 1",
            'name_fr' => "Offre 1",
            'desc_ar' => "هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. بينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار",
            'desc_fr' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque perferendis recusandae, veniam sit officia quaerat omnis aliquam magnam hic fugit dignissimos libero, eos accusantium quisquam in cum, molestiae distinctio non!",
            'days' => 90,
            'prix' => 3000,
        ]);
        $of2 = SliderOffre::create([
            'name_ar' => "عرض 2",
            'name_fr' => "Offre 2",
            'desc_ar' => "هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. بينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار",
            'desc_fr' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque perferendis recusandae, veniam sit officia quaerat omnis aliquam magnam hic fugit dignissimos libero, eos accusantium quisquam in cum, molestiae distinctio non!",
            'days' => 90,
            'prix' => 3000,
        ]);

        Slider::create([
            'name' => "Slider 1",
            'image' => '6391bf43c19d2ban1.PNG',
            'link' => 'https://khotwa-tech.com/',
            'begin' => now(),
            'slider_offres_id' => $of1->id,
        ]);

        Slider::create([
            'name' => "Slider 2",
            'image' => '6391c09df038fban2.PNG',
            'link' => 'https://khotwa-tech.com/',
            'begin' => now(),
            'slider_offres_id' => $of2->id,
        ]);
    }
}
