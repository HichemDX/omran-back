<?php

namespace Database\Seeders;

use App\Models\Wilaya;
use Illuminate\Database\Seeder;

class WilayaSeeder extends Seeder
{
/**
 * Run the database seeds.
 *
 * @return void
 */
public function run()
{
Wilaya::insert( [
   [
 "id" => 1,
 "code" => "01",
 "name_ar" => "أدرار",
 "name_fr" => "Adrar"
  ],
   [
"id" => 2,
"code" => "02",
"name_ar" => " الشلف",
"name_fr" => "Chlef"
 ],
   [
   "id" => 3,
   "code" => "03",
   "name_ar" => "الأغواط",
   "name_fr" => "Laghouat	"
],
   [
  "id" => 4,
  "code" => "04",
  "name_ar" => "أم البواقي",
  "name_fr" => "Oum El Bouaghi"
   ],
   [
 "id" => 5,
 "code" => "05",
 "name_ar" => "باتنة",
 "name_fr" => "Batna"
  ],
   [
"id" => 6,
"code" => "06",
"name_ar" => " بجاية",
"name_fr" => "Béjaïa"
 ],
   [
   "id" => 7,
   "code" => "07",
   "name_ar" => "بسكرة",
   "name_fr" => "Biskra"
],
   [
  "id" => 8,
  "code" => "08",
  "name_ar" => "بشار",
  "name_fr" => "Béchar"
   ],
   [
 "id" => 9,
 "code" => "09",
 "name_ar" => "البليدة",
 "name_fr" => "Blida"
  ],
   [
"id" => 10,
"code" => "10",
"name_ar" => "البويرة",
"name_fr" => "Bouira"
 ],
   [
   "id" => 11,
   "code" => "11",
   "name_ar" => "تمنراست",
   "name_fr" => "Tamanrasset"
],
   [
  "id" => 12,
  "code" => "12",
  "name_ar" => "تبسة",
  "name_fr" => "Tébessa"
   ],
   [
 "id" => 13,
 "code" => "13",
 "name_ar" => "تلمسان",
 "name_fr" => "Tlemcen"
  ],
   [
"id" => 14,
"code" => "14",
"name_ar" => "تيارت",
"name_fr" => "tiaret"
 ],
   [
   "id" => 15,
   "code" => "15",
   "name_ar" => "تيزي وزو",
   "name_fr" => "Tizi-Ouzou"
],
   [
  "id" => 16,
  "code" => "16",
  "name_ar" => "الجزائر",
  "name_fr" => "Alger"
   ],
   [
 "id" => 17,
 "code" => "17",
 "name_ar" => "الجلفة",
 "name_fr" => "Djelfa"
  ],
   [
"id" => 18,
"code" => "18",
"name_ar" => "جيجل",
"name_fr" => "Jijel"
 ],
   [
   "id" => 19,
   "code" => "19",
   "name_ar" => "سطيف",
   "name_fr" => "Sétif"
],
   [
  "id" => 20,
  "code" => "20",
  "name_ar" => "سعيدة",
  "name_fr" => "Saida"
   ],
   [
 "id" => 21,
 "code" => "21",
 "name_ar" => "سكيكدة",
 "name_fr" => "Skikda"
  ],
   [
"id" => 22,
"code" => "22",
"name_ar" => "سيدي بلعباس",
"name_fr" => "Sidi-Bel-Abbès"
 ],
   [
   "id" => 23,
   "code" => "23",
   "name_ar" => "عنابة",
   "name_fr" => "Annaba"
],
   [
  "id" => 24,
  "code" => "24",
  "name_ar" => "قالمة",
  "name_fr" => "Guelma"
   ],
   [
 "id" => 25,
 "code" => "25",
 "name_ar" => "قسنطينة",
 "name_fr" => "Constantine"
  ],
   [
"id" => 26,
"code" => "26",
"name_ar" => "المدية",
"name_fr" => "Médéa"
 ],
   [
   "id" => 27,
   "code" => "27",
   "name_ar" => "مستغانم",
   "name_fr" => "Mostaganem"
],
   [
  "id" => 28,
  "code" => "28",
  "name_ar" => "المسيلة",
  "name_fr" => "M'Sila"
   ],
   [
 "id" => 29,
 "code" => "29",
 "name_ar" => "معسكر",
 "name_fr" => " Mascara"
  ],
   [
"id" => 30,
"code" => "30",
"name_ar" => "ورقلة",
"name_fr" => "Ouargla"
 ],
   [
   "id" => 31,
   "code" => "31",
   "name_ar" => "وهران",
   "name_fr" => "Oran"
],
   [
  "id" => 32,
  "code" => "32",
  "name_ar" => "البيض",
  "name_fr" => "El-Bayadh"
   ],
   [
 "id" => 33,
 "code" => "33",
 "name_ar" => "إليزي",
 "name_fr" => "Illizi"
  ],
   [
"id" => 34,
"code" => "34",
"name_ar" => "برج بوعريريج",
"name_fr" => "Bordj Bou Arreridj"
 ],
   [
   "id" => 35,
   "code" => "35",
   "name_ar" => "بومرداس",
   "name_fr" => "Boumerdès"
],
   [
  "id" => 36,
  "code" => "36",
  "name_ar" => "الطارف",
  "name_fr" => "El-Tarf"
   ],
   [
 "id" => 37,
 "code" => "37",
 "name_ar" => "تندوف",
 "name_fr" => "Tindouf"
  ],
   [
"id" => 38,
"code" => "38",
"name_ar" => "تيسمسيلت",
"name_fr" => "Tissemsilt"
 ],
   [
   "id" => 39,
   "code" => "39",
   "name_ar" => "الوادي",
   "name_fr" => "El-Oued"
],
   [
  "id" => 40,
  "code" => "40",
  "name_ar" => "خنشلة",
  "name_fr" => "Khenchela"
   ],
   [
 "id" => 41,
 "code" => "41",
 "name_ar" => "سوق أهراس",
 "name_fr" => "Souk-Ahras"
  ],
   [
"id" => 42,
"code" => "42",
"name_ar" => "تيبازة",
"name_fr" => "Tipaza"
 ],
   [
   "id" => 43,
   "code" => "43",
   "name_ar" => "ميلة",
   "name_fr" => "Mila"
],
   [
  "id" => 44,
  "code" => "44",
  "name_ar" => "عين الدفلة",
  "name_fr" => "Aïn-Defla"
   ],
   [
 "id" => 45,
 "code" => "45",
 "name_ar" => "النعامة",
 "name_fr" => "Naâma"
  ],
   [
"id" => 46,
"code" => "46",
"name_ar" => "عين تيموشنت",
"name_fr" => "Aïn-Témouchent"
 ],
   [
   "id" => 47,
   "code" => "47",
   "name_ar" => "غرداية",
   "name_fr" => "Ghardaia"
],
   [
  "id" => 48,
  "code" => "48",
  "name_ar" => "غليزان",
  "name_fr" => "Relizane"
   ],
   [
 "id" => 58,
 "code" => "58",
 "name_ar" => "المنيعة",
 "name_fr" => "El Menia"
  ],
   [
"id" => 57,
"code" => "57",
"name_ar" => "المغير",
"name_fr" => "El Meghaier"
 ],
   [
   "id" => 56,
   "code" => "56",
   "name_ar" => "جانت",
   "name_fr" => "Djanet"
],
   [
  "id" => 55,
  "code" => "55",
  "name_ar" => "تقرت",
  "name_fr" => "Touggourt"
   ],
   [
 "id" => 54,
 "code" => "54",
 "name_ar" => "عين قزام",
 "name_fr" => "In Guezzam"
  ],
   [
"id" => 53,
"code" => "53",
"name_ar" => "عين صالح",
"name_fr" => "In Salah"
 ],
   [
   "id" => 52,
   "code" => "52",
   "name_ar" => "بني عباس",
   "name_fr" => "Béni Abbès"
],
   [
  "id" => 51,
  "code" => "51",
  "name_ar" => "أولاد جلال",
  "name_fr" => "Ouled Djellal"
   ],
   [
 "id" => 50,
 "code" => "50",
 "name_ar" => "برج باجي مختار",
 "name_fr" => "Bordj Badji Mokhtar"
  ],
   [
"id" => 49,
"code" => "49",
"name_ar" => "تيميمون",
"name_fr" => "Timimoun"
 ]
]


);
}
}
