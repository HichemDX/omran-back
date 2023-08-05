<?php

namespace Database\Seeders;

use App\Models\Commune;
use Illuminate\Database\Seeder;

class CommuneSeeder extends Seeder
{
/**
 * Run the database seeds.
 *
 * @return void
 */
public function run()
{
Commune::insert(
[
   [
 "id" => 1,
 "wilaya_id" => 1,
 "name_ar" => "أدرار",
 "name_fr" => "Adrar"
  ],
   [
"id" => 2,
"wilaya_id" => 1,
"name_ar" => "اقبلي",
"name_fr" => "Akabli"
 ],
   [
   "id" => 3,
   "wilaya_id" => 49,
   "name_ar" => "أوقروت",
   "name_fr" => "Aougrout"
],
   [
  "id" => 4,
  "wilaya_id" => 1,
  "name_ar" => "أولف",
  "name_fr" => "Aoulef"
   ],
   [
 "id" => 5,
 "wilaya_id" => 50,
 "name_ar" => "برج باجي مختار",
 "name_fr" => "Bordj Badji Mokhtar"
  ],
   [
"id" => 6,
"wilaya_id" => 1,
"name_ar" => "بودة",
"name_fr" => "Bouda"
 ],
   [
   "id" => 7,
   "wilaya_id" => 49,
   "name_ar" => "شروين",
   "name_fr" => "Charouine"
],
   [
  "id" => 8,
  "wilaya_id" => 49,
  "name_ar" => "دلدول",
  "name_fr" => "Deldoul"
   ],
   [
 "id" => 9,
 "wilaya_id" => 1,
 "name_ar" => "فنوغيل",
 "name_fr" => "Fenoughil"
  ],
   [
"id" => 10,
"wilaya_id" => 1,
"name_ar" => "إن زغمير",
"name_fr" => "In Zghmir"
 ],
   [
   "id" => 11,
   "wilaya_id" => 49,
   "name_ar" => "قصر قدور",
   "name_fr" => "Ksar Kaddour"
],
   [
  "id" => 12,
  "wilaya_id" => 49,
  "name_ar" => "المطارفة",
  "name_fr" => "Metarfa"
   ],
   [
 "id" => 13,
 "wilaya_id" => 1,
 "name_ar" => "أولاد أحمد تيمي",
 "name_fr" => "Ouled Ahmed Timmi"
  ],
   [
"id" => 14,
"wilaya_id" => 49,
"name_ar" => "أولاد عيسى",
"name_fr" => "Ouled Aissa"
 ],
   [
   "id" => 15,
   "wilaya_id" => 49,
   "name_ar" => "أولاد السعيد",
   "name_fr" => "Ouled Said"
],
   [
  "id" => 16,
  "wilaya_id" => 1,
  "name_ar" => "رقان",
  "name_fr" => "Reggane"
   ],
   [
 "id" => 17,
 "wilaya_id" => 1,
 "name_ar" => "سالي",
 "name_fr" => "Sali"
  ],
   [
"id" => 18,
"wilaya_id" => 1,
"name_ar" => "السبع",
"name_fr" => "Sebaa"
 ],
   [
   "id" => 19,
   "wilaya_id" => 49,
   "name_ar" => "طالمين",
   "name_fr" => "Talmine"
],
   [
  "id" => 20,
  "wilaya_id" => 1,
  "name_ar" => "تامنطيط",
  "name_fr" => "Tamantit"
   ],
   [
 "id" => 21,
 "wilaya_id" => 1,
 "name_ar" => "تامست",
 "name_fr" => "Tamest"
  ],
   [
"id" => 22,
"wilaya_id" => 1,
"name_ar" => "تيمقتن",
"name_fr" => "Timekten"
 ],
   [
   "id" => 23,
   "wilaya_id" => 50,
   "name_ar" => "تيمياوين",
   "name_fr" => "Timiaouine"
],
   [
  "id" => 24,
  "wilaya_id" => 49,
  "name_ar" => "تيميمون",
  "name_fr" => "Timimoun"
   ],
   [
 "id" => 25,
 "wilaya_id" => 49,
 "name_ar" => "تنركوك",
 "name_fr" => "Tinerkouk"
  ],
   [
"id" => 26,
"wilaya_id" => 1,
"name_ar" => "تيت",
"name_fr" => "Tit"
 ],
   [
   "id" => 27,
   "wilaya_id" => 1,
   "name_ar" => "تسابيت",
   "name_fr" => "Tsabit"
],
   [
  "id" => 28,
  "wilaya_id" => 1,
  "name_ar" => "زاوية كنتة",
  "name_fr" => "Zaouiet Kounta"
   ],
   [
 "id" => 29,
 "wilaya_id" => 2,
 "name_ar" => "أبو الحسن",
 "name_fr" => "Abou El Hassane"
  ],
   [
"id" => 30,
"wilaya_id" => 2,
"name_ar" => "عين مران",
"name_fr" => "Ain Merane"
 ],
   [
   "id" => 31,
   "wilaya_id" => 2,
   "name_ar" => "بنايرية",
   "name_fr" => "Benairia"
],
   [
  "id" => 32,
  "wilaya_id" => 2,
  "name_ar" => "بني بوعتاب",
  "name_fr" => "Beni  Bouattab"
   ],
   [
 "id" => 33,
 "wilaya_id" => 2,
 "name_ar" => "بني حواء",
 "name_fr" => "Beni Haoua"
  ],
   [
"id" => 34,
"wilaya_id" => 2,
"name_ar" => "بني راشد",
"name_fr" => "Beni Rached"
 ],
   [
   "id" => 35,
   "wilaya_id" => 2,
   "name_ar" => "بوقادير",
   "name_fr" => "Boukadir"
],
   [
  "id" => 36,
  "wilaya_id" => 2,
  "name_ar" => "بوزغاية",
  "name_fr" => "Bouzeghaia"
   ],
   [
 "id" => 37,
 "wilaya_id" => 2,
 "name_ar" => "بريرة",
 "name_fr" => "Breira"
  ],
   [
"id" => 38,
"wilaya_id" => 2,
"name_ar" => "الشطية",
"name_fr" => "Chettia"
 ],
   [
   "id" => 39,
   "wilaya_id" => 2,
   "name_ar" => "الشلف",
   "name_fr" => "Chlef"
],
   [
  "id" => 40,
  "wilaya_id" => 2,
  "name_ar" => "الظهرة",
  "name_fr" => "Dahra"
   ],
   [
 "id" => 41,
 "wilaya_id" => 2,
 "name_ar" => "الحجاج",
 "name_fr" => "El Hadjadj"
  ],
   [
"id" => 42,
"wilaya_id" => 2,
"name_ar" => "الكريمية",
"name_fr" => "El Karimia"
 ],
   [
   "id" => 43,
   "wilaya_id" => 2,
   "name_ar" => "المرسى",
   "name_fr" => "El Marsa"
],
   [
  "id" => 44,
  "wilaya_id" => 2,
  "name_ar" => "حرشون",
  "name_fr" => "Harchoun"
   ],
   [
 "id" => 45,
 "wilaya_id" => 2,
 "name_ar" => "الهرانفة",
 "name_fr" => "Herenfa"
  ],
   [
"id" => 46,
"wilaya_id" => 2,
"name_ar" => "الأبيض مجاجة",
"name_fr" => "Labiod Medjadja"
 ],
   [
   "id" => 47,
   "wilaya_id" => 2,
   "name_ar" => "مصدق",
   "name_fr" => "Moussadek"
],
   [
  "id" => 48,
  "wilaya_id" => 2,
  "name_ar" => "وادي الفضة",
  "name_fr" => "Oued Fodda"
   ],
   [
 "id" => 49,
 "wilaya_id" => 2,
 "name_ar" => "وادي قوسين",
 "name_fr" => "Oued Goussine"
  ],
   [
"id" => 50,
"wilaya_id" => 2,
"name_ar" => "وادي سلي",
"name_fr" => "Oued Sly"
 ],
   [
   "id" => 51,
   "wilaya_id" => 2,
   "name_ar" => "أولاد عباس",
   "name_fr" => "Ouled Abbes"
],
   [
  "id" => 52,
  "wilaya_id" => 2,
  "name_ar" => "أولاد بن عبد القادر",
  "name_fr" => "Ouled Ben Abdelkader"
   ],
   [
 "id" => 53,
 "wilaya_id" => 2,
 "name_ar" => "أولاد فارس",
 "name_fr" => "Ouled Fares"
  ],
   [
"id" => 54,
"wilaya_id" => 2,
"name_ar" => "أم الدروع",
"name_fr" => "Oum Drou"
 ],
   [
   "id" => 55,
   "wilaya_id" => 2,
   "name_ar" => "سنجاس",
   "name_fr" => "Sendjas"
],
   [
  "id" => 56,
  "wilaya_id" => 2,
  "name_ar" => "سيدي عبد الرحمن",
  "name_fr" => "Sidi Abderrahmane"
   ],
   [
 "id" => 57,
 "wilaya_id" => 2,
 "name_ar" => "سيدي عكاشة",
 "name_fr" => "Sidi Akkacha"
  ],
   [
"id" => 58,
"wilaya_id" => 2,
"name_ar" => "الصبحة",
"name_fr" => "Sobha"
 ],
   [
   "id" => 59,
   "wilaya_id" => 2,
   "name_ar" => "تاجنة",
   "name_fr" => "Tadjena"
],
   [
  "id" => 60,
  "wilaya_id" => 2,
  "name_ar" => "تلعصة",
  "name_fr" => "Talassa"
   ],
   [
 "id" => 61,
 "wilaya_id" => 2,
 "name_ar" => "تاوقريت",
 "name_fr" => "Taougrit"
  ],
   [
"id" => 62,
"wilaya_id" => 2,
"name_ar" => "تنس",
"name_fr" => "Tenes"
 ],
   [
   "id" => 63,
   "wilaya_id" => 2,
   "name_ar" => "الزبوجة",
   "name_fr" => "Zeboudja"
],
   [
  "id" => 64,
  "wilaya_id" => 3,
  "name_ar" => "أفلو",
  "name_fr" => "Aflou"
   ],
   [
 "id" => 65,
 "wilaya_id" => 3,
 "name_ar" => "عين ماضي",
 "name_fr" => "Ain Madhi"
  ],
   [
"id" => 66,
"wilaya_id" => 3,
"name_ar" => "عين سيدي علي",
"name_fr" => "Ain Sidi Ali"
 ],
   [
   "id" => 67,
   "wilaya_id" => 3,
   "name_ar" => "البيضاء",
   "name_fr" => "El Beidha"
],
   [
  "id" => 68,
  "wilaya_id" => 3,
  "name_ar" => "بن ناصر بن شهرة",
  "name_fr" => "Benacer Benchohra"
   ],
   [
 "id" => 69,
 "wilaya_id" => 3,
 "name_ar" => "بريدة",
 "name_fr" => "Brida"
  ],
   [
"id" => 70,
"wilaya_id" => 3,
"name_ar" => "العسافية",
"name_fr" => "El Assafia"
 ],
   [
   "id" => 71,
   "wilaya_id" => 3,
   "name_ar" => "الغيشة",
   "name_fr" => "El Ghicha"
],
   [
  "id" => 72,
  "wilaya_id" => 3,
  "name_ar" => "الحويطة",
  "name_fr" => "El Haouaita"
   ],
   [
 "id" => 73,
 "wilaya_id" => 3,
 "name_ar" => "قلتة سيدي سعد",
 "name_fr" => "Gueltat Sidi Saad"
  ],
   [
"id" => 74,
"wilaya_id" => 3,
"name_ar" => "الحاج مشري",
"name_fr" => "Hadj Mechri"
 ],
   [
   "id" => 75,
   "wilaya_id" => 3,
   "name_ar" => "حاسي الدلاعة",
   "name_fr" => "Hassi Delaa"
],
   [
  "id" => 76,
  "wilaya_id" => 3,
  "name_ar" => "حاسي الرمل",
  "name_fr" => "Hassi R'mel"
   ],
   [
 "id" => 77,
 "wilaya_id" => 3,
 "name_ar" => "الخنق",
 "name_fr" => "Kheneg"
  ],
   [
"id" => 78,
"wilaya_id" => 3,
"name_ar" => "قصر الحيران",
"name_fr" => "Ksar El Hirane"
 ],
   [
   "id" => 79,
   "wilaya_id" => 3,
   "name_ar" => "الأغواط",
   "name_fr" => "Laghouat"
],
   [
  "id" => 80,
  "wilaya_id" => 3,
  "name_ar" => "وادي مرة",
  "name_fr" => "Oued Morra"
   ],
   [
 "id" => 81,
 "wilaya_id" => 3,
 "name_ar" => "وادي مزي",
 "name_fr" => "Oued M'zi"
  ],
   [
"id" => 82,
"wilaya_id" => 3,
"name_ar" => "سبقاق",
"name_fr" => "Sebgag"
 ],
   [
   "id" => 83,
   "wilaya_id" => 3,
   "name_ar" => "سيدي بوزيد",
   "name_fr" => "Sidi Bouzid"
],
   [
  "id" => 84,
  "wilaya_id" => 3,
  "name_ar" => "سيدي مخلوف",
  "name_fr" => "Sidi Makhlouf"
   ],
   [
 "id" => 85,
 "wilaya_id" => 3,
 "name_ar" => "تاجموت",
 "name_fr" => "Tadjemout"
  ],
   [
"id" => 86,
"wilaya_id" => 3,
"name_ar" => "تاجرونة",
"name_fr" => "Tadjrouna"
 ],
   [
   "id" => 87,
   "wilaya_id" => 3,
   "name_ar" => "تاويالة",
   "name_fr" => "Taouiala"
],
   [
  "id" => 88,
  "wilaya_id" => 4,
  "name_ar" => "عين ببوش",
  "name_fr" => "Ain Babouche"
   ],
   [
 "id" => 89,
 "wilaya_id" => 4,
 "name_ar" => "عين البيضاء",
 "name_fr" => "Ain Beida"
  ],
   [
"id" => 90,
"wilaya_id" => 4,
"name_ar" => "عين الديس",
"name_fr" => "Ain Diss"
 ],
   [
   "id" => 91,
   "wilaya_id" => 4,
   "name_ar" => "عين فكرون",
   "name_fr" => "Ain Fekroun"
],
   [
  "id" => 92,
  "wilaya_id" => 4,
  "name_ar" => "عين كرشة",
  "name_fr" => "Ain Kercha"
   ],
   [
 "id" => 93,
 "wilaya_id" => 4,
 "name_ar" => "عين مليلة",
 "name_fr" => "Ain M'lila"
  ],
   [
"id" => 94,
"wilaya_id" => 4,
"name_ar" => "عين الزيتون",
"name_fr" => "Ain Zitoun"
 ],
   [
   "id" => 95,
   "wilaya_id" => 4,
   "name_ar" => "بحير الشرقي",
   "name_fr" => "Behir Chergui"
],
   [
  "id" => 96,
  "wilaya_id" => 4,
  "name_ar" => "بريش",
  "name_fr" => "Berriche"
   ],
   [
 "id" => 97,
 "wilaya_id" => 4,
 "name_ar" => "بئر الشهداء",
 "name_fr" => "Bir Chouhada"
  ],
   [
"id" => 98,
"wilaya_id" => 4,
"name_ar" => "الضلعة",
"name_fr" => "Dhalaa"
 ],
   [
   "id" => 99,
   "wilaya_id" => 4,
   "name_ar" => "العامرية",
   "name_fr" => "El Amiria"
],
   [
  "id" => 100,
  "wilaya_id" => 4,
  "name_ar" => "البلالة",
  "name_fr" => "El Belala"
   ],
   [
 "id" => 101,
 "wilaya_id" => 4,
 "name_ar" => "الجازية",
 "name_fr" => "El Djazia"
  ],
   [
"id" => 102,
"wilaya_id" => 4,
"name_ar" => "الفجوج بوغرارة سعودي",
"name_fr" => "El Fedjoudj Boughrara Sa"
 ],
   [
   "id" => 103,
   "wilaya_id" => 4,
   "name_ar" => "الحرملية",
   "name_fr" => "El Harmilia"
],
   [
  "id" => 104,
  "wilaya_id" => 4,
  "name_ar" => "فكيرينة",
  "name_fr" => "Fkirina"
   ],
   [
 "id" => 105,
 "wilaya_id" => 4,
 "name_ar" => "هنشير تومغني",
 "name_fr" => "Hanchir Toumghani"
  ],
   [
"id" => 106,
"wilaya_id" => 4,
"name_ar" => "قصر الصباحي",
"name_fr" => "Ksar Sbahi"
 ],
   [
   "id" => 107,
   "wilaya_id" => 4,
   "name_ar" => "مسكيانة",
   "name_fr" => "Meskiana"
],
   [
  "id" => 108,
  "wilaya_id" => 4,
  "name_ar" => "وادي نيني",
  "name_fr" => "Oued Nini"
   ],
   [
 "id" => 109,
 "wilaya_id" => 4,
 "name_ar" => "أولاد قاسم",
 "name_fr" => "Ouled Gacem"
  ],
   [
"id" => 110,
"wilaya_id" => 4,
"name_ar" => "أولاد حملة",
"name_fr" => "Ouled Hamla"
 ],
   [
   "id" => 111,
   "wilaya_id" => 4,
   "name_ar" => "أولاد زواي",
   "name_fr" => "Ouled Zouai"
],
   [
  "id" => 112,
  "wilaya_id" => 4,
  "name_ar" => "أم البواقي",
  "name_fr" => "Oum El Bouaghi"
   ],
   [
 "id" => 113,
 "wilaya_id" => 4,
 "name_ar" => "الرحية",
 "name_fr" => "Rahia"
  ],
   [
"id" => 114,
"wilaya_id" => 4,
"name_ar" => "سيقوس",
"name_fr" => "Sigus"
 ],
   [
   "id" => 115,
   "wilaya_id" => 4,
   "name_ar" => "سوق نعمان",
   "name_fr" => "Souk Naamane"
],
   [
  "id" => 116,
  "wilaya_id" => 4,
  "name_ar" => "الزرق",
  "name_fr" => "Zorg"
   ],
   [
 "id" => 117,
 "wilaya_id" => 5,
 "name_ar" => "عين جاسر",
 "name_fr" => "Ain Djasser"
  ],
   [
"id" => 118,
"wilaya_id" => 5,
"name_ar" => "عين التوتة",
"name_fr" => "Ain Touta"
 ],
   [
   "id" => 119,
   "wilaya_id" => 5,
   "name_ar" => "عين ياقوت",
   "name_fr" => "Ain Yagout"
],
   [
  "id" => 120,
  "wilaya_id" => 5,
  "name_ar" => "أريس",
  "name_fr" => "Arris"
   ],
   [
 "id" => 121,
 "wilaya_id" => 5,
 "name_ar" => "عزيل عبد القادر",
 "name_fr" => "Azil Abedelkader"
  ],
   [
"id" => 122,
"wilaya_id" => 5,
"name_ar" => "بريكة",
"name_fr" => "Barika"
 ],
   [
   "id" => 123,
   "wilaya_id" => 5,
   "name_ar" => "باتنة",
   "name_fr" => "Batna"
],
   [
  "id" => 124,
  "wilaya_id" => 5,
  "name_ar" => "بني فضالة الحقانية",
  "name_fr" => "Beni Foudhala El Hakania"
   ],
   [
 "id" => 125,
 "wilaya_id" => 5,
 "name_ar" => "بيطام",
 "name_fr" => "Bitam"
  ],
   [
"id" => 126,
"wilaya_id" => 5,
"name_ar" => "بولهيلات",
"name_fr" => "Boulhilat"
 ],
   [
   "id" => 127,
   "wilaya_id" => 5,
   "name_ar" => "بومقر",
   "name_fr" => "Boumagueur"
],
   [
  "id" => 128,
  "wilaya_id" => 5,
  "name_ar" => "بومية",
  "name_fr" => "Boumia"
   ],
   [
 "id" => 129,
 "wilaya_id" => 5,
 "name_ar" => "بوزينة",
 "name_fr" => "Bouzina"
  ],
   [
"id" => 130,
"wilaya_id" => 5,
"name_ar" => "الشمرة",
"name_fr" => "Chemora"
 ],
   [
   "id" => 131,
   "wilaya_id" => 5,
   "name_ar" => "شير",
   "name_fr" => "Chir"
],
   [
  "id" => 132,
  "wilaya_id" => 5,
  "name_ar" => "جرمة",
  "name_fr" => "Djerma"
   ],
   [
 "id" => 133,
 "wilaya_id" => 5,
 "name_ar" => "الجزار",
 "name_fr" => "Djezzar"
  ],
   [
"id" => 134,
"wilaya_id" => 5,
"name_ar" => "الحاسي",
"name_fr" => "El Hassi"
 ],
   [
   "id" => 135,
   "wilaya_id" => 5,
   "name_ar" => "المعذر",
   "name_fr" => "El Madher"
],
   [
  "id" => 136,
  "wilaya_id" => 5,
  "name_ar" => "فسديس",
  "name_fr" => "Fesdis"
   ],
   [
 "id" => 137,
 "wilaya_id" => 5,
 "name_ar" => "فم الطوب",
 "name_fr" => "Foum Toub"
  ],
   [
"id" => 138,
"wilaya_id" => 5,
"name_ar" => "غسيرة",
"name_fr" => "Ghassira"
 ],
   [
   "id" => 139,
   "wilaya_id" => 5,
   "name_ar" => "القصبات",
   "name_fr" => "Gosbat"
],
   [
  "id" => 140,
  "wilaya_id" => 5,
  "name_ar" => "القيقبة",
  "name_fr" => "Guigba"
   ],
   [
 "id" => 141,
 "wilaya_id" => 5,
 "name_ar" => "حيدوسة",
 "name_fr" => "Hidoussa"
  ],
   [
"id" => 142,
"wilaya_id" => 5,
"name_ar" => "إشمول",
"name_fr" => "Ichemoul"
 ],
   [
   "id" => 143,
   "wilaya_id" => 5,
   "name_ar" => "إينوغيسن",
   "name_fr" => "Inoughissen"
],
   [
  "id" => 144,
  "wilaya_id" => 5,
  "name_ar" => "كيمل",
  "name_fr" => "Kimmel"
   ],
   [
 "id" => 145,
 "wilaya_id" => 5,
 "name_ar" => "قصر بلزمة",
 "name_fr" => "Ksar Bellezma"
  ],
   [
"id" => 146,
"wilaya_id" => 5,
"name_ar" => "لارباع",
"name_fr" => "Larbaa"
 ],
   [
   "id" => 147,
   "wilaya_id" => 5,
   "name_ar" => "لازرو",
   "name_fr" => "Lazrou"
],
   [
  "id" => 148,
  "wilaya_id" => 5,
  "name_ar" => "لمسان",
  "name_fr" => "Lemcene"
   ],
   [
 "id" => 149,
 "wilaya_id" => 5,
 "name_ar" => "إمدوكل",
 "name_fr" => "M Doukal"
  ],
   [
"id" => 150,
"wilaya_id" => 5,
"name_ar" => "معافة",
"name_fr" => "Maafa"
 ],
   [
   "id" => 151,
   "wilaya_id" => 5,
   "name_ar" => "منعة",
   "name_fr" => "Menaa"
],
   [
  "id" => 152,
  "wilaya_id" => 5,
  "name_ar" => "مروانة",
  "name_fr" => "Merouana"
   ],
   [
 "id" => 153,
 "wilaya_id" => 5,
 "name_ar" => "نقاوس",
 "name_fr" => "N Gaous"
  ],
   [
"id" => 154,
"wilaya_id" => 5,
"name_ar" => "وادي الشعبة",
"name_fr" => "Oued Chaaba"
 ],
   [
   "id" => 155,
   "wilaya_id" => 5,
   "name_ar" => "وادي الماء",
   "name_fr" => "Oued El Ma"
],
   [
  "id" => 156,
  "wilaya_id" => 5,
  "name_ar" => "وادي الطاقة",
  "name_fr" => "Oued Taga"
   ],
   [
 "id" => 157,
 "wilaya_id" => 5,
 "name_ar" => "أولاد عمار",
 "name_fr" => "Ouled Ammar"
  ],
   [
"id" => 158,
"wilaya_id" => 5,
"name_ar" => "أولاد عوف",
"name_fr" => "Ouled Aouf"
 ],
   [
   "id" => 159,
   "wilaya_id" => 5,
   "name_ar" => "أولاد فاضل",
   "name_fr" => "Ouled Fadel"
],
   [
  "id" => 160,
  "wilaya_id" => 5,
  "name_ar" => "أولاد سلام",
  "name_fr" => "Ouled Sellem"
   ],
   [
 "id" => 161,
 "wilaya_id" => 5,
 "name_ar" => "أولاد سي سليمان",
 "name_fr" => "Ouled Si Slimane"
  ],
   [
"id" => 162,
"wilaya_id" => 5,
"name_ar" => "عيون العصافير",
"name_fr" => "Ouyoun El Assafir"
 ],
   [
   "id" => 163,
   "wilaya_id" => 5,
   "name_ar" => "الرحبات",
   "name_fr" => "Rahbat"
],
   [
  "id" => 164,
  "wilaya_id" => 5,
  "name_ar" => "رأس العيون",
  "name_fr" => "Ras El Aioun"
   ],
   [
 "id" => 165,
 "wilaya_id" => 5,
 "name_ar" => "سفيان",
 "name_fr" => "Sefiane"
  ],
   [
"id" => 166,
"wilaya_id" => 5,
"name_ar" => "سقانة",
"name_fr" => "Seggana"
 ],
   [
   "id" => 167,
   "wilaya_id" => 5,
   "name_ar" => "سريانة",
   "name_fr" => "Seriana"
],
   [
  "id" => 168,
  "wilaya_id" => 5,
  "name_ar" => "تكوت",
  "name_fr" => "T Kout"
   ],
   [
 "id" => 169,
 "wilaya_id" => 5,
 "name_ar" => "تالخمت",
 "name_fr" => "Talkhamt"
  ],
   [
"id" => 170,
"wilaya_id" => 5,
"name_ar" => "تاكسلانت",
"name_fr" => "Taxlent"
 ],
   [
   "id" => 171,
   "wilaya_id" => 5,
   "name_ar" => "تازولت",
   "name_fr" => "Tazoult"
],
   [
  "id" => 172,
  "wilaya_id" => 5,
  "name_ar" => "ثنية العابد",
  "name_fr" => "Teniet El Abed"
   ],
   [
 "id" => 173,
 "wilaya_id" => 5,
 "name_ar" => "تيغانمين",
 "name_fr" => "Tighanimine"
  ],
   [
"id" => 174,
"wilaya_id" => 5,
"name_ar" => "تغرغار",
"name_fr" => "Tigharghar"
 ],
   [
   "id" => 175,
   "wilaya_id" => 5,
   "name_ar" => "تيلاطو",
   "name_fr" => "Tilatou"
],
   [
  "id" => 176,
  "wilaya_id" => 5,
  "name_ar" => "تيمقاد",
  "name_fr" => "Timgad"
   ],
   [
 "id" => 177,
 "wilaya_id" => 5,
 "name_ar" => "زانة البيضاء",
 "name_fr" => "Zanet El Beida"
  ],
   [
"id" => 178,
"wilaya_id" => 6,
"name_ar" => "أدكار",
"name_fr" => "Adekar"
 ],
   [
   "id" => 179,
   "wilaya_id" => 6,
   "name_ar" => "أيت رزين",
   "name_fr" => "Ait R'zine"
],
   [
  "id" => 180,
  "wilaya_id" => 6,
  "name_ar" => "أيت إسماعيل",
  "name_fr" => "Ait-Smail"
   ],
   [
 "id" => 181,
 "wilaya_id" => 6,
 "name_ar" => "أقبو",
 "name_fr" => "Akbou"
  ],
   [
"id" => 182,
"wilaya_id" => 6,
"name_ar" => "أكفادو",
"name_fr" => "Akfadou"
 ],
   [
   "id" => 183,
   "wilaya_id" => 6,
   "name_ar" => "أمالو",
   "name_fr" => "Amalou"
],
   [
  "id" => 184,
  "wilaya_id" => 6,
  "name_ar" => "أميزور",
  "name_fr" => "Amizour"
   ],
   [
 "id" => 185,
 "wilaya_id" => 6,
 "name_ar" => "أوقاس",
 "name_fr" => "Aokas"
  ],
   [
"id" => 186,
"wilaya_id" => 6,
"name_ar" => "برباشة",
"name_fr" => "Barbacha"
 ],
   [
   "id" => 187,
   "wilaya_id" => 6,
   "name_ar" => "بجاية",
   "name_fr" => "Bejaia"
],
   [
  "id" => 188,
  "wilaya_id" => 6,
  "name_ar" => "بني جليل",
  "name_fr" => "Beni Djellil"
   ],
   [
 "id" => 189,
 "wilaya_id" => 6,
 "name_ar" => "بني كسيلة",
 "name_fr" => "Beni K'sila"
  ],
   [
"id" => 190,
"wilaya_id" => 6,
"name_ar" => "بني مليكش",
"name_fr" => "Beni-Mallikeche"
 ],
   [
   "id" => 191,
   "wilaya_id" => 6,
   "name_ar" => "بني معوش",
   "name_fr" => "Benimaouche"
],
   [
  "id" => 192,
  "wilaya_id" => 6,
  "name_ar" => "بو جليل",
  "name_fr" => "Boudjellil"
   ],
   [
 "id" => 193,
 "wilaya_id" => 6,
 "name_ar" => "بوحمزة",
 "name_fr" => "Bouhamza"
  ],
   [
"id" => 194,
"wilaya_id" => 6,
"name_ar" => "بوخليفة",
"name_fr" => "Boukhelifa"
 ],
   [
   "id" => 195,
   "wilaya_id" => 6,
   "name_ar" => "شلاطة",
   "name_fr" => "Chellata"
],
   [
  "id" => 196,
  "wilaya_id" => 6,
  "name_ar" => "شميني",
  "name_fr" => "Chemini"
   ],
   [
 "id" => 197,
 "wilaya_id" => 6,
 "name_ar" => "درقينة",
 "name_fr" => "Darguina"
  ],
   [
"id" => 198,
"wilaya_id" => 6,
"name_ar" => "ذراع القايد",
"name_fr" => "Dra El Caid"
 ],
   [
   "id" => 199,
   "wilaya_id" => 6,
   "name_ar" => "الفلاي",
   "name_fr" => "Leflaye"
],
   [
  "id" => 200,
  "wilaya_id" => 6,
  "name_ar" => "القصر",
  "name_fr" => "El Kseur"
   ],
   [
 "id" => 201,
 "wilaya_id" => 6,
 "name_ar" => "فناية الماثن",
 "name_fr" => "Fenaia Il Maten"
  ],
   [
"id" => 202,
"wilaya_id" => 6,
"name_ar" => "فرعون",
"name_fr" => "Feraoun"
 ],
   [
   "id" => 203,
   "wilaya_id" => 6,
   "name_ar" => "أوزلاقن",
   "name_fr" => "Ouzellaguen"
],
   [
  "id" => 204,
  "wilaya_id" => 6,
  "name_ar" => "إغيل علي",
  "name_fr" => "Ighil-Ali"
   ],
   [
 "id" => 205,
 "wilaya_id" => 6,
 "name_ar" => "اغرم",
 "name_fr" => "Ighram"
  ],
   [
"id" => 206,
"wilaya_id" => 6,
"name_ar" => "كنديرة",
"name_fr" => "Kendira"
 ],
   [
   "id" => 207,
   "wilaya_id" => 6,
   "name_ar" => "خراطة",
   "name_fr" => "Kherrata"
],
   [
  "id" => 208,
  "wilaya_id" => 6,
  "name_ar" => "مسيسنة",
  "name_fr" => "M'cisna"
   ],
   [
 "id" => 209,
 "wilaya_id" => 6,
 "name_ar" => "مالبو",
 "name_fr" => "Melbou"
  ],
   [
"id" => 210,
"wilaya_id" => 6,
"name_ar" => "وادي غير",
"name_fr" => "Oued Ghir"
 ],
   [
   "id" => 211,
   "wilaya_id" => 6,
   "name_ar" => "صدوق",
   "name_fr" => "Seddouk"
],
   [
  "id" => 212,
  "wilaya_id" => 6,
  "name_ar" => "سيدي عياد",
  "name_fr" => "Sidi Ayad"
   ],
   [
 "id" => 213,
 "wilaya_id" => 6,
 "name_ar" => "سيدي عيش",
 "name_fr" => "Sidi-Aich"
  ],
   [
"id" => 214,
"wilaya_id" => 6,
"name_ar" => "سمعون",
"name_fr" => "Smaoun"
 ],
   [
   "id" => 215,
   "wilaya_id" => 6,
   "name_ar" => "سوق لإثنين",
   "name_fr" => "Souk El Tenine"
],
   [
  "id" => 216,
  "wilaya_id" => 6,
  "name_ar" => "سوق اوفلا",
  "name_fr" => "Souk Oufella"
   ],
   [
 "id" => 217,
 "wilaya_id" => 6,
 "name_ar" => "تالة حمزة",
 "name_fr" => "Tala Hamza"
  ],
   [
"id" => 218,
"wilaya_id" => 6,
"name_ar" => "تامقرة",
"name_fr" => "Tamokra"
 ],
   [
   "id" => 219,
   "wilaya_id" => 6,
   "name_ar" => "تامريجت",
   "name_fr" => "Tamridjet"
],
   [
  "id" => 220,
  "wilaya_id" => 6,
  "name_ar" => "تاوريرت إغيل",
  "name_fr" => "Taourit Ighil"
   ],
   [
 "id" => 221,
 "wilaya_id" => 6,
 "name_ar" => "تاسكريوت",
 "name_fr" => "Taskriout"
  ],
   [
"id" => 222,
"wilaya_id" => 6,
"name_ar" => "تازمالت",
"name_fr" => "Tazmalt"
 ],
   [
   "id" => 223,
   "wilaya_id" => 6,
   "name_ar" => "طيبان",
   "name_fr" => "Tibane"
],
   [
  "id" => 224,
  "wilaya_id" => 6,
  "name_ar" => "تيشي",
  "name_fr" => "Tichy"
   ],
   [
 "id" => 225,
 "wilaya_id" => 6,
 "name_ar" => "تيفرة",
 "name_fr" => "Tifra"
  ],
   [
"id" => 226,
"wilaya_id" => 6,
"name_ar" => "تيمزريت",
"name_fr" => "Timezrit"
 ],
   [
   "id" => 227,
   "wilaya_id" => 6,
   "name_ar" => "تينبدار",
   "name_fr" => "Tinebdar"
],
   [
  "id" => 228,
  "wilaya_id" => 6,
  "name_ar" => "تيزي نبربر",
  "name_fr" => "Tizi-N'berber"
   ],
   [
 "id" => 229,
 "wilaya_id" => 6,
 "name_ar" => "توجة",
 "name_fr" => "Toudja"
  ],
   [
"id" => 230,
"wilaya_id" => 7,
"name_ar" => "عين الناقة",
"name_fr" => "Ain Naga"
 ],
   [
   "id" => 231,
   "wilaya_id" => 7,
   "name_ar" => "عين زعطوط",
   "name_fr" => "Ain Zaatout"
],
   [
  "id" => 232,
  "wilaya_id" => 51,
  "name_ar" => "بسباس",
  "name_fr" => "Besbes"
   ],
   [
 "id" => 233,
 "wilaya_id" => 7,
 "name_ar" => "بسكرة",
 "name_fr" => "Biskra"
  ],
   [
"id" => 234,
"wilaya_id" => 7,
"name_ar" => "برج بن عزوز",
"name_fr" => "Bordj Ben Azzouz"
 ],
   [
   "id" => 235,
   "wilaya_id" => 7,
   "name_ar" => "بوشقرون",
   "name_fr" => "Bouchakroun"
],
   [
  "id" => 236,
  "wilaya_id" => 7,
  "name_ar" => "برانيس",
  "name_fr" => "Branis"
   ],
   [
 "id" => 237,
 "wilaya_id" => 51,
 "name_ar" => "الشعيبة",
 "name_fr" => "Chaiba"
  ],
   [
"id" => 238,
"wilaya_id" => 7,
"name_ar" => "شتمة",
"name_fr" => "Chetma"
 ],
   [
   "id" => 239,
   "wilaya_id" => 7,
   "name_ar" => "جمورة",
   "name_fr" => "Djemorah"
],
   [
  "id" => 240,
  "wilaya_id" => 51,
  "name_ar" => "الدوسن",
  "name_fr" => "Doucen"
   ],
   [
 "id" => 241,
 "wilaya_id" => 7,
 "name_ar" => "الفيض",
 "name_fr" => "El Feidh"
  ],
   [
"id" => 242,
"wilaya_id" => 7,
"name_ar" => "الغروس",
"name_fr" => "El Ghrous"
 ],
   [
   "id" => 243,
   "wilaya_id" => 7,
   "name_ar" => "الحاجب",
   "name_fr" => "El Hadjab"
],
   [
  "id" => 244,
  "wilaya_id" => 7,
  "name_ar" => "الحوش",
  "name_fr" => "El Haouch"
   ],
   [
 "id" => 245,
 "wilaya_id" => 7,
 "name_ar" => "القنطرة",
 "name_fr" => "El Kantara"
  ],
   [
"id" => 246,
"wilaya_id" => 7,
"name_ar" => "الوطاية",
"name_fr" => "El Outaya"
 ],
   [
   "id" => 247,
   "wilaya_id" => 7,
   "name_ar" => "فوغالة",
   "name_fr" => "Foughala"
],
   [
  "id" => 248,
  "wilaya_id" => 7,
  "name_ar" => "خنقة سيدي ناجي",
  "name_fr" => "Khenguet Sidi Nadji"
   ],
   [
 "id" => 249,
 "wilaya_id" => 7,
 "name_ar" => "ليشانة",
 "name_fr" => "Lichana"
  ],
   [
"id" => 250,
"wilaya_id" => 7,
"name_ar" => "ليوة",
"name_fr" => "Lioua"
 ],
   [
   "id" => 251,
   "wilaya_id" => 7,
   "name_ar" => "مشونش",
   "name_fr" => "M'chouneche"
],
   [
  "id" => 252,
  "wilaya_id" => 7,
  "name_ar" => "مخادمة",
  "name_fr" => "Mekhadma"
   ],
   [
 "id" => 253,
 "wilaya_id" => 7,
 "name_ar" => "المزيرعة",
 "name_fr" => "Meziraa"
  ],
   [
"id" => 254,
"wilaya_id" => 7,
"name_ar" => "مليلي",
"name_fr" => "M'lili"
 ],
   [
   "id" => 255,
   "wilaya_id" => 51,
   "name_ar" => "أولاد جلال",
   "name_fr" => "Ouled Djellal"
],
   [
  "id" => 256,
  "wilaya_id" => 7,
  "name_ar" => "أوماش",
  "name_fr" => "Oumache"
   ],
   [
 "id" => 257,
 "wilaya_id" => 7,
 "name_ar" => "أورلال",
 "name_fr" => "Ourlal"
  ],
   [
"id" => 258,
"wilaya_id" => 51,
"name_ar" => "رأس الميعاد",
"name_fr" => "Ras El Miad"
 ],
   [
   "id" => 259,
   "wilaya_id" => 51,
   "name_ar" => "سيدي  خالد",
   "name_fr" => "Sidi Khaled"
],
   [
  "id" => 260,
  "wilaya_id" => 7,
  "name_ar" => "سيدي عقبة",
  "name_fr" => "Sidi Okba"
   ],
   [
 "id" => 261,
 "wilaya_id" => 7,
 "name_ar" => "طولقة",
 "name_fr" => "Tolga"
  ],
   [
"id" => 262,
"wilaya_id" => 7,
"name_ar" => "زريبة الوادي",
"name_fr" => "Zeribet El Oued"
 ],
   [
   "id" => 263,
   "wilaya_id" => 8,
   "name_ar" => "العبادلة",
   "name_fr" => "Abadla"
],
   [
  "id" => 264,
  "wilaya_id" => 8,
  "name_ar" => "بشار",
  "name_fr" => "Bechar"
   ],
   [
 "id" => 265,
 "wilaya_id" => 52,
 "name_ar" => "بني عباس",
 "name_fr" => "Beni-Abbes"
  ],
   [
"id" => 266,
"wilaya_id" => 52,
"name_ar" => "بن يخلف",
"name_fr" => "Beni-Ikhlef"
 ],
   [
   "id" => 267,
   "wilaya_id" => 8,
   "name_ar" => "بني ونيف",
   "name_fr" => "Beni-Ounif"
],
   [
  "id" => 268,
  "wilaya_id" => 8,
  "name_ar" => "بوكايس",
  "name_fr" => "Boukais"
   ],
   [
 "id" => 269,
 "wilaya_id" => 52,
 "name_ar" => "الواتة",
 "name_fr" => "El Ouata"
  ],
   [
"id" => 270,
"wilaya_id" => 8,
"name_ar" => "عرق فراج",
"name_fr" => "Erg-Ferradj"
 ],
   [
   "id" => 271,
   "wilaya_id" => 52,
   "name_ar" => "إقلي",
   "name_fr" => "Igli"
],
   [
  "id" => 272,
  "wilaya_id" => 8,
  "name_ar" => "القنادسة",
  "name_fr" => "Kenadsa"
   ],
   [
 "id" => 273,
 "wilaya_id" => 52,
 "name_ar" => "كرزاز",
 "name_fr" => "Kerzaz"
  ],
   [
"id" => 274,
"wilaya_id" => 52,
"name_ar" => "القصابي",
"name_fr" => "Ksabi"
 ],
   [
   "id" => 275,
   "wilaya_id" => 8,
   "name_ar" => "لحمر",
   "name_fr" => "Lahmar"
],
   [
  "id" => 276,
  "wilaya_id" => 8,
  "name_ar" => "مشرع هواري بومدين",
  "name_fr" => "Machraa-Houari-Boumediene"
   ],
   [
 "id" => 277,
 "wilaya_id" => 8,
 "name_ar" => "المريجة",
 "name_fr" => "Meridja"
  ],
   [
"id" => 278,
"wilaya_id" => 8,
"name_ar" => "موغل",
"name_fr" => "Mogheul"
 ],
   [
   "id" => 279,
   "wilaya_id" => 52,
   "name_ar" => "أولاد خضير",
   "name_fr" => "Ouled-Khodeir"
],
   [
  "id" => 280,
  "wilaya_id" => 8,
  "name_ar" => "تبلبالة",
  "name_fr" => "Tabelbala"
   ],
   [
 "id" => 281,
 "wilaya_id" => 8,
 "name_ar" => "تاغيت",
 "name_fr" => "Taghit"
  ],
   [
"id" => 282,
"wilaya_id" => 52,
"name_ar" => "تامترت",
"name_fr" => "Tamtert"
 ],
   [
   "id" => 283,
   "wilaya_id" => 52,
   "name_ar" => "تيمودي",
   "name_fr" => "Timoudi"
],
   [
  "id" => 284,
  "wilaya_id" => 9,
  "name_ar" => "عين الرمانة",
  "name_fr" => "Ain Romana"
   ],
   [
 "id" => 285,
 "wilaya_id" => 9,
 "name_ar" => "بني مراد",
 "name_fr" => "Beni Mered"
  ],
   [
"id" => 286,
"wilaya_id" => 9,
"name_ar" => "بني تامو",
"name_fr" => "Beni-Tamou"
 ],
   [
   "id" => 287,
   "wilaya_id" => 9,
   "name_ar" => "بن خليل",
   "name_fr" => "Benkhelil"
],
   [
  "id" => 288,
  "wilaya_id" => 9,
  "name_ar" => "البليدة",
  "name_fr" => "Blida"
   ],
   [
 "id" => 289,
 "wilaya_id" => 9,
 "name_ar" => "بوعرفة",
 "name_fr" => "Bouarfa"
  ],
   [
"id" => 290,
"wilaya_id" => 9,
"name_ar" => "بوفاريك",
"name_fr" => "Boufarik"
 ],
   [
   "id" => 291,
   "wilaya_id" => 9,
   "name_ar" => "بوقرة",
   "name_fr" => "Bougara"
],
   [
  "id" => 292,
  "wilaya_id" => 9,
  "name_ar" => "بوعينان",
  "name_fr" => "Bouinan"
   ],
   [
 "id" => 293,
 "wilaya_id" => 9,
 "name_ar" => "الشبلي",
 "name_fr" => "Chebli"
  ],
   [
"id" => 294,
"wilaya_id" => 9,
"name_ar" => "الشفة",
"name_fr" => "Chiffa"
 ],
   [
   "id" => 295,
   "wilaya_id" => 9,
   "name_ar" => "الشريعة",
   "name_fr" => "Chrea"
],
   [
  "id" => 296,
  "wilaya_id" => 9,
  "name_ar" => "جبابرة",
  "name_fr" => "Djebabra"
   ],
   [
 "id" => 297,
 "wilaya_id" => 9,
 "name_ar" => "العفرون",
 "name_fr" => "El-Affroun"
  ],
   [
"id" => 298,
"wilaya_id" => 9,
"name_ar" => "قرواو",
"name_fr" => "Guerrouaou"
 ],
   [
   "id" => 299,
   "wilaya_id" => 9,
   "name_ar" => "حمام ملوان",
   "name_fr" => "Hammam Elouane"
],
   [
  "id" => 300,
  "wilaya_id" => 9,
  "name_ar" => "الأربعاء",
  "name_fr" => "Larbaa"
   ],
   [
 "id" => 301,
 "wilaya_id" => 9,
 "name_ar" => "مفتاح",
 "name_fr" => "Meftah"
  ],
   [
"id" => 302,
"wilaya_id" => 9,
"name_ar" => "موزاية",
"name_fr" => "Mouzaia"
 ],
   [
   "id" => 303,
   "wilaya_id" => 9,
   "name_ar" => "وادي جر",
   "name_fr" => "Oued  Djer"
],
   [
  "id" => 304,
  "wilaya_id" => 9,
  "name_ar" => "وادي العلايق",
  "name_fr" => "Oued El Alleug"
   ],
   [
 "id" => 305,
 "wilaya_id" => 9,
 "name_ar" => "اولاد سلامة",
 "name_fr" => "Ouled Slama"
  ],
   [
"id" => 306,
"wilaya_id" => 9,
"name_ar" => "أولاد يعيش",
"name_fr" => "Ouled Yaich"
 ],
   [
   "id" => 307,
   "wilaya_id" => 9,
   "name_ar" => "صوحان",
   "name_fr" => "Souhane"
],
   [
  "id" => 308,
  "wilaya_id" => 9,
  "name_ar" => "الصومعة",
  "name_fr" => "Soumaa"
   ],
   [
 "id" => 309,
 "wilaya_id" => 10,
 "name_ar" => "أغبالو",
 "name_fr" => "Aghbalou"
  ],
   [
"id" => 310,
"wilaya_id" => 10,
"name_ar" => "أهل القصر",
"name_fr" => "Ahl El Ksar"
 ],
   [
   "id" => 311,
   "wilaya_id" => 10,
   "name_ar" => "عين الحجر",
   "name_fr" => "Ain El Hadjar"
],
   [
  "id" => 312,
  "wilaya_id" => 10,
  "name_ar" => "عين العلوي",
  "name_fr" => "Ain Laloui"
   ],
   [
 "id" => 313,
 "wilaya_id" => 10,
 "name_ar" => "عين الترك",
 "name_fr" => "Ain Turk"
  ],
   [
"id" => 314,
"wilaya_id" => 10,
"name_ar" => "عين بسام",
"name_fr" => "Ain-Bessem"
 ],
   [
   "id" => 315,
   "wilaya_id" => 10,
   "name_ar" => "أيت لعزيز",
   "name_fr" => "Ait Laaziz"
],
   [
  "id" => 316,
  "wilaya_id" => 10,
  "name_ar" => "أعمر",
  "name_fr" => "Aomar"
   ],
   [
 "id" => 317,
 "wilaya_id" => 10,
 "name_ar" => "بشلول",
 "name_fr" => "Bechloul"
  ],
   [
"id" => 318,
"wilaya_id" => 10,
"name_ar" => "بئر غبالو",
"name_fr" => "Bir Ghbalou"
 ],
   [
   "id" => 319,
   "wilaya_id" => 10,
   "name_ar" => "برج أوخريص",
   "name_fr" => "Bordj Okhriss"
],
   [
  "id" => 320,
  "wilaya_id" => 10,
  "name_ar" => "بودربالة",
  "name_fr" => "Bouderbala"
   ],
   [
 "id" => 321,
 "wilaya_id" => 10,
 "name_ar" => "البويرة",
 "name_fr" => "Bouira"
  ],
   [
"id" => 322,
"wilaya_id" => 10,
"name_ar" => "بوكرم",
"name_fr" => "Boukram"
 ],
   [
   "id" => 323,
   "wilaya_id" => 10,
   "name_ar" => "شرفة",
   "name_fr" => "Chorfa"
],
   [
  "id" => 324,
  "wilaya_id" => 10,
  "name_ar" => "الدشمية",
  "name_fr" => "Dechmia"
   ],
   [
 "id" => 325,
 "wilaya_id" => 10,
 "name_ar" => "ديرة",
 "name_fr" => "Dirah"
  ],
   [
"id" => 326,
"wilaya_id" => 10,
"name_ar" => "جباحية",
"name_fr" => "Djebahia"
 ],
   [
   "id" => 327,
   "wilaya_id" => 10,
   "name_ar" => "العجيبة",
   "name_fr" => "El Adjiba"
],
   [
  "id" => 328,
  "wilaya_id" => 10,
  "name_ar" => "الأسنام",
  "name_fr" => "El Asnam"
   ],
   [
 "id" => 329,
 "wilaya_id" => 10,
 "name_ar" => "الهاشمية",
 "name_fr" => "El Hachimia"
  ],
   [
"id" => 330,
"wilaya_id" => 10,
"name_ar" => "الخبوزية",
"name_fr" => "El Khabouzia"
 ],
   [
   "id" => 331,
   "wilaya_id" => 10,
   "name_ar" => "الحاكمية",
   "name_fr" => "El-Hakimia"
],
   [
  "id" => 332,
  "wilaya_id" => 10,
  "name_ar" => "المقراني",
  "name_fr" => "El-Mokrani"
   ],
   [
 "id" => 333,
 "wilaya_id" => 10,
 "name_ar" => "قرومة",
 "name_fr" => "Guerrouma"
  ],
   [
"id" => 334,
"wilaya_id" => 10,
"name_ar" => "الحجرة الزرقاء",
"name_fr" => "Hadjera Zerga"
 ],
   [
   "id" => 335,
   "wilaya_id" => 10,
   "name_ar" => "حيزر",
   "name_fr" => "Haizer"
],
   [
  "id" => 336,
  "wilaya_id" => 10,
  "name_ar" => "حنيف",
  "name_fr" => "Hanif"
   ],
   [
 "id" => 337,
 "wilaya_id" => 10,
 "name_ar" => "قادرية",
 "name_fr" => "Kadiria"
  ],
   [
"id" => 338,
"wilaya_id" => 10,
"name_ar" => "الأخضرية",
"name_fr" => "Lakhdaria"
 ],
   [
   "id" => 339,
   "wilaya_id" => 10,
   "name_ar" => "أمشدالة",
   "name_fr" => "M Chedallah"
],
   [
  "id" => 340,
  "wilaya_id" => 10,
  "name_ar" => "معلة",
  "name_fr" => "Maala"
   ],
   [
 "id" => 341,
 "wilaya_id" => 10,
 "name_ar" => "المعمورة",
 "name_fr" => "Maamora"
  ],
   [
"id" => 342,
"wilaya_id" => 10,
"name_ar" => "مزدور",
"name_fr" => "Mezdour"
 ],
   [
   "id" => 343,
   "wilaya_id" => 10,
   "name_ar" => "وادي البردي",
   "name_fr" => "Oued El Berdi"
],
   [
  "id" => 344,
  "wilaya_id" => 10,
  "name_ar" => "أولاد راشد",
  "name_fr" => "Ouled Rached"
   ],
   [
 "id" => 345,
 "wilaya_id" => 10,
 "name_ar" => "روراوة",
 "name_fr" => "Raouraoua"
  ],
   [
"id" => 346,
"wilaya_id" => 10,
"name_ar" => "ريدان",
"name_fr" => "Ridane"
 ],
   [
   "id" => 347,
   "wilaya_id" => 10,
   "name_ar" => "سحاريج",
   "name_fr" => "Saharidj"
],
   [
  "id" => 348,
  "wilaya_id" => 10,
  "name_ar" => "سوق الخميس",
  "name_fr" => "Souk El Khemis"
   ],
   [
 "id" => 349,
 "wilaya_id" => 10,
 "name_ar" => "سور الغزلان",
 "name_fr" => "Sour El Ghozlane"
  ],
   [
"id" => 350,
"wilaya_id" => 10,
"name_ar" => "تاغزوت",
"name_fr" => "Taghzout"
 ],
   [
   "id" => 351,
   "wilaya_id" => 10,
   "name_ar" => "تاقديت",
   "name_fr" => "Taguedite"
],
   [
  "id" => 352,
  "wilaya_id" => 10,
  "name_ar" => "آث  منصور",
  "name_fr" => "Ath Mansour"
   ],
   [
 "id" => 353,
 "wilaya_id" => 10,
 "name_ar" => "زبربر",
 "name_fr" => "Z'barbar (El Isseri )"
  ],
   [
"id" => 354,
"wilaya_id" => 11,
"name_ar" => "ابلسة",
"name_fr" => "Abelsa"
 ],
   [
   "id" => 355,
   "wilaya_id" => 11,
   "name_ar" => "عين امقل",
   "name_fr" => "Ain Amguel"
],
   [
  "id" => 356,
  "wilaya_id" => 54,
  "name_ar" => "عين قزام",
  "name_fr" => "Ain Guezzam"
   ],
   [
 "id" => 357,
 "wilaya_id" => 53,
 "name_ar" => "عين صالح",
 "name_fr" => "Ain Salah"
  ],
   [
"id" => 358,
"wilaya_id" => 53,
"name_ar" => "فقارة الزوى",
"name_fr" => "Foggaret Ezzoua"
 ],
   [
   "id" => 359,
   "wilaya_id" => 11,
   "name_ar" => "أدلس",
   "name_fr" => "Idles"
],
   [
  "id" => 360,
  "wilaya_id" => 53,
  "name_ar" => "إينغر",
  "name_fr" => "Inghar"
   ],
   [
 "id" => 361,
 "wilaya_id" => 11,
 "name_ar" => "تمنراست",
 "name_fr" => "Tamanrasset"
  ],
   [
"id" => 362,
"wilaya_id" => 11,
"name_ar" => "تاظروك",
"name_fr" => "Tazrouk"
 ],
   [
   "id" => 363,
   "wilaya_id" => 54,
   "name_ar" => "تين زواتين",
   "name_fr" => "Tin Zouatine"
],
   [
  "id" => 364,
  "wilaya_id" => 12,
  "name_ar" => "عين الزرقاء",
  "name_fr" => "Ain Zerga"
   ],
   [
 "id" => 365,
 "wilaya_id" => 12,
 "name_ar" => "بجن",
 "name_fr" => "Bedjene"
  ],
   [
"id" => 366,
"wilaya_id" => 12,
"name_ar" => "بكارية",
"name_fr" => "Bekkaria"
 ],
   [
   "id" => 367,
   "wilaya_id" => 12,
   "name_ar" => "بئر الذهب",
   "name_fr" => "Bir Dheheb"
],
   [
  "id" => 368,
  "wilaya_id" => 12,
  "name_ar" => "بئر مقدم",
  "name_fr" => "Bir Mokkadem"
   ],
   [
 "id" => 369,
 "wilaya_id" => 12,
 "name_ar" => "بئر العاتر",
 "name_fr" => "Bir-El-Ater"
  ],
   [
"id" => 370,
"wilaya_id" => 12,
"name_ar" => "بوخضرة",
"name_fr" => "Boukhadra"
 ],
   [
   "id" => 371,
   "wilaya_id" => 12,
   "name_ar" => "بولحاف الدير",
   "name_fr" => "Boulhaf Dyr"
],
   [
  "id" => 372,
  "wilaya_id" => 12,
  "name_ar" => "الشريعة",
  "name_fr" => "Cheria"
   ],
   [
 "id" => 373,
 "wilaya_id" => 12,
 "name_ar" => "الكويف",
 "name_fr" => "El Kouif"
  ],
   [
"id" => 374,
"wilaya_id" => 12,
"name_ar" => "الماء الابيض",
"name_fr" => "El Malabiod"
 ],
   [
   "id" => 375,
   "wilaya_id" => 12,
   "name_ar" => "المريج",
   "name_fr" => "El Meridj"
],
   [
  "id" => 376,
  "wilaya_id" => 12,
  "name_ar" => "المزرعة",
  "name_fr" => "El Mezeraa"
   ],
   [
 "id" => 377,
 "wilaya_id" => 12,
 "name_ar" => "العقلة",
 "name_fr" => "El Ogla"
  ],
   [
"id" => 378,
"wilaya_id" => 12,
"name_ar" => "العقلة المالحة",
"name_fr" => "El Ogla El Malha"
 ],
   [
   "id" => 379,
   "wilaya_id" => 12,
   "name_ar" => "العوينات",
   "name_fr" => "El-Aouinet"
],
   [
  "id" => 380,
  "wilaya_id" => 12,
  "name_ar" => "الحويجبات",
  "name_fr" => "El-Houidjbet"
   ],
   [
 "id" => 381,
 "wilaya_id" => 12,
 "name_ar" => "فركان",
 "name_fr" => "Ferkane"
  ],
   [
"id" => 382,
"wilaya_id" => 12,
"name_ar" => "قريقر",
"name_fr" => "Guorriguer"
 ],
   [
   "id" => 383,
   "wilaya_id" => 12,
   "name_ar" => "الحمامات",
   "name_fr" => "Hammamet"
],
   [
  "id" => 384,
  "wilaya_id" => 12,
  "name_ar" => "مرسط",
  "name_fr" => "Morsott"
   ],
   [
 "id" => 385,
 "wilaya_id" => 12,
 "name_ar" => "نقرين",
 "name_fr" => "Negrine"
  ],
   [
"id" => 386,
"wilaya_id" => 12,
"name_ar" => "الونزة",
"name_fr" => "Ouenza"
 ],
   [
   "id" => 387,
   "wilaya_id" => 12,
   "name_ar" => "أم علي",
   "name_fr" => "Oum Ali"
],
   [
  "id" => 388,
  "wilaya_id" => 12,
  "name_ar" => "صفصاف الوسرى",
  "name_fr" => "Saf Saf El Ouesra"
   ],
   [
 "id" => 389,
 "wilaya_id" => 12,
 "name_ar" => "سطح قنطيس",
 "name_fr" => "Stah Guentis"
  ],
   [
"id" => 390,
"wilaya_id" => 12,
"name_ar" => "تبسة",
"name_fr" => "Tebessa"
 ],
   [
   "id" => 391,
   "wilaya_id" => 12,
   "name_ar" => "ثليجان",
   "name_fr" => "Telidjen"
],
   [
  "id" => 392,
  "wilaya_id" => 13,
  "name_ar" => "عين فتاح",
  "name_fr" => "Ain Fetah"
   ],
   [
 "id" => 393,
 "wilaya_id" => 13,
 "name_ar" => "عين فزة",
 "name_fr" => "Ain Fezza"
  ],
   [
"id" => 394,
"wilaya_id" => 13,
"name_ar" => "عين غرابة",
"name_fr" => "Ain Ghoraba"
 ],
   [
   "id" => 395,
   "wilaya_id" => 13,
   "name_ar" => "عين الكبيرة",
   "name_fr" => "Ain Kebira"
],
   [
  "id" => 396,
  "wilaya_id" => 13,
  "name_ar" => "عين النحالة",
  "name_fr" => "Ain Nehala"
   ],
   [
 "id" => 397,
 "wilaya_id" => 13,
 "name_ar" => "عين تالوت",
 "name_fr" => "Ain Tellout"
  ],
   [
"id" => 398,
"wilaya_id" => 13,
"name_ar" => "عين يوسف",
"name_fr" => "Ain Youcef"
 ],
   [
   "id" => 399,
   "wilaya_id" => 13,
   "name_ar" => "عمير",
   "name_fr" => "Amieur"
],
   [
  "id" => 400,
  "wilaya_id" => 13,
  "name_ar" => "باب العسة",
  "name_fr" => "Bab El Assa"
   ],
   [
 "id" => 401,
 "wilaya_id" => 13,
 "name_ar" => "بني بهدل",
 "name_fr" => "Beni Bahdel"
  ],
   [
"id" => 402,
"wilaya_id" => 13,
"name_ar" => "بني بوسعيد",
"name_fr" => "Beni Boussaid"
 ],
   [
   "id" => 403,
   "wilaya_id" => 13,
   "name_ar" => "بني خلاد",
   "name_fr" => "Beni Khellad"
],
   [
  "id" => 404,
  "wilaya_id" => 13,
  "name_ar" => "بني مستر",
  "name_fr" => "Beni Mester"
   ],
   [
 "id" => 405,
 "wilaya_id" => 13,
 "name_ar" => "بني وارسوس",
 "name_fr" => "Beni Ouarsous"
  ],
   [
"id" => 406,
"wilaya_id" => 13,
"name_ar" => "بني صميل",
"name_fr" => "Beni Smiel"
 ],
   [
   "id" => 407,
   "wilaya_id" => 13,
   "name_ar" => "بني سنوس",
   "name_fr" => "Beni Snous"
],
   [
  "id" => 408,
  "wilaya_id" => 13,
  "name_ar" => "بن سكران",
  "name_fr" => "Bensekrane"
   ],
   [
 "id" => 409,
 "wilaya_id" => 13,
 "name_ar" => "بوحلو",
 "name_fr" => "Bouhlou"
  ],
   [
"id" => 410,
"wilaya_id" => 13,
"name_ar" => "البويهي",
"name_fr" => "Bouihi"
 ],
   [
   "id" => 411,
   "wilaya_id" => 13,
   "name_ar" => "شتوان",
   "name_fr" => "Chetouane"
],
   [
  "id" => 412,
  "wilaya_id" => 13,
  "name_ar" => "دار يغمراسن",
  "name_fr" => "Dar Yaghmoracen"
   ],
   [
 "id" => 413,
 "wilaya_id" => 13,
 "name_ar" => "جبالة",
 "name_fr" => "Djebala"
  ],
   [
"id" => 414,
"wilaya_id" => 13,
"name_ar" => "العريشة",
"name_fr" => "El Aricha"
 ],
   [
   "id" => 415,
   "wilaya_id" => 13,
   "name_ar" => "العزايل",
   "name_fr" => "Azail"
],
   [
  "id" => 416,
  "wilaya_id" => 13,
  "name_ar" => "الفحول",
  "name_fr" => "El Fehoul"
   ],
   [
 "id" => 417,
 "wilaya_id" => 13,
 "name_ar" => "القور",
 "name_fr" => "El Gor"
  ],
   [
"id" => 418,
"wilaya_id" => 13,
"name_ar" => "فلاوسن",
"name_fr" => "Fellaoucene"
 ],
   [
   "id" => 419,
   "wilaya_id" => 13,
   "name_ar" => "الغزوات",
   "name_fr" => "Ghazaouet"
],
   [
  "id" => 420,
  "wilaya_id" => 13,
  "name_ar" => "حمام بوغرارة",
  "name_fr" => "Hammam Boughrara"
   ],
   [
 "id" => 421,
 "wilaya_id" => 13,
 "name_ar" => "الحناية",
 "name_fr" => "Hennaya"
  ],
   [
"id" => 422,
"wilaya_id" => 13,
"name_ar" => "هنين",
"name_fr" => "Honnaine"
 ],
   [
   "id" => 423,
   "wilaya_id" => 13,
   "name_ar" => "مغنية",
   "name_fr" => "Maghnia"
],
   [
  "id" => 424,
  "wilaya_id" => 13,
  "name_ar" => "منصورة",
  "name_fr" => "Mansourah"
   ],
   [
 "id" => 425,
 "wilaya_id" => 13,
 "name_ar" => "مرسى بن مهيدي",
 "name_fr" => "Marsa Ben M'hidi"
  ],
   [
"id" => 426,
"wilaya_id" => 13,
"name_ar" => "مسيردة الفواقة",
"name_fr" => "M'sirda Fouaga"
 ],
   [
   "id" => 427,
   "wilaya_id" => 13,
   "name_ar" => "ندرومة",
   "name_fr" => "Nedroma"
],
   [
  "id" => 428,
  "wilaya_id" => 13,
  "name_ar" => "وادي الخضر",
  "name_fr" => "Oued Lakhdar"
   ],
   [
 "id" => 429,
 "wilaya_id" => 13,
 "name_ar" => "أولاد ميمون",
 "name_fr" => "Ouled Mimoun"
  ],
   [
"id" => 430,
"wilaya_id" => 13,
"name_ar" => "أولاد رياح",
"name_fr" => "Ouled Riyah"
 ],
   [
   "id" => 431,
   "wilaya_id" => 13,
   "name_ar" => "الرمشي",
   "name_fr" => "Remchi"
],
   [
  "id" => 432,
  "wilaya_id" => 13,
  "name_ar" => "صبرة",
  "name_fr" => "Sabra"
   ],
   [
 "id" => 433,
 "wilaya_id" => 13,
 "name_ar" => "سبعة شيوخ",
 "name_fr" => "Sebbaa Chioukh"
  ],
   [
"id" => 434,
"wilaya_id" => 13,
"name_ar" => "سبدو",
"name_fr" => "Sebdou"
 ],
   [
   "id" => 435,
   "wilaya_id" => 13,
   "name_ar" => "سيدي العبدلي",
   "name_fr" => "Sidi Abdelli"
],
   [
  "id" => 436,
  "wilaya_id" => 13,
  "name_ar" => "سيدي الجيلالي",
  "name_fr" => "Sidi Djillali"
   ],
   [
 "id" => 437,
 "wilaya_id" => 13,
 "name_ar" => "سيدي مجاهد",
 "name_fr" => "Sidi Medjahed"
  ],
   [
"id" => 438,
"wilaya_id" => 13,
"name_ar" => "السواحلية",
"name_fr" => "Souahlia"
 ],
   [
   "id" => 439,
   "wilaya_id" => 13,
   "name_ar" => "السواني",
   "name_fr" => "Souani"
],
   [
  "id" => 440,
  "wilaya_id" => 13,
  "name_ar" => "سوق الثلاثاء",
  "name_fr" => "Souk Tleta"
   ],
   [
 "id" => 441,
 "wilaya_id" => 13,
 "name_ar" => "تيرني بني هديل",
 "name_fr" => "Terny Beni Hediel"
  ],
   [
"id" => 442,
"wilaya_id" => 13,
"name_ar" => "تيانت",
"name_fr" => "Tianet"
 ],
   [
   "id" => 443,
   "wilaya_id" => 13,
   "name_ar" => "تلمسان",
   "name_fr" => "Tlemcen"
],
   [
  "id" => 444,
  "wilaya_id" => 13,
  "name_ar" => "زناتة",
  "name_fr" => "Zenata"
   ],
   [
 "id" => 445,
 "wilaya_id" => 14,
 "name_ar" => "عين بوشقيف",
 "name_fr" => "Ain Bouchekif"
  ],
   [
"id" => 446,
"wilaya_id" => 14,
"name_ar" => "عين الذهب",
"name_fr" => "Ain Deheb"
 ],
   [
   "id" => 447,
   "wilaya_id" => 14,
   "name_ar" => "عين دزاريت",
   "name_fr" => "Ain Dzarit"
],
   [
  "id" => 448,
  "wilaya_id" => 14,
  "name_ar" => "عين الحديد",
  "name_fr" => "Ain El Hadid"
   ],
   [
 "id" => 449,
 "wilaya_id" => 14,
 "name_ar" => "عين كرمس",
 "name_fr" => "Ain Kermes"
  ],
   [
"id" => 450,
"wilaya_id" => 14,
"name_ar" => "بوقرة",
"name_fr" => "Bougara"
 ],
   [
   "id" => 451,
   "wilaya_id" => 14,
   "name_ar" => "شحيمة",
   "name_fr" => "Chehaima"
],
   [
  "id" => 452,
  "wilaya_id" => 14,
  "name_ar" => "دحموني",
  "name_fr" => "Dahmouni"
   ],
   [
 "id" => 453,
 "wilaya_id" => 14,
 "name_ar" => "جبيلات الرصفاء",
 "name_fr" => "Djebilet Rosfa"
  ],
   [
"id" => 454,
"wilaya_id" => 14,
"name_ar" => "جيلالي بن عمار",
"name_fr" => "Djillali Ben Amar"
 ],
   [
   "id" => 455,
   "wilaya_id" => 14,
   "name_ar" => "الفايجة",
   "name_fr" => "Faidja"
],
   [
  "id" => 456,
  "wilaya_id" => 14,
  "name_ar" => "فرندة",
  "name_fr" => "Frenda"
   ],
   [
 "id" => 457,
 "wilaya_id" => 14,
 "name_ar" => "قرطوفة",
 "name_fr" => "Guertoufa"
  ],
   [
"id" => 458,
"wilaya_id" => 14,
"name_ar" => "حمادية",
"name_fr" => "Hamadia"
 ],
   [
   "id" => 459,
   "wilaya_id" => 14,
   "name_ar" => "قصر الشلالة",
   "name_fr" => "Ksar Chellala"
],
   [
  "id" => 460,
  "wilaya_id" => 14,
  "name_ar" => "مادنة",
  "name_fr" => "Madna"
   ],
   [
 "id" => 461,
 "wilaya_id" => 14,
 "name_ar" => "مهدية",
 "name_fr" => "Mahdia"
  ],
   [
"id" => 462,
"wilaya_id" => 14,
"name_ar" => "مشرع الصفا",
"name_fr" => "Mechraa Safa"
 ],
   [
   "id" => 463,
   "wilaya_id" => 14,
   "name_ar" => "مدريسة",
   "name_fr" => "Medrissa"
],
   [
  "id" => 464,
  "wilaya_id" => 14,
  "name_ar" => "مدروسة",
  "name_fr" => "Medroussa"
   ],
   [
 "id" => 465,
 "wilaya_id" => 14,
 "name_ar" => "مغيلة",
 "name_fr" => "Meghila"
  ],
   [
"id" => 466,
"wilaya_id" => 14,
"name_ar" => "ملاكو",
"name_fr" => "Mellakou"
 ],
   [
   "id" => 467,
   "wilaya_id" => 14,
   "name_ar" => "الناظورة",
   "name_fr" => "Nadorah"
],
   [
  "id" => 468,
  "wilaya_id" => 14,
  "name_ar" => "النعيمة",
  "name_fr" => "Naima"
   ],
   [
 "id" => 469,
 "wilaya_id" => 14,
 "name_ar" => "وادي ليلي",
 "name_fr" => "Oued Lilli"
  ],
   [
"id" => 470,
"wilaya_id" => 14,
"name_ar" => "الرحوية",
"name_fr" => "Rahouia"
 ],
   [
   "id" => 471,
   "wilaya_id" => 14,
   "name_ar" => "الرشايقة",
   "name_fr" => "Rechaiga"
],
   [
  "id" => 472,
  "wilaya_id" => 14,
  "name_ar" => "السبعين",
  "name_fr" => "Sebaine"
   ],
   [
 "id" => 473,
 "wilaya_id" => 14,
 "name_ar" => "السبت",
 "name_fr" => "Sebt"
  ],
   [
"id" => 474,
"wilaya_id" => 14,
"name_ar" => "سرغين",
"name_fr" => "Serghine"
 ],
   [
   "id" => 475,
   "wilaya_id" => 14,
   "name_ar" => "سي عبد الغني",
   "name_fr" => "Si Abdelghani"
],
   [
  "id" => 476,
  "wilaya_id" => 14,
  "name_ar" => "سيدي عبد الرحمن",
  "name_fr" => "Sidi Abderrahmane"
   ],
   [
 "id" => 477,
 "wilaya_id" => 14,
 "name_ar" => "سيدي علي ملال",
 "name_fr" => "Sidi Ali Mellal"
  ],
   [
"id" => 478,
"wilaya_id" => 14,
"name_ar" => "سيدي بختي",
"name_fr" => "Sidi Bakhti"
 ],
   [
   "id" => 479,
   "wilaya_id" => 14,
   "name_ar" => "سيدي حسني",
   "name_fr" => "Sidi Hosni"
],
   [
  "id" => 480,
  "wilaya_id" => 14,
  "name_ar" => "السوقر",
  "name_fr" => "Sougueur"
   ],
   [
 "id" => 481,
 "wilaya_id" => 14,
 "name_ar" => "تاقدمت",
 "name_fr" => "Tagdempt"
  ],
   [
"id" => 482,
"wilaya_id" => 14,
"name_ar" => "تخمرت",
"name_fr" => "Takhemaret"
 ],
   [
   "id" => 483,
   "wilaya_id" => 14,
   "name_ar" => "تيارت",
   "name_fr" => "Tiaret"
],
   [
  "id" => 484,
  "wilaya_id" => 14,
  "name_ar" => "تيدة",
  "name_fr" => "Tidda"
   ],
   [
 "id" => 485,
 "wilaya_id" => 14,
 "name_ar" => "توسنينة",
 "name_fr" => "Tousnina"
  ],
   [
"id" => 486,
"wilaya_id" => 14,
"name_ar" => "زمالة  الأمير عبد القادر",
"name_fr" => "Zmalet El Emir Abdelkade"
 ],
   [
   "id" => 487,
   "wilaya_id" => 15,
   "name_ar" => "أبي يوسف",
   "name_fr" => "Abi-Youcef"
],
   [
  "id" => 488,
  "wilaya_id" => 15,
  "name_ar" => "أغريب",
  "name_fr" => "Aghribs"
   ],
   [
 "id" => 489,
 "wilaya_id" => 15,
 "name_ar" => "أقني قغران",
 "name_fr" => "Agouni-Gueghrane"
  ],
   [
"id" => 490,
"wilaya_id" => 15,
"name_ar" => "عين الحمام",
"name_fr" => "Ain-El-Hammam"
 ],
   [
   "id" => 491,
   "wilaya_id" => 15,
   "name_ar" => "عين الزاوية",
   "name_fr" => "Ain-Zaouia"
],
   [
  "id" => 492,
  "wilaya_id" => 15,
  "name_ar" => "أيت عقـواشة",
  "name_fr" => "Ait Aggouacha"
   ],
   [
 "id" => 493,
 "wilaya_id" => 15,
 "name_ar" => "أيت بــوادو",
 "name_fr" => "Ait Bouaddou"
  ],
   [
"id" => 494,
"wilaya_id" => 15,
"name_ar" => "أيت بومهدي",
"name_fr" => "Ait Boumahdi"
 ],
   [
   "id" => 495,
   "wilaya_id" => 15,
   "name_ar" => "أيت خليلي",
   "name_fr" => "Ait Khellili"
],
   [
  "id" => 496,
  "wilaya_id" => 15,
  "name_ar" => "أيت يحي موسى",
  "name_fr" => "Ait Yahia Moussa"
   ],
   [
 "id" => 497,
 "wilaya_id" => 15,
 "name_ar" => "أيت عيسى ميمون",
 "name_fr" => "Ait-Aissa-Mimoun"
  ],
   [
"id" => 498,
"wilaya_id" => 15,
"name_ar" => "أيت شافع",
"name_fr" => "Ait-Chafaa"
 ],
   [
   "id" => 499,
   "wilaya_id" => 15,
   "name_ar" => "أيت محمود",
   "name_fr" => "Ait-Mahmoud"
],
   [
  "id" => 500,
  "wilaya_id" => 15,
  "name_ar" => "أيت  أومالو",
  "name_fr" => "Ait-Oumalou"
   ],
   [
 "id" => 501,
 "wilaya_id" => 15,
 "name_ar" => "أيت تودرت",
 "name_fr" => "Ait-Toudert"
  ],
   [
"id" => 502,
"wilaya_id" => 15,
"name_ar" => "أيت يحيى",
"name_fr" => "Ait-Yahia"
 ],
   [
   "id" => 503,
   "wilaya_id" => 15,
   "name_ar" => "اقبيل",
   "name_fr" => "Akbil"
],
   [
  "id" => 504,
  "wilaya_id" => 15,
  "name_ar" => "أقرو",
  "name_fr" => "Akerrou"
   ],
   [
 "id" => 505,
 "wilaya_id" => 15,
 "name_ar" => "أسي يوسف",
 "name_fr" => "Assi-Youcef"
  ],
   [
"id" => 506,
"wilaya_id" => 15,
"name_ar" => "عزازقة",
"name_fr" => "Azazga"
 ],
   [
   "id" => 507,
   "wilaya_id" => 15,
   "name_ar" => "أزفون",
   "name_fr" => "Azeffoun"
],
   [
  "id" => 508,
  "wilaya_id" => 15,
  "name_ar" => "بنــــي زمنزار",
  "name_fr" => "Beni Zmenzer"
   ],
   [
 "id" => 509,
 "wilaya_id" => 15,
 "name_ar" => "بني عيسي",
 "name_fr" => "Beni-Aissi"
  ],
   [
"id" => 510,
"wilaya_id" => 15,
"name_ar" => "بني دوالة",
"name_fr" => "Beni-Douala"
 ],
   [
   "id" => 511,
   "wilaya_id" => 15,
   "name_ar" => "بني يني",
   "name_fr" => "Beni-Yenni"
],
   [
  "id" => 512,
  "wilaya_id" => 15,
  "name_ar" => "بني زيكــي",
  "name_fr" => "Beni-Zikki"
   ],
   [
 "id" => 513,
 "wilaya_id" => 15,
 "name_ar" => "بوغني",
 "name_fr" => "Boghni"
  ],
   [
"id" => 514,
"wilaya_id" => 15,
"name_ar" => "بوجيمة",
"name_fr" => "Boudjima"
 ],
   [
   "id" => 515,
   "wilaya_id" => 15,
   "name_ar" => "بونوح",
   "name_fr" => "Bounouh"
],
   [
  "id" => 516,
  "wilaya_id" => 15,
  "name_ar" => "بوزقــن",
  "name_fr" => "Bouzeguene"
   ],
   [
 "id" => 517,
 "wilaya_id" => 15,
 "name_ar" => "ذراع بن خدة",
 "name_fr" => "Draa-Ben-Khedda"
  ],
   [
"id" => 518,
"wilaya_id" => 15,
"name_ar" => "ذراع الميزان",
"name_fr" => "Draa-El-Mizan"
 ],
   [
   "id" => 519,
   "wilaya_id" => 15,
   "name_ar" => "فريحة",
   "name_fr" => "Freha"
],
   [
  "id" => 520,
  "wilaya_id" => 15,
  "name_ar" => "فريقات",
  "name_fr" => "Frikat"
   ],
   [
 "id" => 521,
 "wilaya_id" => 15,
 "name_ar" => "إبودرارن",
 "name_fr" => "Iboudrarene"
  ],
   [
"id" => 522,
"wilaya_id" => 15,
"name_ar" => "إيجــار",
"name_fr" => "Idjeur"
 ],
   [
   "id" => 523,
   "wilaya_id" => 15,
   "name_ar" => "إفــرحــونان",
   "name_fr" => "Iferhounene"
],
   [
  "id" => 524,
  "wilaya_id" => 15,
  "name_ar" => "إيفيغاء",
  "name_fr" => "Ifigha"
   ],
   [
 "id" => 525,
 "wilaya_id" => 15,
 "name_ar" => "إفليـــسن",
 "name_fr" => "Iflissen"
  ],
   [
"id" => 526,
"wilaya_id" => 15,
"name_ar" => "إيلـيــلتـن",
"name_fr" => "Illilten"
 ],
   [
   "id" => 527,
   "wilaya_id" => 15,
   "name_ar" => "إيلولة أومـــالو",
   "name_fr" => "Illoula Oumalou"
],
   [
  "id" => 528,
  "wilaya_id" => 15,
  "name_ar" => "إمســوحال",
  "name_fr" => "Imsouhal"
   ],
   [
 "id" => 529,
 "wilaya_id" => 15,
 "name_ar" => "إيرجـــن",
 "name_fr" => "Irdjen"
  ],
   [
"id" => 530,
"wilaya_id" => 15,
"name_ar" => "الأربعــاء ناث إيراثن",
"name_fr" => "Larbaa Nath Irathen"
 ],
   [
   "id" => 531,
   "wilaya_id" => 15,
   "name_ar" => "معـــاتقة",
   "name_fr" => "Maatkas"
],
   [
  "id" => 532,
  "wilaya_id" => 15,
  "name_ar" => "ماكودة",
  "name_fr" => "Makouda"
   ],
   [
 "id" => 533,
 "wilaya_id" => 15,
 "name_ar" => "مشطراس",
 "name_fr" => "Mechtras"
  ],
   [
"id" => 534,
"wilaya_id" => 15,
"name_ar" => "مقــلع",
"name_fr" => "Mekla"
 ],
   [
   "id" => 535,
   "wilaya_id" => 15,
   "name_ar" => "ميزرانـــة",
   "name_fr" => "Mizrana"
],
   [
  "id" => 536,
  "wilaya_id" => 15,
  "name_ar" => "مكيرة",
  "name_fr" => "M'kira"
   ],
   [
 "id" => 537,
 "wilaya_id" => 15,
 "name_ar" => "واسيف",
 "name_fr" => "Ouacif"
  ],
   [
"id" => 538,
"wilaya_id" => 15,
"name_ar" => "واضية",
"name_fr" => "Ouadhias"
 ],
   [
   "id" => 539,
   "wilaya_id" => 15,
   "name_ar" => "واقنون",
   "name_fr" => "Ouaguenoun"
],
   [
  "id" => 540,
  "wilaya_id" => 15,
  "name_ar" => "سيدي نعمان",
  "name_fr" => "Sidi Namane"
   ],
   [
 "id" => 541,
 "wilaya_id" => 15,
 "name_ar" => "صوامـــع",
 "name_fr" => "Souama"
  ],
   [
"id" => 542,
"wilaya_id" => 15,
"name_ar" => "سوق الإثنين",
"name_fr" => "Souk-El-Tenine"
 ],
   [
   "id" => 543,
   "wilaya_id" => 15,
   "name_ar" => "تادمايت",
   "name_fr" => "Tadmait"
],
   [
  "id" => 544,
  "wilaya_id" => 15,
  "name_ar" => "تيقـزيرت",
  "name_fr" => "Tigzirt"
   ],
   [
 "id" => 545,
 "wilaya_id" => 15,
 "name_ar" => "تيمـيزار",
 "name_fr" => "Timizart"
  ],
   [
"id" => 546,
"wilaya_id" => 15,
"name_ar" => "تيرمتين",
"name_fr" => "Tirmitine"
 ],
   [
   "id" => 547,
   "wilaya_id" => 15,
   "name_ar" => "تيزي نثلاثة",
   "name_fr" => "Tizi N'tleta"
],
   [
  "id" => 548,
  "wilaya_id" => 15,
  "name_ar" => "تيزي غنيف",
  "name_fr" => "Tizi-Gheniff"
   ],
   [
 "id" => 549,
 "wilaya_id" => 15,
 "name_ar" => "تيزي وزو",
 "name_fr" => "Tizi-Ouzou"
  ],
   [
"id" => 550,
"wilaya_id" => 15,
"name_ar" => "تيزي راشد",
"name_fr" => "Tizi-Rached"
 ],
   [
   "id" => 551,
   "wilaya_id" => 15,
   "name_ar" => "إعــكورن",
   "name_fr" => "Yakourene"
],
   [
  "id" => 552,
  "wilaya_id" => 15,
  "name_ar" => "يطــافن",
  "name_fr" => "Yatafene"
   ],
   [
 "id" => 553,
 "wilaya_id" => 15,
 "name_ar" => "زكري",
 "name_fr" => "Zekri"
  ],
   [
"id" => 554,
"wilaya_id" => 16,
"name_ar" => "عين بنيان",
"name_fr" => "Ain Benian"
 ],
   [
   "id" => 555,
   "wilaya_id" => 16,
   "name_ar" => "عين طاية",
   "name_fr" => "Ain Taya"
],
   [
  "id" => 556,
  "wilaya_id" => 16,
  "name_ar" => "الجزائر الوسطى",
  "name_fr" => "Alger Centre"
   ],
   [
 "id" => 557,
 "wilaya_id" => 16,
 "name_ar" => "باب الوادي",
 "name_fr" => "Bab El Oued"
  ],
   [
"id" => 558,
"wilaya_id" => 16,
"name_ar" => "باب الزوار",
"name_fr" => "Bab Ezzouar"
 ],
   [
   "id" => 559,
   "wilaya_id" => 16,
   "name_ar" => "بابا حسن",
   "name_fr" => "Baba Hassen"
],
   [
  "id" => 560,
  "wilaya_id" => 16,
  "name_ar" => "باش جراح",
  "name_fr" => "Bachedjerah"
   ],
   [
 "id" => 561,
 "wilaya_id" => 16,
 "name_ar" => "براقي",
 "name_fr" => "Baraki"
  ],
   [
"id" => 562,
"wilaya_id" => 16,
"name_ar" => "ابن عكنون",
"name_fr" => "Ben Aknoun"
 ],
   [
   "id" => 563,
   "wilaya_id" => 16,
   "name_ar" => "بني مسوس",
   "name_fr" => "Beni Messous"
],
   [
  "id" => 564,
  "wilaya_id" => 16,
  "name_ar" => "بئر مراد رايس",
  "name_fr" => "Bir Mourad Rais"
   ],
   [
 "id" => 565,
 "wilaya_id" => 16,
 "name_ar" => "بئر خادم",
 "name_fr" => "Birkhadem"
  ],
   [
"id" => 566,
"wilaya_id" => 16,
"name_ar" => "بئر توتة",
"name_fr" => "Bir Touta"
 ],
   [
   "id" => 567,
   "wilaya_id" => 16,
   "name_ar" => "بولوغين بن زيري",
   "name_fr" => "Bologhine Ibnou Ziri"
],
   [
  "id" => 568,
  "wilaya_id" => 16,
  "name_ar" => "برج البحري",
  "name_fr" => "Bordj El Bahri"
   ],
   [
 "id" => 569,
 "wilaya_id" => 16,
 "name_ar" => "برج الكيفان",
 "name_fr" => "Bordj El Kiffan"
  ],
   [
"id" => 570,
"wilaya_id" => 16,
"name_ar" => "بوروبة",
"name_fr" => "Bourouba"
 ],
   [
   "id" => 571,
   "wilaya_id" => 16,
   "name_ar" => "بوزريعة",
   "name_fr" => "Bouzareah"
],
   [
  "id" => 572,
  "wilaya_id" => 16,
  "name_ar" => "القصبة",
  "name_fr" => "Casbah"
   ],
   [
 "id" => 573,
 "wilaya_id" => 16,
 "name_ar" => "الشراقة",
 "name_fr" => "Cheraga"
  ],
   [
"id" => 574,
"wilaya_id" => 16,
"name_ar" => "الدار البيضاء",
"name_fr" => "Dar El Beida"
 ],
   [
   "id" => 575,
   "wilaya_id" => 16,
   "name_ar" => "دالي ابراهيم",
   "name_fr" => "Dely Ibrahim"
],
   [
  "id" => 576,
  "wilaya_id" => 16,
  "name_ar" => "جسر قسنطينة",
  "name_fr" => "Djasr Kasentina"
   ],
   [
 "id" => 577,
 "wilaya_id" => 16,
 "name_ar" => "الدويرة",
 "name_fr" => "Douira"
  ],
   [
"id" => 578,
"wilaya_id" => 16,
"name_ar" => "الدرارية",
"name_fr" => "Draria"
 ],
   [
   "id" => 579,
   "wilaya_id" => 16,
   "name_ar" => "العاشور",
   "name_fr" => "El Achour"
],
   [
  "id" => 580,
  "wilaya_id" => 16,
  "name_ar" => "الابيار",
  "name_fr" => "El Biar"
   ],
   [
 "id" => 581,
 "wilaya_id" => 16,
 "name_ar" => "الحراش",
 "name_fr" => "El Harrach"
  ],
   [
"id" => 582,
"wilaya_id" => 16,
"name_ar" => "المدنية",
"name_fr" => "El Madania"
 ],
   [
   "id" => 583,
   "wilaya_id" => 16,
   "name_ar" => "المغارية",
   "name_fr" => "El Magharia"
],
   [
  "id" => 584,
  "wilaya_id" => 16,
  "name_ar" => "المرسى",
  "name_fr" => "El Marsa"
   ],
   [
 "id" => 585,
 "wilaya_id" => 16,
 "name_ar" => "المرادية",
 "name_fr" => "El Mouradia"
  ],
   [
"id" => 586,
"wilaya_id" => 16,
"name_ar" => "الحمامات",
"name_fr" => "Hammamet"
 ],
   [
   "id" => 587,
   "wilaya_id" => 16,
   "name_ar" => "هراوة",
   "name_fr" => "Herraoua"
],
   [
  "id" => 588,
  "wilaya_id" => 16,
  "name_ar" => "حسين داي",
  "name_fr" => "Hussein Dey"
   ],
   [
 "id" => 589,
 "wilaya_id" => 16,
 "name_ar" => "حيدرة",
 "name_fr" => "Hydra"
  ],
   [
"id" => 590,
"wilaya_id" => 16,
"name_ar" => "الخرايسية",
"name_fr" => "Khraissia"
 ],
   [
   "id" => 591,
   "wilaya_id" => 16,
   "name_ar" => "القبة",
   "name_fr" => "Kouba"
],
   [
  "id" => 592,
  "wilaya_id" => 16,
  "name_ar" => "الكاليتوس",
  "name_fr" => "Les Eucalyptus"
   ],
   [
 "id" => 593,
 "wilaya_id" => 16,
 "name_ar" => "المعالمة",
 "name_fr" => "Maalma"
  ],
   [
"id" => 594,
"wilaya_id" => 16,
"name_ar" => "محمد بلوزداد",
"name_fr" => "Mohamed Belouzdad"
 ],
   [
   "id" => 595,
   "wilaya_id" => 16,
   "name_ar" => "المحمدية",
   "name_fr" => "Mohammadia"
],
   [
  "id" => 596,
  "wilaya_id" => 16,
  "name_ar" => "وادي قريش",
  "name_fr" => "Oued Koriche"
   ],
   [
 "id" => 597,
 "wilaya_id" => 16,
 "name_ar" => "وادي السمار",
 "name_fr" => "Oued Smar"
  ],
   [
"id" => 598,
"wilaya_id" => 16,
"name_ar" => "اولاد شبل",
"name_fr" => "Ouled Chebel"
 ],
   [
   "id" => 599,
   "wilaya_id" => 16,
   "name_ar" => "اولاد فايت",
   "name_fr" => "Ouled Fayet"
],
   [
  "id" => 600,
  "wilaya_id" => 16,
  "name_ar" => "الرحمانية",
  "name_fr" => "Rahmania"
   ],
   [
 "id" => 601,
 "wilaya_id" => 16,
 "name_ar" => "الرايس حميدو",
 "name_fr" => "Rais Hamidou"
  ],
   [
"id" => 602,
"wilaya_id" => 16,
"name_ar" => "رغاية",
"name_fr" => "Reghaia"
 ],
   [
   "id" => 603,
   "wilaya_id" => 16,
   "name_ar" => "الرويبة",
   "name_fr" => "Rouiba"
],
   [
  "id" => 604,
  "wilaya_id" => 16,
  "name_ar" => "السحاولة",
  "name_fr" => "Sehaoula"
   ],
   [
 "id" => 605,
 "wilaya_id" => 16,
 "name_ar" => "سيدي امحمد",
 "name_fr" => "Sidi M'hamed"
  ],
   [
"id" => 606,
"wilaya_id" => 16,
"name_ar" => "سيدي موسى",
"name_fr" => "Sidi Moussa"
 ],
   [
   "id" => 607,
   "wilaya_id" => 16,
   "name_ar" => "سويدانية",
   "name_fr" => "Souidania"
],
   [
  "id" => 608,
  "wilaya_id" => 16,
  "name_ar" => "سطاوالي",
  "name_fr" => "Staoueli"
   ],
   [
 "id" => 609,
 "wilaya_id" => 16,
 "name_ar" => "تسالة المرجة",
 "name_fr" => "Tessala El Merdja"
  ],
   [
"id" => 610,
"wilaya_id" => 16,
"name_ar" => "زرالدة",
"name_fr" => "Zeralda"
 ],
   [
   "id" => 611,
   "wilaya_id" => 17,
   "name_ar" => "عين الشهداء",
   "name_fr" => "Ain Chouhada"
],
   [
  "id" => 612,
  "wilaya_id" => 17,
  "name_ar" => "عين الإبل",
  "name_fr" => "Ain El Ibel"
   ],
   [
 "id" => 613,
 "wilaya_id" => 17,
 "name_ar" => "عين فقه",
 "name_fr" => "Ain Fekka"
  ],
   [
"id" => 614,
"wilaya_id" => 17,
"name_ar" => "عين معبد",
"name_fr" => "Ain Maabed"
 ],
   [
   "id" => 615,
   "wilaya_id" => 17,
   "name_ar" => "عين وسارة",
   "name_fr" => "Ain Oussera"
],
   [
  "id" => 616,
  "wilaya_id" => 17,
  "name_ar" => "عمورة",
  "name_fr" => "Amourah"
   ],
   [
 "id" => 617,
 "wilaya_id" => 17,
 "name_ar" => "بنهار",
 "name_fr" => "Benhar"
  ],
   [
"id" => 618,
"wilaya_id" => 17,
"name_ar" => "بن يعقوب",
"name_fr" => "Benyagoub"
 ],
   [
   "id" => 619,
   "wilaya_id" => 17,
   "name_ar" => "بيرين",
   "name_fr" => "Birine"
],
   [
  "id" => 620,
  "wilaya_id" => 17,
  "name_ar" => "بويرة الأحداب",
  "name_fr" => "Bouira Lahdab"
   ],
   [
 "id" => 621,
 "wilaya_id" => 17,
 "name_ar" => "الشارف",
 "name_fr" => "Charef"
  ],
   [
"id" => 622,
"wilaya_id" => 17,
"name_ar" => "دار الشيوخ",
"name_fr" => "Dar Chioukh"
 ],
   [
   "id" => 623,
   "wilaya_id" => 17,
   "name_ar" => "دلدول",
   "name_fr" => "Deldoul"
],
   [
  "id" => 624,
  "wilaya_id" => 17,
  "name_ar" => "الجلفة",
  "name_fr" => "Djelfa"
   ],
   [
 "id" => 625,
 "wilaya_id" => 17,
 "name_ar" => "دويس",
 "name_fr" => "Douis"
  ],
   [
"id" => 626,
"wilaya_id" => 17,
"name_ar" => "القديد",
"name_fr" => "El Guedid"
 ],
   [
   "id" => 627,
   "wilaya_id" => 17,
   "name_ar" => "الادريسية",
   "name_fr" => "El Idrissia"
],
   [
  "id" => 628,
  "wilaya_id" => 17,
  "name_ar" => "الخميس",
  "name_fr" => "El Khemis"
   ],
   [
 "id" => 629,
 "wilaya_id" => 17,
 "name_ar" => "فيض البطمة",
 "name_fr" => "Faidh El Botma"
  ],
   [
"id" => 630,
"wilaya_id" => 17,
"name_ar" => "قرنيني",
"name_fr" => "Guernini"
 ],
   [
   "id" => 631,
   "wilaya_id" => 17,
   "name_ar" => "قطارة",
   "name_fr" => "Guettara"
],
   [
  "id" => 632,
  "wilaya_id" => 17,
  "name_ar" => "حد الصحاري",
  "name_fr" => "Had Sahary"
   ],
   [
 "id" => 633,
 "wilaya_id" => 17,
 "name_ar" => "حاسي بحبح",
 "name_fr" => "Hassi Bahbah"
  ],
   [
"id" => 634,
"wilaya_id" => 17,
"name_ar" => "حاسي العش",
"name_fr" => "Hassi El Euch"
 ],
   [
   "id" => 635,
   "wilaya_id" => 17,
   "name_ar" => "حاسي فدول",
   "name_fr" => "Hassi Fedoul"
],
   [
  "id" => 636,
  "wilaya_id" => 17,
  "name_ar" => "مسعد",
  "name_fr" => "Messaad"
   ],
   [
 "id" => 637,
 "wilaya_id" => 17,
 "name_ar" => "مليليحة",
 "name_fr" => "M'liliha"
  ],
   [
"id" => 638,
"wilaya_id" => 17,
"name_ar" => "مجبارة",
"name_fr" => "Moudjebara"
 ],
   [
   "id" => 639,
   "wilaya_id" => 17,
   "name_ar" => "أم العظام",
   "name_fr" => "Oum Laadham"
],
   [
  "id" => 640,
  "wilaya_id" => 17,
  "name_ar" => "سد الرحال",
  "name_fr" => "Sed Rahal"
   ],
   [
 "id" => 641,
 "wilaya_id" => 17,
 "name_ar" => "سلمانة",
 "name_fr" => "Selmana"
  ],
   [
"id" => 642,
"wilaya_id" => 17,
"name_ar" => "سيدي بايزيد",
"name_fr" => "Sidi Baizid"
 ],
   [
   "id" => 643,
   "wilaya_id" => 17,
   "name_ar" => "سيدي لعجال",
   "name_fr" => "Sidi Laadjel"
],
   [
  "id" => 644,
  "wilaya_id" => 17,
  "name_ar" => "تعظميت",
  "name_fr" => "Taadmit"
   ],
   [
 "id" => 645,
 "wilaya_id" => 17,
 "name_ar" => "زعفران",
 "name_fr" => "Zaafrane"
  ],
   [
"id" => 646,
"wilaya_id" => 17,
"name_ar" => "زكار",
"name_fr" => "Zaccar"
 ],
   [
   "id" => 647,
   "wilaya_id" => 18,
   "name_ar" => "برج الطهر",
   "name_fr" => "Bordj T'har"
],
   [
  "id" => 648,
  "wilaya_id" => 18,
  "name_ar" => "بودريعة بني  ياجيس",
  "name_fr" => "Boudria Beniyadjis"
   ],
   [
 "id" => 649,
 "wilaya_id" => 18,
 "name_ar" => "بوراوي بلهادف",
 "name_fr" => "Bouraoui Belhadef"
  ],
   [
"id" => 650,
"wilaya_id" => 18,
"name_ar" => "بوسيف أولاد عسكر",
"name_fr" => "Boussif Ouled Askeur"
 ],
   [
   "id" => 651,
   "wilaya_id" => 18,
   "name_ar" => "الشحنة",
   "name_fr" => "Chahna"
],
   [
  "id" => 652,
  "wilaya_id" => 18,
  "name_ar" => "الشقفة",
  "name_fr" => "Chekfa"
   ],
   [
 "id" => 653,
 "wilaya_id" => 18,
 "name_ar" => "الجمعة بني حبيبي",
 "name_fr" => "Djemaa Beni Habibi"
  ],
   [
"id" => 654,
"wilaya_id" => 18,
"name_ar" => "جيملة",
"name_fr" => "Djimla"
 ],
   [
   "id" => 655,
   "wilaya_id" => 18,
   "name_ar" => "العنصر",
   "name_fr" => "El Ancer"
],
   [
  "id" => 656,
  "wilaya_id" => 18,
  "name_ar" => "العوانة",
  "name_fr" => "El Aouana"
   ],
   [
 "id" => 657,
 "wilaya_id" => 18,
 "name_ar" => "القنار نشفي",
 "name_fr" => "El Kennar Nouchfi"
  ],
   [
"id" => 658,
"wilaya_id" => 18,
"name_ar" => "الميلية",
"name_fr" => "El Milia"
 ],
   [
   "id" => 659,
   "wilaya_id" => 18,
   "name_ar" => "الامير عبد القادر",
   "name_fr" => "Emir Abdelkader"
],
   [
  "id" => 660,
  "wilaya_id" => 18,
  "name_ar" => "أراقن سويسي",
  "name_fr" => "Erraguene Souissi"
   ],
   [
 "id" => 661,
 "wilaya_id" => 18,
 "name_ar" => "غبالة",
 "name_fr" => "Ghebala"
  ],
   [
"id" => 662,
"wilaya_id" => 18,
"name_ar" => "جيجل",
"name_fr" => "Jijel"
 ],
   [
   "id" => 663,
   "wilaya_id" => 18,
   "name_ar" => "قاوس",
   "name_fr" => "Kaous"
],
   [
  "id" => 664,
  "wilaya_id" => 18,
  "name_ar" => "خيري واد عجول",
  "name_fr" => "Khiri Oued Adjoul"
   ],
   [
 "id" => 665,
 "wilaya_id" => 18,
 "name_ar" => "وجانة",
 "name_fr" => "Oudjana"
  ],
   [
"id" => 666,
"wilaya_id" => 18,
"name_ar" => "أولاد رابح",
"name_fr" => "Ouled Rabah"
 ],
   [
   "id" => 667,
   "wilaya_id" => 18,
   "name_ar" => "أولاد يحيى خدروش",
   "name_fr" => "Ouled Yahia Khadrouch"
],
   [
  "id" => 668,
  "wilaya_id" => 18,
  "name_ar" => "سلمى بن زيادة",
  "name_fr" => "Selma Benziada"
   ],
   [
 "id" => 669,
 "wilaya_id" => 18,
 "name_ar" => "السطارة",
 "name_fr" => "Settara"
  ],
   [
"id" => 670,
"wilaya_id" => 18,
"name_ar" => "سيدي عبد العزيز",
"name_fr" => "Sidi Abdelaziz"
 ],
   [
   "id" => 671,
   "wilaya_id" => 18,
   "name_ar" => "سيدي معروف",
   "name_fr" => "Sidi Marouf"
],
   [
  "id" => 672,
  "wilaya_id" => 18,
  "name_ar" => "الطاهير",
  "name_fr" => "Taher"
   ],
   [
 "id" => 673,
 "wilaya_id" => 18,
 "name_ar" => "تاكسنة",
 "name_fr" => "Texenna"
  ],
   [
"id" => 674,
"wilaya_id" => 18,
"name_ar" => "زيامة منصورية",
"name_fr" => "Ziama Mansouriah"
 ],
   [
   "id" => 675,
   "wilaya_id" => 19,
   "name_ar" => "عين عباسة",
   "name_fr" => "Ain Abessa"
],
   [
  "id" => 676,
  "wilaya_id" => 19,
  "name_ar" => "عين أرنات",
  "name_fr" => "Ain Arnat"
   ],
   [
 "id" => 677,
 "wilaya_id" => 19,
 "name_ar" => "عين أزال",
 "name_fr" => "Ain Azel"
  ],
   [
"id" => 678,
"wilaya_id" => 19,
"name_ar" => "عين الكبيرة",
"name_fr" => "Ain El Kebira"
 ],
   [
   "id" => 679,
   "wilaya_id" => 19,
   "name_ar" => "عين الحجر",
   "name_fr" => "Ain Lahdjar"
],
   [
  "id" => 680,
  "wilaya_id" => 19,
  "name_ar" => "عين ولمان",
  "name_fr" => "Ain Oulmene"
   ],
   [
 "id" => 681,
 "wilaya_id" => 19,
 "name_ar" => "عين لقراج",
 "name_fr" => "Ain-Legradj"
  ],
   [
"id" => 682,
"wilaya_id" => 19,
"name_ar" => "عين الروى",
"name_fr" => "Ain-Roua"
 ],
   [
   "id" => 683,
   "wilaya_id" => 19,
   "name_ar" => "عين السبت",
   "name_fr" => "Ain-Sebt"
],
   [
  "id" => 684,
  "wilaya_id" => 19,
  "name_ar" => "أيت نوال مزادة",
  "name_fr" => "Ait Naoual Mezada"
   ],
   [
 "id" => 685,
 "wilaya_id" => 19,
 "name_ar" => "ايت تيزي",
 "name_fr" => "Ait-Tizi"
  ],
   [
"id" => 686,
"wilaya_id" => 19,
"name_ar" => "عموشة",
"name_fr" => "Amoucha"
 ],
   [
   "id" => 687,
   "wilaya_id" => 19,
   "name_ar" => "بابور",
   "name_fr" => "Babor"
],
   [
  "id" => 688,
  "wilaya_id" => 19,
  "name_ar" => "بازر سكرة",
  "name_fr" => "Bazer-Sakra"
   ],
   [
 "id" => 689,
 "wilaya_id" => 19,
 "name_ar" => "بيضاء برج",
 "name_fr" => "Beidha Bordj"
  ],
   [
"id" => 690,
"wilaya_id" => 19,
"name_ar" => "بلاعة",
"name_fr" => "Bellaa"
 ],
   [
   "id" => 691,
   "wilaya_id" => 19,
   "name_ar" => "بني شبانة",
   "name_fr" => "Beni Chebana"
],
   [
  "id" => 692,
  "wilaya_id" => 19,
  "name_ar" => "بني فودة",
  "name_fr" => "Beni Fouda"
   ],
   [
 "id" => 693,
 "wilaya_id" => 19,
 "name_ar" => "بني ورتيلان",
 "name_fr" => "Beni Ourtilane"
  ],
   [
"id" => 694,
"wilaya_id" => 19,
"name_ar" => "بني وسين",
"name_fr" => "Beni Oussine"
 ],
   [
   "id" => 695,
   "wilaya_id" => 19,
   "name_ar" => "بني عزيز",
   "name_fr" => "Beni-Aziz"
],
   [
  "id" => 696,
  "wilaya_id" => 19,
  "name_ar" => "بني موحلي",
  "name_fr" => "Beni-Mouhli"
   ],
   [
 "id" => 697,
 "wilaya_id" => 19,
 "name_ar" => "بئر حدادة",
 "name_fr" => "Bir Haddada"
  ],
   [
"id" => 698,
"wilaya_id" => 19,
"name_ar" => "بئر العرش",
"name_fr" => "Bir-El-Arch"
 ],
   [
   "id" => 699,
   "wilaya_id" => 19,
   "name_ar" => "بوعنداس",
   "name_fr" => "Bouandas"
],
   [
  "id" => 700,
  "wilaya_id" => 19,
  "name_ar" => "بوقاعة",
  "name_fr" => "Bougaa"
   ],
   [
 "id" => 701,
 "wilaya_id" => 19,
 "name_ar" => "بوسلام",
 "name_fr" => "Bousselam"
  ],
   [
"id" => 702,
"wilaya_id" => 19,
"name_ar" => "بوطالب",
"name_fr" => "Boutaleb"
 ],
   [
   "id" => 703,
   "wilaya_id" => 19,
   "name_ar" => "الدهامشة",
   "name_fr" => "Dehamcha"
],
   [
  "id" => 704,
  "wilaya_id" => 19,
  "name_ar" => "جميلة",
  "name_fr" => "Djemila"
   ],
   [
 "id" => 705,
 "wilaya_id" => 19,
 "name_ar" => "ذراع قبيلة",
 "name_fr" => "Draa-Kebila"
  ],
   [
"id" => 706,
"wilaya_id" => 19,
"name_ar" => "العلمة",
"name_fr" => "El Eulma"
 ],
   [
   "id" => 707,
   "wilaya_id" => 19,
   "name_ar" => "أوريسيا",
   "name_fr" => "El Ouricia"
],
   [
  "id" => 708,
  "wilaya_id" => 19,
  "name_ar" => "الولجة",
  "name_fr" => "El-Ouldja"
   ],
   [
 "id" => 709,
 "wilaya_id" => 19,
 "name_ar" => "قلال",
 "name_fr" => "Guellal"
  ],
   [
"id" => 710,
"wilaya_id" => 19,
"name_ar" => "قلتة زرقاء",
"name_fr" => "Guelta Zerka"
 ],
   [
   "id" => 711,
   "wilaya_id" => 19,
   "name_ar" => "قنزات",
   "name_fr" => "Guenzet"
],
   [
  "id" => 712,
  "wilaya_id" => 19,
  "name_ar" => "قجال",
  "name_fr" => "Guidjel"
   ],
   [
 "id" => 713,
 "wilaya_id" => 19,
 "name_ar" => "حمام السخنة",
 "name_fr" => "Hamam Soukhna"
  ],
   [
"id" => 714,
"wilaya_id" => 19,
"name_ar" => "الحامة",
"name_fr" => "Hamma"
 ],
   [
   "id" => 715,
   "wilaya_id" => 19,
   "name_ar" => "حمام قرقور",
   "name_fr" => "Hammam Guergour"
],
   [
  "id" => 716,
  "wilaya_id" => 19,
  "name_ar" => "حربيل",
  "name_fr" => "Harbil"
   ],
   [
 "id" => 717,
 "wilaya_id" => 19,
 "name_ar" => "قصر الابطال",
 "name_fr" => "Kasr El Abtal"
  ],
   [
"id" => 718,
"wilaya_id" => 19,
"name_ar" => "معاوية",
"name_fr" => "Maaouia"
 ],
   [
   "id" => 719,
   "wilaya_id" => 19,
   "name_ar" => "ماوكلان",
   "name_fr" => "Maouaklane"
],
   [
  "id" => 720,
  "wilaya_id" => 19,
  "name_ar" => "مزلوق",
  "name_fr" => "Mezloug"
   ],
   [
 "id" => 721,
 "wilaya_id" => 19,
 "name_ar" => "واد البارد",
 "name_fr" => "Oued El Bared"
  ],
   [
"id" => 722,
"wilaya_id" => 19,
"name_ar" => "أولاد عدوان",
"name_fr" => "Ouled Addouane"
 ],
   [
   "id" => 723,
   "wilaya_id" => 19,
   "name_ar" => "أولاد صابر",
   "name_fr" => "Ouled Sabor"
],
   [
  "id" => 724,
  "wilaya_id" => 19,
  "name_ar" => "أولاد سي أحمد",
  "name_fr" => "Ouled Si Ahmed"
   ],
   [
 "id" => 725,
 "wilaya_id" => 19,
 "name_ar" => "أولاد تبان",
 "name_fr" => "Ouled Tebben"
  ],
   [
"id" => 726,
"wilaya_id" => 19,
"name_ar" => "الرصفة",
"name_fr" => "Rosfa"
 ],
   [
   "id" => 727,
   "wilaya_id" => 19,
   "name_ar" => "صالح باي",
   "name_fr" => "Salah Bey"
],
   [
  "id" => 728,
  "wilaya_id" => 19,
  "name_ar" => "سرج الغول",
  "name_fr" => "Serdj-El-Ghoul"
   ],
   [
 "id" => 729,
 "wilaya_id" => 19,
 "name_ar" => "سطيف",
 "name_fr" => "Setif"
  ],
   [
"id" => 730,
"wilaya_id" => 19,
"name_ar" => "تاشودة",
"name_fr" => "Tachouda"
 ],
   [
   "id" => 731,
   "wilaya_id" => 19,
   "name_ar" => "تالة إيفاسن",
   "name_fr" => "Tala-Ifacene"
],
   [
  "id" => 732,
  "wilaya_id" => 19,
  "name_ar" => "الطاية",
  "name_fr" => "Taya"
   ],
   [
 "id" => 733,
 "wilaya_id" => 19,
 "name_ar" => "التلة",
 "name_fr" => "Tella"
  ],
   [
"id" => 734,
"wilaya_id" => 19,
"name_ar" => "تيزي نبشار",
"name_fr" => "Tizi N'bechar"
 ],
   [
   "id" => 735,
   "wilaya_id" => 20,
   "name_ar" => "عين الحجر",
   "name_fr" => "Ain El Hadjar"
],
   [
  "id" => 736,
  "wilaya_id" => 20,
  "name_ar" => "عين السخونة",
  "name_fr" => "Ain Sekhouna"
   ],
   [
 "id" => 737,
 "wilaya_id" => 20,
 "name_ar" => "عين السلطان",
 "name_fr" => "Ain Soltane"
  ],
   [
"id" => 738,
"wilaya_id" => 20,
"name_ar" => "دوي ثابت",
"name_fr" => "Doui Thabet"
 ],
   [
   "id" => 739,
   "wilaya_id" => 20,
   "name_ar" => "الحساسنة",
   "name_fr" => "El Hassasna"
],
   [
  "id" => 740,
  "wilaya_id" => 20,
  "name_ar" => "هونت",
  "name_fr" => "Hounet"
   ],
   [
 "id" => 741,
 "wilaya_id" => 20,
 "name_ar" => "المعمورة",
 "name_fr" => "Maamora"
  ],
   [
"id" => 742,
"wilaya_id" => 20,
"name_ar" => "مولاي العربي",
"name_fr" => "Moulay Larbi"
 ],
   [
   "id" => 743,
   "wilaya_id" => 20,
   "name_ar" => "أولاد إبراهيم",
   "name_fr" => "Ouled Brahim"
],
   [
  "id" => 744,
  "wilaya_id" => 20,
  "name_ar" => "أولاد خالد",
  "name_fr" => "Ouled Khaled"
   ],
   [
 "id" => 745,
 "wilaya_id" => 20,
 "name_ar" => "سعيدة",
 "name_fr" => "Saida"
  ],
   [
"id" => 746,
"wilaya_id" => 20,
"name_ar" => "سيدي احمد",
"name_fr" => "Sidi Ahmed"
 ],
   [
   "id" => 747,
   "wilaya_id" => 20,
   "name_ar" => "سيدي عمر",
   "name_fr" => "Sidi Amar"
],
   [
  "id" => 748,
  "wilaya_id" => 20,
  "name_ar" => "سيدي بوبكر",
  "name_fr" => "Sidi Boubekeur"
   ],
   [
 "id" => 749,
 "wilaya_id" => 20,
 "name_ar" => "تيرسين",
 "name_fr" => "Tircine"
  ],
   [
"id" => 750,
"wilaya_id" => 20,
"name_ar" => "يوب",
"name_fr" => "Youb"
 ],
   [
   "id" => 751,
   "wilaya_id" => 21,
   "name_ar" => "عين بوزيان",
   "name_fr" => "Ain Bouziane"
],
   [
  "id" => 752,
  "wilaya_id" => 21,
  "name_ar" => "عين شرشار",
  "name_fr" => "Ain Charchar"
   ],
   [
 "id" => 753,
 "wilaya_id" => 21,
 "name_ar" => "عين قشرة",
 "name_fr" => "Ain Kechra"
  ],
   [
"id" => 754,
"wilaya_id" => 21,
"name_ar" => "عين زويت",
"name_fr" => "Ain Zouit"
 ],
   [
   "id" => 755,
   "wilaya_id" => 21,
   "name_ar" => "عزابة",
   "name_fr" => "Azzaba"
],
   [
  "id" => 756,
  "wilaya_id" => 21,
  "name_ar" => "بكوش لخضر",
  "name_fr" => "Bekkouche Lakhdar"
   ],
   [
 "id" => 757,
 "wilaya_id" => 21,
 "name_ar" => "بن عزوز",
 "name_fr" => "Ben Azzouz"
  ],
   [
"id" => 758,
"wilaya_id" => 21,
"name_ar" => "بني بشير",
"name_fr" => "Beni Bechir"
 ],
   [
   "id" => 759,
   "wilaya_id" => 21,
   "name_ar" => "بني ولبان",
   "name_fr" => "Beni Oulbane"
],
   [
  "id" => 760,
  "wilaya_id" => 21,
  "name_ar" => "بني زيد",
  "name_fr" => "Beni Zid"
   ],
   [
 "id" => 761,
 "wilaya_id" => 21,
 "name_ar" => "بين الويدان",
 "name_fr" => "Bin El Ouiden"
  ],
   [
"id" => 762,
"wilaya_id" => 21,
"name_ar" => "بوشطاطة",
"name_fr" => "Bouchetata"
 ],
   [
   "id" => 763,
   "wilaya_id" => 21,
   "name_ar" => "الشرايع",
   "name_fr" => "Cheraia"
],
   [
  "id" => 764,
  "wilaya_id" => 21,
  "name_ar" => "القل",
  "name_fr" => "Collo"
   ],
   [
 "id" => 765,
 "wilaya_id" => 21,
 "name_ar" => "جندل سعدي محمد",
 "name_fr" => "Djendel Saadi Mohamed"
  ],
   [
"id" => 766,
"wilaya_id" => 21,
"name_ar" => "الحروش",
"name_fr" => "El Arrouch"
 ],
   [
   "id" => 767,
   "wilaya_id" => 21,
   "name_ar" => "الغدير",
   "name_fr" => "El Ghedir"
],
   [
  "id" => 768,
  "wilaya_id" => 21,
  "name_ar" => "الحدائق",
  "name_fr" => "El Hadaiek"
   ],
   [
 "id" => 769,
 "wilaya_id" => 21,
 "name_ar" => "المرسى",
 "name_fr" => "El Marsa"
  ],
   [
"id" => 770,
"wilaya_id" => 21,
"name_ar" => "مجاز الدشيش",
"name_fr" => "Emjez Edchich"
 ],
   [
   "id" => 771,
   "wilaya_id" => 21,
   "name_ar" => "السبت",
   "name_fr" => "Es Sebt"
],
   [
  "id" => 772,
  "wilaya_id" => 21,
  "name_ar" => "فلفلة",
  "name_fr" => "Filfila"
   ],
   [
 "id" => 773,
 "wilaya_id" => 21,
 "name_ar" => "حمادي كرومة",
 "name_fr" => "Hammadi Krouma"
  ],
   [
"id" => 774,
"wilaya_id" => 21,
"name_ar" => "قنواع",
"name_fr" => "Kanoua"
 ],
   [
   "id" => 775,
   "wilaya_id" => 21,
   "name_ar" => "الكركرة",
   "name_fr" => "Kerkara"
],
   [
  "id" => 776,
  "wilaya_id" => 21,
  "name_ar" => "خناق مايو",
  "name_fr" => "Khenag Maoune"
   ],
   [
 "id" => 777,
 "wilaya_id" => 21,
 "name_ar" => "وادي الزهور",
 "name_fr" => "Oued Zhour"
  ],
   [
"id" => 778,
"wilaya_id" => 21,
"name_ar" => "الولجة بولبلوط",
"name_fr" => "Ouldja Boulbalout"
 ],
   [
   "id" => 779,
   "wilaya_id" => 21,
   "name_ar" => "أولاد عطية",
   "name_fr" => "Ouled Attia"
],
   [
  "id" => 780,
  "wilaya_id" => 21,
  "name_ar" => "أولاد حبابة",
  "name_fr" => "Ouled Habbaba"
   ],
   [
 "id" => 781,
 "wilaya_id" => 21,
 "name_ar" => "أم الطوب",
 "name_fr" => "Oum Toub"
  ],
   [
"id" => 782,
"wilaya_id" => 21,
"name_ar" => "رمضان جمال",
"name_fr" => "Ramdane Djamel"
 ],
   [
   "id" => 783,
   "wilaya_id" => 21,
   "name_ar" => "صالح بو الشعور",
   "name_fr" => "Salah Bouchaour"
],
   [
  "id" => 784,
  "wilaya_id" => 21,
  "name_ar" => "سيدي مزغيش",
  "name_fr" => "Sidi Mezghiche"
   ],
   [
 "id" => 785,
 "wilaya_id" => 21,
 "name_ar" => "سكيكدة",
 "name_fr" => "Skikda"
  ],
   [
"id" => 786,
"wilaya_id" => 21,
"name_ar" => "تمالوس",
"name_fr" => "Tamalous"
 ],
   [
   "id" => 787,
   "wilaya_id" => 21,
   "name_ar" => "زردازة",
   "name_fr" => "Zerdezas"
],
   [
  "id" => 788,
  "wilaya_id" => 21,
  "name_ar" => "الزيتونة",
  "name_fr" => "Zitouna"
   ],
   [
 "id" => 789,
 "wilaya_id" => 22,
 "name_ar" => "عين البرد",
 "name_fr" => "Ain El Berd"
  ],
   [
"id" => 790,
"wilaya_id" => 22,
"name_ar" => "عين قادة",
"name_fr" => "Ain Kada"
 ],
   [
   "id" => 791,
   "wilaya_id" => 22,
   "name_ar" => "عين الثريد",
   "name_fr" => "Ain Thrid"
],
   [
  "id" => 792,
  "wilaya_id" => 22,
  "name_ar" => "عين تندمين",
  "name_fr" => "Ain Tindamine"
   ],
   [
 "id" => 793,
 "wilaya_id" => 22,
 "name_ar" => "عين أدن",
 "name_fr" => "Ain- Adden"
  ],
   [
"id" => 794,
"wilaya_id" => 22,
"name_ar" => "العمارنة",
"name_fr" => "Amarnas"
 ],
   [
   "id" => 795,
   "wilaya_id" => 22,
   "name_ar" => "بضرابين المقراني",
   "name_fr" => "Bedrabine El Mokrani"
],
   [
  "id" => 796,
  "wilaya_id" => 22,
  "name_ar" => "بلعربي",
  "name_fr" => "Belarbi"
   ],
   [
 "id" => 797,
 "wilaya_id" => 22,
 "name_ar" => "بن باديس",
 "name_fr" => "Ben Badis"
  ],
   [
"id" => 798,
"wilaya_id" => 22,
"name_ar" => "بن عشيبة شلية",
"name_fr" => "Benachiba Chelia"
 ],
   [
   "id" => 799,
   "wilaya_id" => 22,
   "name_ar" => "بئر الحمام",
   "name_fr" => "Bir El Hammam"
],
   [
  "id" => 800,
  "wilaya_id" => 22,
  "name_ar" => "بوجبهة البرج",
  "name_fr" => "Boudjebaa El Bordj"
   ],
   [
 "id" => 801,
 "wilaya_id" => 22,
 "name_ar" => "بوخنفيس",
 "name_fr" => "Boukhanefis"
  ],
   [
"id" => 802,
"wilaya_id" => 22,
"name_ar" => "شيطوان البلايلة",
"name_fr" => "Chetouane Belaila"
 ],
   [
   "id" => 803,
   "wilaya_id" => 22,
   "name_ar" => "الضاية",
   "name_fr" => "Dhaya"
],
   [
  "id" => 804,
  "wilaya_id" => 22,
  "name_ar" => "الحصيبة",
  "name_fr" => "El Hacaiba"
   ],
   [
 "id" => 805,
 "wilaya_id" => 22,
 "name_ar" => "حاسي دحو",
 "name_fr" => "Hassi Dahou"
  ],
   [
"id" => 806,
"wilaya_id" => 22,
"name_ar" => "حاسي زهانة",
"name_fr" => "Hassi Zahana"
 ],
   [
   "id" => 807,
   "wilaya_id" => 22,
   "name_ar" => "لمطار",
   "name_fr" => "Lamtar"
],
   [
  "id" => 808,
  "wilaya_id" => 22,
  "name_ar" => "مكدرة",
  "name_fr" => "Makedra"
   ],
   [
 "id" => 809,
 "wilaya_id" => 22,
 "name_ar" => "مرحوم",
 "name_fr" => "Marhoum"
  ],
   [
"id" => 810,
"wilaya_id" => 22,
"name_ar" => "مسيد",
"name_fr" => "M'cid"
 ],
   [
   "id" => 811,
   "wilaya_id" => 22,
   "name_ar" => "مرين",
   "name_fr" => "Merine"
],
   [
  "id" => 812,
  "wilaya_id" => 22,
  "name_ar" => "مزاورو",
  "name_fr" => "Mezaourou"
   ],
   [
 "id" => 813,
 "wilaya_id" => 22,
 "name_ar" => "مصطفى بن ابراهيم",
 "name_fr" => "Mostefa  Ben Brahim"
  ],
   [
"id" => 814,
"wilaya_id" => 22,
"name_ar" => "مولاي سليسن",
"name_fr" => "Moulay Slissen"
 ],
   [
   "id" => 815,
   "wilaya_id" => 22,
   "name_ar" => "وادي السبع",
   "name_fr" => "Oued Sebaa"
],
   [
  "id" => 816,
  "wilaya_id" => 22,
  "name_ar" => "وادي سفيون",
  "name_fr" => "Oued Sefioun"
   ],
   [
 "id" => 817,
 "wilaya_id" => 22,
 "name_ar" => "وادي تاوريرة",
 "name_fr" => "Oued Taourira"
  ],
   [
"id" => 818,
"wilaya_id" => 22,
"name_ar" => "راس الماء",
"name_fr" => "Ras El Ma"
 ],
   [
   "id" => 819,
   "wilaya_id" => 22,
   "name_ar" => "رجم دموش",
   "name_fr" => "Redjem Demouche"
],
   [
  "id" => 820,
  "wilaya_id" => 22,
  "name_ar" => "السهالة الثورة",
  "name_fr" => "Sehala Thaoura"
   ],
   [
 "id" => 821,
 "wilaya_id" => 22,
 "name_ar" => "سفيزف",
 "name_fr" => "Sfisef"
  ],
   [
"id" => 822,
"wilaya_id" => 22,
"name_ar" => "سيدي علي بن يوب",
"name_fr" => "Sidi Ali Benyoub"
 ],
   [
   "id" => 823,
   "wilaya_id" => 22,
   "name_ar" => "سيدي علي بوسيدي",
   "name_fr" => "Sidi Ali Boussidi"
],
   [
  "id" => 824,
  "wilaya_id" => 22,
  "name_ar" => "سيدي بلعباس",
  "name_fr" => "Sidi Bel-Abbes"
   ],
   [
 "id" => 825,
 "wilaya_id" => 22,
 "name_ar" => "سيدي ابراهيم",
 "name_fr" => "Sidi Brahim"
  ],
   [
"id" => 826,
"wilaya_id" => 22,
"name_ar" => "سيدي شعيب",
"name_fr" => "Sidi Chaib"
 ],
   [
   "id" => 827,
   "wilaya_id" => 22,
   "name_ar" => "سيدي دحو الزاير",
   "name_fr" => "Sidi Dahou Zairs"
],
   [
  "id" => 828,
  "wilaya_id" => 22,
  "name_ar" => "سيدي حمادوش",
  "name_fr" => "Sidi Hamadouche"
   ],
   [
 "id" => 829,
 "wilaya_id" => 22,
 "name_ar" => "سيدي خالد",
 "name_fr" => "Sidi Khaled"
  ],
   [
"id" => 830,
"wilaya_id" => 22,
"name_ar" => "سيدي لحسن",
"name_fr" => "Sidi Lahcene"
 ],
   [
   "id" => 831,
   "wilaya_id" => 22,
   "name_ar" => "سيدي يعقوب",
   "name_fr" => "Sidi Yacoub"
],
   [
  "id" => 832,
  "wilaya_id" => 22,
  "name_ar" => "طابية",
  "name_fr" => "Tabia"
   ],
   [
 "id" => 833,
 "wilaya_id" => 22,
 "name_ar" => "تاودموت",
 "name_fr" => "Taoudmout"
  ],
   [
"id" => 834,
"wilaya_id" => 22,
"name_ar" => "تفسور",
"name_fr" => "Tefessour"
 ],
   [
   "id" => 835,
   "wilaya_id" => 22,
   "name_ar" => "تغاليمت",
   "name_fr" => "Teghalimet"
],
   [
  "id" => 836,
  "wilaya_id" => 22,
  "name_ar" => "تلاغ",
  "name_fr" => "Telagh"
   ],
   [
 "id" => 837,
 "wilaya_id" => 22,
 "name_ar" => "تنيرة",
 "name_fr" => "Tenira"
  ],
   [
"id" => 838,
"wilaya_id" => 22,
"name_ar" => "تسالة",
"name_fr" => "Tessala"
 ],
   [
   "id" => 839,
   "wilaya_id" => 22,
   "name_ar" => "تلموني",
   "name_fr" => "Tilmouni"
],
   [
  "id" => 840,
  "wilaya_id" => 22,
  "name_ar" => "زروالة",
  "name_fr" => "Zerouala"
   ],
   [
 "id" => 841,
 "wilaya_id" => 23,
 "name_ar" => "عين الباردة",
 "name_fr" => "Ain El Berda"
  ],
   [
"id" => 842,
"wilaya_id" => 23,
"name_ar" => "عنابة",
"name_fr" => "Annaba"
 ],
   [
   "id" => 843,
   "wilaya_id" => 23,
   "name_ar" => "برحال",
   "name_fr" => "Berrahal"
],
   [
  "id" => 844,
  "wilaya_id" => 23,
  "name_ar" => "شطايبي",
  "name_fr" => "Chetaibi"
   ],
   [
 "id" => 845,
 "wilaya_id" => 23,
 "name_ar" => "الشرفة",
 "name_fr" => "Cheurfa"
  ],
   [
"id" => 846,
"wilaya_id" => 23,
"name_ar" => "البوني",
"name_fr" => "El Bouni"
 ],
   [
   "id" => 847,
   "wilaya_id" => 23,
   "name_ar" => "العلمة",
   "name_fr" => "El Eulma"
],
   [
  "id" => 848,
  "wilaya_id" => 23,
  "name_ar" => "الحجار",
  "name_fr" => "El Hadjar"
   ],
   [
 "id" => 849,
 "wilaya_id" => 23,
 "name_ar" => "واد العنب",
 "name_fr" => "Oued El Aneb"
  ],
   [
"id" => 850,
"wilaya_id" => 23,
"name_ar" => "سرايدي",
"name_fr" => "Seraidi"
 ],
   [
   "id" => 851,
   "wilaya_id" => 23,
   "name_ar" => "سيدي عمار",
   "name_fr" => "Sidi Amar"
],
   [
  "id" => 852,
  "wilaya_id" => 23,
  "name_ar" => "التريعات",
  "name_fr" => "Treat"
   ],
   [
 "id" => 853,
 "wilaya_id" => 24,
 "name_ar" => "عين بن بيضاء",
 "name_fr" => "Ain Ben Beida"
  ],
   [
"id" => 854,
"wilaya_id" => 24,
"name_ar" => "عين العربي",
"name_fr" => "Ain Larbi"
 ],
   [
   "id" => 855,
   "wilaya_id" => 24,
   "name_ar" => "عين مخلوف",
   "name_fr" => "Ain Makhlouf"
],
   [
  "id" => 856,
  "wilaya_id" => 24,
  "name_ar" => "عين رقادة",
  "name_fr" => "Ain Regada"
   ],
   [
 "id" => 857,
 "wilaya_id" => 24,
 "name_ar" => "عين صندل",
 "name_fr" => "Ain Sandel"
  ],
   [
"id" => 858,
"wilaya_id" => 24,
"name_ar" => "بلخير",
"name_fr" => "Belkheir"
 ],
   [
   "id" => 859,
   "wilaya_id" => 24,
   "name_ar" => "بن جراح",
   "name_fr" => "Bendjarah"
],
   [
  "id" => 860,
  "wilaya_id" => 24,
  "name_ar" => "بني مزلين",
  "name_fr" => "Beni Mezline"
   ],
   [
 "id" => 861,
 "wilaya_id" => 24,
 "name_ar" => "برج صباط",
 "name_fr" => "Bordj Sabath"
  ],
   [
"id" => 862,
"wilaya_id" => 24,
"name_ar" => "بوحشانة",
"name_fr" => "Bou Hachana"
 ],
   [
   "id" => 863,
   "wilaya_id" => 24,
   "name_ar" => "بوحمدان",
   "name_fr" => "Bou Hamdane"
],
   [
  "id" => 864,
  "wilaya_id" => 24,
  "name_ar" => "بوعاتي محمود",
  "name_fr" => "Bouati Mahmoud"
   ],
   [
 "id" => 865,
 "wilaya_id" => 24,
 "name_ar" => "بوشقوف",
 "name_fr" => "Bouchegouf"
  ],
   [
"id" => 866,
"wilaya_id" => 24,
"name_ar" => "بومهرة أحمد",
"name_fr" => "Boumahra Ahmed"
 ],
   [
   "id" => 867,
   "wilaya_id" => 24,
   "name_ar" => "الدهوارة",
   "name_fr" => "Dahouara"
],
   [
  "id" => 868,
  "wilaya_id" => 24,
  "name_ar" => "جبالة الخميسي",
  "name_fr" => "Djeballah Khemissi"
   ],
   [
 "id" => 869,
 "wilaya_id" => 24,
 "name_ar" => "الفجوج",
 "name_fr" => "El Fedjoudj"
  ],
   [
"id" => 870,
"wilaya_id" => 24,
"name_ar" => "قلعة بوصبع",
"name_fr" => "Guelaat Bou Sbaa"
 ],
   [
   "id" => 871,
   "wilaya_id" => 24,
   "name_ar" => "قالمة",
   "name_fr" => "Guelma"
],
   [
  "id" => 872,
  "wilaya_id" => 24,
  "name_ar" => "حمام دباغ",
  "name_fr" => "Hammam Debagh"
   ],
   [
 "id" => 873,
 "wilaya_id" => 24,
 "name_ar" => "حمام النبايل",
 "name_fr" => "Hammam N'bail"
  ],
   [
"id" => 874,
"wilaya_id" => 24,
"name_ar" => "هيليوبوليس",
"name_fr" => "Heliopolis"
 ],
   [
   "id" => 875,
   "wilaya_id" => 24,
   "name_ar" => "نشماية",
   "name_fr" => "Nechmaya"
],
   [
  "id" => 876,
  "wilaya_id" => 24,
  "name_ar" => "لخزارة",
  "name_fr" => "Khezaras"
   ],
   [
 "id" => 877,
 "wilaya_id" => 24,
 "name_ar" => "مجاز عمار",
 "name_fr" => "Medjez Amar"
  ],
   [
"id" => 878,
"wilaya_id" => 24,
"name_ar" => "مجاز الصفاء",
"name_fr" => "Medjez Sfa"
 ],
   [
   "id" => 879,
   "wilaya_id" => 24,
   "name_ar" => "هواري بومدين",
   "name_fr" => "Houari Boumedienne"
],
   [
  "id" => 880,
  "wilaya_id" => 24,
  "name_ar" => "وادي الشحم",
  "name_fr" => "Oued Cheham"
   ],
   [
 "id" => 881,
 "wilaya_id" => 24,
 "name_ar" => "وادي فراغة",
 "name_fr" => "Oued Ferragha"
  ],
   [
"id" => 882,
"wilaya_id" => 24,
"name_ar" => "وادي الزناتي",
"name_fr" => "Oued Zenati"
 ],
   [
   "id" => 883,
   "wilaya_id" => 24,
   "name_ar" => "رأس العقبة",
   "name_fr" => "Ras El Agba"
],
   [
  "id" => 884,
  "wilaya_id" => 24,
  "name_ar" => "الركنية",
  "name_fr" => "Roknia"
   ],
   [
 "id" => 885,
 "wilaya_id" => 24,
 "name_ar" => "سلاوة عنونة",
 "name_fr" => "Sellaoua Announa"
  ],
   [
"id" => 886,
"wilaya_id" => 24,
"name_ar" => "تاملوكة",
"name_fr" => "Tamlouka"
 ],
   [
   "id" => 887,
   "wilaya_id" => 25,
   "name_ar" => "عين عبيد",
   "name_fr" => "Ain Abid"
],
   [
  "id" => 888,
  "wilaya_id" => 25,
  "name_ar" => "عين السمارة",
  "name_fr" => "Ain Smara"
   ],
   [
 "id" => 889,
 "wilaya_id" => 25,
 "name_ar" => "أبن باديس الهرية",
 "name_fr" => "Ben Badis"
  ],
   [
"id" => 890,
"wilaya_id" => 25,
"name_ar" => "بني حميدان",
"name_fr" => "Beni Hamidane"
 ],
   [
   "id" => 891,
   "wilaya_id" => 25,
   "name_ar" => "قسنطينة",
   "name_fr" => "Constantine"
],
   [
  "id" => 892,
  "wilaya_id" => 25,
  "name_ar" => "ديدوش مراد",
  "name_fr" => "Didouche Mourad"
   ],
   [
 "id" => 893,
 "wilaya_id" => 25,
 "name_ar" => "الخروب",
 "name_fr" => "El Khroub"
  ],
   [
"id" => 894,
"wilaya_id" => 25,
"name_ar" => "حامة بوزيان",
"name_fr" => "Hamma Bouziane"
 ],
   [
   "id" => 895,
   "wilaya_id" => 25,
   "name_ar" => "ابن زياد",
   "name_fr" => "Ibn Ziad"
],
   [
  "id" => 896,
  "wilaya_id" => 25,
  "name_ar" => "بوجريو مسعود",
  "name_fr" => "Messaoud Boudjeriou"
   ],
   [
 "id" => 897,
 "wilaya_id" => 25,
 "name_ar" => "أولاد رحمون",
 "name_fr" => "Ouled Rahmoun"
  ],
   [
"id" => 898,
"wilaya_id" => 25,
"name_ar" => "زيغود يوسف",
"name_fr" => "Zighoud Youcef"
 ],
   [
   "id" => 899,
   "wilaya_id" => 26,
   "name_ar" => "عين بوسيف",
   "name_fr" => "Ain Boucif"
],
   [
  "id" => 900,
  "wilaya_id" => 26,
  "name_ar" => "عين اقصير",
  "name_fr" => "Ain Ouksir"
   ],
   [
 "id" => 901,
 "wilaya_id" => 26,
 "name_ar" => "العيساوية",
 "name_fr" => "Aissaouia"
  ],
   [
"id" => 902,
"wilaya_id" => 26,
"name_ar" => "عزيز",
"name_fr" => "Aziz"
 ],
   [
   "id" => 903,
   "wilaya_id" => 26,
   "name_ar" => "بعطة",
   "name_fr" => "Baata"
],
   [
  "id" => 904,
  "wilaya_id" => 26,
  "name_ar" => "بن شكاو",
  "name_fr" => "Ben Chicao"
   ],
   [
 "id" => 905,
 "wilaya_id" => 26,
 "name_ar" => "بني سليمان",
 "name_fr" => "Beni Slimane"
  ],
   [
"id" => 906,
"wilaya_id" => 26,
"name_ar" => "البرواقية",
"name_fr" => "Berrouaghia"
 ],
   [
   "id" => 907,
   "wilaya_id" => 26,
   "name_ar" => "بئر بن عابد",
   "name_fr" => "Bir Ben Laabed"
],
   [
  "id" => 908,
  "wilaya_id" => 26,
  "name_ar" => "بوغار",
  "name_fr" => "Boghar"
   ],
   [
 "id" => 909,
 "wilaya_id" => 26,
 "name_ar" => "بوعيش",
 "name_fr" => "Bouaiche"
  ],
   [
"id" => 910,
"wilaya_id" => 26,
"name_ar" => "بوعيشون",
"name_fr" => "Bouaichoune"
 ],
   [
   "id" => 911,
   "wilaya_id" => 26,
   "name_ar" => "بوشراحيل",
   "name_fr" => "Bouchrahil"
],
   [
  "id" => 912,
  "wilaya_id" => 26,
  "name_ar" => "بوغزول",
  "name_fr" => "Boughzoul"
   ],
   [
 "id" => 913,
 "wilaya_id" => 26,
 "name_ar" => "بوسكن",
 "name_fr" => "Bouskene"
  ],
   [
"id" => 914,
"wilaya_id" => 26,
"name_ar" => "الشهبونية",
"name_fr" => "Chabounia"
 ],
   [
   "id" => 915,
   "wilaya_id" => 26,
   "name_ar" => "شلالة العذاورة",
   "name_fr" => "Chelalet El Adhaoura"
],
   [
  "id" => 916,
  "wilaya_id" => 26,
  "name_ar" => "شنيقل",
  "name_fr" => "Cheniguel"
   ],
   [
 "id" => 917,
 "wilaya_id" => 26,
 "name_ar" => "دراق",
 "name_fr" => "Derrag"
  ],
   [
"id" => 918,
"wilaya_id" => 26,
"name_ar" => "جواب",
"name_fr" => "Djouab"
 ],
   [
   "id" => 919,
   "wilaya_id" => 26,
   "name_ar" => "ذراع السمار",
   "name_fr" => "Draa Esmar"
],
   [
  "id" => 920,
  "wilaya_id" => 26,
  "name_ar" => "العزيزية",
  "name_fr" => "El Azizia"
   ],
   [
 "id" => 921,
 "wilaya_id" => 26,
 "name_ar" => "القلب الكبير",
 "name_fr" => "El Guelbelkebir"
  ],
   [
"id" => 922,
"wilaya_id" => 26,
"name_ar" => "الحمدانية",
"name_fr" => "El Hamdania"
 ],
   [
   "id" => 923,
   "wilaya_id" => 26,
   "name_ar" => "الحوضان",
   "name_fr" => "El Haoudane"
],
   [
  "id" => 924,
  "wilaya_id" => 26,
  "name_ar" => "العمارية",
  "name_fr" => "El Omaria"
   ],
   [
 "id" => 925,
 "wilaya_id" => 26,
 "name_ar" => "العوينات",
 "name_fr" => "El Ouinet"
  ],
   [
"id" => 926,
"wilaya_id" => 26,
"name_ar" => "حناشة",
"name_fr" => "Hannacha"
 ],
   [
   "id" => 927,
   "wilaya_id" => 26,
   "name_ar" => "الكاف الاخضر",
   "name_fr" => "Kef Lakhdar"
],
   [
  "id" => 928,
  "wilaya_id" => 26,
  "name_ar" => "خمس جوامع",
  "name_fr" => "Khams Djouamaa"
   ],
   [
 "id" => 929,
 "wilaya_id" => 26,
 "name_ar" => "قصر البخاري",
 "name_fr" => "Ksar El Boukhari"
  ],
   [
"id" => 930,
"wilaya_id" => 26,
"name_ar" => "مغراوة",
"name_fr" => "Maghraoua"
 ],
   [
   "id" => 931,
   "wilaya_id" => 26,
   "name_ar" => "المدية",
   "name_fr" => "Medea"
],
   [
  "id" => 932,
  "wilaya_id" => 26,
  "name_ar" => "مجبر",
  "name_fr" => "Medjebar"
   ],
   [
 "id" => 933,
 "wilaya_id" => 26,
 "name_ar" => "مزغنة",
 "name_fr" => "Mezerana"
  ],
   [
"id" => 934,
"wilaya_id" => 26,
"name_ar" => "مفاتحة",
"name_fr" => "M'fatha"
 ],
   [
   "id" => 935,
   "wilaya_id" => 26,
   "name_ar" => "ميهوب",
   "name_fr" => "Mihoub"
],
   [
  "id" => 936,
  "wilaya_id" => 26,
  "name_ar" => "عوامري",
  "name_fr" => "Ouamri"
   ],
   [
 "id" => 937,
 "wilaya_id" => 26,
 "name_ar" => "وادي حربيل",
 "name_fr" => "Oued Harbil"
  ],
   [
"id" => 938,
"wilaya_id" => 26,
"name_ar" => "أولاد عنتر",
"name_fr" => "Ouled Antar"
 ],
   [
   "id" => 939,
   "wilaya_id" => 26,
   "name_ar" => "أولاد بوعشرة",
   "name_fr" => "Ouled Bouachra"
],
   [
  "id" => 940,
  "wilaya_id" => 26,
  "name_ar" => "أولاد إبراهيم",
  "name_fr" => "Ouled Brahim"
   ],
   [
 "id" => 941,
 "wilaya_id" => 26,
 "name_ar" => "أولاد دايد",
 "name_fr" => "Ouled Deid"
  ],
   [
"id" => 942,
"wilaya_id" => 26,
"name_ar" => "أولاد امعرف",
"name_fr" => "Ouled Emaaraf"
 ],
   [
   "id" => 943,
   "wilaya_id" => 26,
   "name_ar" => "أولاد هلال",
   "name_fr" => "Ouled Hellal"
],
   [
  "id" => 944,
  "wilaya_id" => 26,
  "name_ar" => "أم الجليل",
  "name_fr" => "Oum El Djellil"
   ],
   [
 "id" => 945,
 "wilaya_id" => 26,
 "name_ar" => "وزرة",
 "name_fr" => "Ouzera"
  ],
   [
"id" => 946,
"wilaya_id" => 26,
"name_ar" => "الربعية",
"name_fr" => "Rebaia"
 ],
   [
   "id" => 947,
   "wilaya_id" => 26,
   "name_ar" => "السانق",
   "name_fr" => "Saneg"
],
   [
  "id" => 948,
  "wilaya_id" => 26,
  "name_ar" => "سدراية",
  "name_fr" => "Sedraya"
   ],
   [
 "id" => 949,
 "wilaya_id" => 26,
 "name_ar" => "سغوان",
 "name_fr" => "Seghouane"
  ],
   [
"id" => 950,
"wilaya_id" => 26,
"name_ar" => "سي المحجوب",
"name_fr" => "Si Mahdjoub"
 ],
   [
   "id" => 951,
   "wilaya_id" => 26,
   "name_ar" => "سيدي دامد",
   "name_fr" => "Sidi Demed"
],
   [
  "id" => 952,
  "wilaya_id" => 26,
  "name_ar" => "سيدي نعمان",
  "name_fr" => "Sidi Naamane"
   ],
   [
 "id" => 953,
 "wilaya_id" => 26,
 "name_ar" => "سيدي الربيع",
 "name_fr" => "Sidi Rabie"
  ],
   [
"id" => 954,
"wilaya_id" => 26,
"name_ar" => "سيدي زهار",
"name_fr" => "Sidi Zahar"
 ],
   [
   "id" => 955,
   "wilaya_id" => 26,
   "name_ar" => "سيدي زيان",
   "name_fr" => "Sidi Ziane"
],
   [
  "id" => 956,
  "wilaya_id" => 26,
  "name_ar" => "السواقي",
  "name_fr" => "Souagui"
   ],
   [
 "id" => 957,
 "wilaya_id" => 26,
 "name_ar" => "تابلاط",
 "name_fr" => "Tablat"
  ],
   [
"id" => 958,
"wilaya_id" => 26,
"name_ar" => "تفراوت",
"name_fr" => "Tafraout"
 ],
   [
   "id" => 959,
   "wilaya_id" => 26,
   "name_ar" => "تمسقيدة",
   "name_fr" => "Tamesguida"
],
   [
  "id" => 960,
  "wilaya_id" => 26,
  "name_ar" => "تيزي مهدي",
  "name_fr" => "Tizi Mahdi"
   ],
   [
 "id" => 961,
 "wilaya_id" => 26,
 "name_ar" => "ثلاث دوائر",
 "name_fr" => "Tletat Ed Douair"
  ],
   [
"id" => 962,
"wilaya_id" => 26,
"name_ar" => "الزبيرية",
"name_fr" => "Zoubiria"
 ],
   [
   "id" => 963,
   "wilaya_id" => 27,
   "name_ar" => "عشعاشة",
   "name_fr" => "Achaacha"
],
   [
  "id" => 964,
  "wilaya_id" => 27,
  "name_ar" => "عين بودينار",
  "name_fr" => "Ain-Boudinar"
   ],
   [
 "id" => 965,
 "wilaya_id" => 27,
 "name_ar" => "عين نويسي",
 "name_fr" => "Ain-Nouissy"
  ],
   [
"id" => 966,
"wilaya_id" => 27,
"name_ar" => "عين سيدي الشريف",
"name_fr" => "Ain-Sidi Cherif"
 ],
   [
   "id" => 967,
   "wilaya_id" => 27,
   "name_ar" => "عين تادلس",
   "name_fr" => "Ain-Tedles"
],
   [
  "id" => 968,
  "wilaya_id" => 27,
  "name_ar" => "بن عبد المالك رمضان",
  "name_fr" => "Benabdelmalek Ramdane"
   ],
   [
 "id" => 969,
 "wilaya_id" => 27,
 "name_ar" => "بوقيراط",
 "name_fr" => "Bouguirat"
  ],
   [
"id" => 970,
"wilaya_id" => 27,
"name_ar" => "فرناقة",
"name_fr" => "Fornaka"
 ],
   [
   "id" => 971,
   "wilaya_id" => 27,
   "name_ar" => "حجاج",
   "name_fr" => "Hadjadj"
],
   [
  "id" => 972,
  "wilaya_id" => 27,
  "name_ar" => "حاسي ماماش",
  "name_fr" => "Hassi Mameche"
   ],
   [
 "id" => 973,
 "wilaya_id" => 27,
 "name_ar" => "الحسيان (بني ياحي",
 "name_fr" => "Hassiane"
  ],
   [
"id" => 974,
"wilaya_id" => 27,
"name_ar" => "خضرة",
"name_fr" => "Khadra"
 ],
   [
   "id" => 975,
   "wilaya_id" => 27,
   "name_ar" => "خير الدين",
   "name_fr" => "Kheir-Eddine"
],
   [
  "id" => 976,
  "wilaya_id" => 27,
  "name_ar" => "منصورة",
  "name_fr" => "Mansourah"
   ],
   [
 "id" => 977,
 "wilaya_id" => 27,
 "name_ar" => "مزغران",
 "name_fr" => "Mazagran"
  ],
   [
"id" => 978,
"wilaya_id" => 27,
"name_ar" => "ماسرة",
"name_fr" => "Mesra"
 ],
   [
   "id" => 979,
   "wilaya_id" => 27,
   "name_ar" => "مستغانم",
   "name_fr" => "Mostaganem"
],
   [
  "id" => 980,
  "wilaya_id" => 27,
  "name_ar" => "نكمارية",
  "name_fr" => "Nekmaria"
   ],
   [
 "id" => 981,
 "wilaya_id" => 27,
 "name_ar" => "وادي الخير",
 "name_fr" => "Oued El Kheir"
  ],
   [
"id" => 982,
"wilaya_id" => 27,
"name_ar" => "أولاد بوغالم",
"name_fr" => "Ouled Boughalem"
 ],
   [
   "id" => 983,
   "wilaya_id" => 27,
   "name_ar" => "أولاد مع الله",
   "name_fr" => "Ouled-Maalah"
],
   [
  "id" => 984,
  "wilaya_id" => 27,
  "name_ar" => "صفصاف",
  "name_fr" => "Safsaf"
   ],
   [
 "id" => 985,
 "wilaya_id" => 27,
 "name_ar" => "صيادة",
 "name_fr" => "Sayada"
  ],
   [
"id" => 986,
"wilaya_id" => 27,
"name_ar" => "سيدي علي",
"name_fr" => "Sidi Ali"
 ],
   [
   "id" => 987,
   "wilaya_id" => 27,
   "name_ar" => "سيدي بلعطار",
   "name_fr" => "Sidi Belaattar"
],
   [
  "id" => 988,
  "wilaya_id" => 27,
  "name_ar" => "سيدي لخضر",
  "name_fr" => "Sidi-Lakhdar"
   ],
   [
 "id" => 989,
 "wilaya_id" => 27,
 "name_ar" => "سيرات",
 "name_fr" => "Sirat"
  ],
   [
"id" => 990,
"wilaya_id" => 27,
"name_ar" => "السوافلية",
"name_fr" => "Souaflia"
 ],
   [
   "id" => 991,
   "wilaya_id" => 27,
   "name_ar" => "سور",
   "name_fr" => "Sour"
],
   [
  "id" => 992,
  "wilaya_id" => 27,
  "name_ar" => "ستيدية",
  "name_fr" => "Stidia"
   ],
   [
 "id" => 993,
 "wilaya_id" => 27,
 "name_ar" => "تزقايت",
 "name_fr" => "Tazgait"
  ],
   [
"id" => 994,
"wilaya_id" => 27,
"name_ar" => "الطواهرية",
"name_fr" => "Touahria"
 ],
   [
   "id" => 995,
   "wilaya_id" => 28,
   "name_ar" => "عين الحجل",
   "name_fr" => "Ain El Hadjel"
],
   [
  "id" => 996,
  "wilaya_id" => 28,
  "name_ar" => "عين الملح",
  "name_fr" => "Ain El Melh"
   ],
   [
 "id" => 997,
 "wilaya_id" => 28,
 "name_ar" => "عين فارس",
 "name_fr" => "Ain Fares"
  ],
   [
"id" => 998,
"wilaya_id" => 28,
"name_ar" => "عين الخضراء",
"name_fr" => "Ain Khadra"
 ],
   [
   "id" => 999,
   "wilaya_id" => 28,
   "name_ar" => "عين الريش",
   "name_fr" => "Ain Rich"
],
   [
  "id" => 1000,
  "wilaya_id" => 28,
  "name_ar" => "بلعايبة",
  "name_fr" => "Belaiba"
   ],
   [
 "id" => 1001,
 "wilaya_id" => 28,
 "name_ar" => "بن سرور",
 "name_fr" => "Ben Srour"
  ],
   [
"id" => 1002,
"wilaya_id" => 28,
"name_ar" => "بني يلمان",
"name_fr" => "Beni Ilmane"
 ],
   [
   "id" => 1003,
   "wilaya_id" => 28,
   "name_ar" => "بن زوه",
   "name_fr" => "Benzouh"
],
   [
  "id" => 1004,
  "wilaya_id" => 28,
  "name_ar" => "برهوم",
  "name_fr" => "Berhoum"
   ],
   [
 "id" => 1005,
 "wilaya_id" => 28,
 "name_ar" => "بئر فضة",
 "name_fr" => "Bir Foda"
  ],
   [
"id" => 1006,
"wilaya_id" => 28,
"name_ar" => "بوسعادة",
"name_fr" => "Bou Saada"
 ],
   [
   "id" => 1007,
   "wilaya_id" => 28,
   "name_ar" => "بوطي السايح",
   "name_fr" => "Bouti Sayeh"
],
   [
  "id" => 1008,
  "wilaya_id" => 28,
  "name_ar" => "شلال",
  "name_fr" => "Chellal"
   ],
   [
 "id" => 1009,
 "wilaya_id" => 28,
 "name_ar" => "دهاهنة",
 "name_fr" => "Dehahna"
  ],
   [
"id" => 1010,
"wilaya_id" => 28,
"name_ar" => "جبل مساعد",
"name_fr" => "Djebel Messaad"
 ],
   [
   "id" => 1011,
   "wilaya_id" => 28,
   "name_ar" => "الهامل",
   "name_fr" => "El Hamel"
],
   [
  "id" => 1012,
  "wilaya_id" => 28,
  "name_ar" => "الحوامد",
  "name_fr" => "El Houamed"
   ],
   [
 "id" => 1013,
 "wilaya_id" => 28,
 "name_ar" => "حمام الضلعة",
 "name_fr" => "Hammam Dalaa"
  ],
   [
"id" => 1014,
"wilaya_id" => 28,
"name_ar" => "خطوطي سد الجير",
"name_fr" => "Khettouti Sed-El-Jir"
 ],
   [
   "id" => 1015,
   "wilaya_id" => 28,
   "name_ar" => "خبانة",
   "name_fr" => "Khoubana"
],
   [
  "id" => 1016,
  "wilaya_id" => 28,
  "name_ar" => "المعاضيد",
  "name_fr" => "Maadid"
   ],
   [
 "id" => 1017,
 "wilaya_id" => 28,
 "name_ar" => "معاريف",
 "name_fr" => "Maarif"
  ],
   [
"id" => 1018,
"wilaya_id" => 28,
"name_ar" => "مقرة",
"name_fr" => "Magra"
 ],
   [
   "id" => 1019,
   "wilaya_id" => 28,
   "name_ar" => "مسيف",
   "name_fr" => "M'cif"
],
   [
  "id" => 1020,
  "wilaya_id" => 28,
  "name_ar" => "امجدل",
  "name_fr" => "Medjedel"
   ],
   [
 "id" => 1021,
 "wilaya_id" => 28,
 "name_ar" => "مناعة",
 "name_fr" => "Menaa"
  ],
   [
"id" => 1022,
"wilaya_id" => 28,
"name_ar" => "محمد بوضياف",
"name_fr" => "Mohamed Boudiaf"
 ],
   [
   "id" => 1023,
   "wilaya_id" => 28,
   "name_ar" => "المسيلة",
   "name_fr" => "M'sila"
],
   [
  "id" => 1024,
  "wilaya_id" => 28,
  "name_ar" => "المطارفة",
  "name_fr" => "M'tarfa"
   ],
   [
 "id" => 1025,
 "wilaya_id" => 28,
 "name_ar" => "ونوغة",
 "name_fr" => "Ouanougha"
  ],
   [
"id" => 1026,
"wilaya_id" => 28,
"name_ar" => "أولاد عدي لقبالة",
"name_fr" => "Ouled Addi Guebala"
 ],
   [
   "id" => 1027,
   "wilaya_id" => 28,
   "name_ar" => "أولاد دراج",
   "name_fr" => "Ouled Derradj"
],
   [
  "id" => 1028,
  "wilaya_id" => 28,
  "name_ar" => "أولاد ماضي",
  "name_fr" => "Ouled Madhi"
   ],
   [
 "id" => 1029,
 "wilaya_id" => 28,
 "name_ar" => "أولاد منصور",
 "name_fr" => "Ouled Mansour"
  ],
   [
"id" => 1030,
"wilaya_id" => 28,
"name_ar" => "أولاد سيدي ابراهيم",
"name_fr" => "Ouled Sidi Brahim"
 ],
   [
   "id" => 1031,
   "wilaya_id" => 28,
   "name_ar" => "أولاد سليمان",
   "name_fr" => "Ouled Slimane"
],
   [
  "id" => 1032,
  "wilaya_id" => 28,
  "name_ar" => "ولتام",
  "name_fr" => "Oulteme"
   ],
   [
 "id" => 1033,
 "wilaya_id" => 28,
 "name_ar" => "سيدي عيسى",
 "name_fr" => "Sidi Aissa"
  ],
   [
"id" => 1034,
"wilaya_id" => 28,
"name_ar" => "سيدي عامر",
"name_fr" => "Sidi Ameur"
 ],
   [
   "id" => 1035,
   "wilaya_id" => 28,
   "name_ar" => "سيدي هجرس",
   "name_fr" => "Sidi Hadjeres"
],
   [
  "id" => 1036,
  "wilaya_id" => 28,
  "name_ar" => "سيدي امحمد",
  "name_fr" => "Sidi M'hamed"
   ],
   [
 "id" => 1037,
 "wilaya_id" => 28,
 "name_ar" => "سليم",
 "name_fr" => "Slim"
  ],
   [
"id" => 1038,
"wilaya_id" => 28,
"name_ar" => "السوامع",
"name_fr" => "Souamaa"
 ],
   [
   "id" => 1039,
   "wilaya_id" => 28,
   "name_ar" => "تامسة",
   "name_fr" => "Tamsa"
],
   [
  "id" => 1040,
  "wilaya_id" => 28,
  "name_ar" => "تارمونت",
  "name_fr" => "Tarmount"
   ],
   [
 "id" => 1041,
 "wilaya_id" => 28,
 "name_ar" => "زرزور",
 "name_fr" => "Zarzour"
  ],
   [
"id" => 1042,
"wilaya_id" => 29,
"name_ar" => "عين فارس",
"name_fr" => "Ain Fares"
 ],
   [
   "id" => 1043,
   "wilaya_id" => 29,
   "name_ar" => "عين فكان",
   "name_fr" => "Ain Fekan"
],
   [
  "id" => 1044,
  "wilaya_id" => 29,
  "name_ar" => "عين فراح",
  "name_fr" => "Ain Ferah"
   ],
   [
 "id" => 1045,
 "wilaya_id" => 29,
 "name_ar" => "عين أفرص",
 "name_fr" => "Ain Frass"
  ],
   [
"id" => 1046,
"wilaya_id" => 29,
"name_ar" => "العلايمية",
"name_fr" => "Alaimia"
 ],
   [
   "id" => 1047,
   "wilaya_id" => 29,
   "name_ar" => "عوف",
   "name_fr" => "Aouf"
],
   [
  "id" => 1048,
  "wilaya_id" => 29,
  "name_ar" => "بنيان",
  "name_fr" => "Benian"
   ],
   [
 "id" => 1049,
 "wilaya_id" => 29,
 "name_ar" => "بوهني",
 "name_fr" => "Bou Henni"
  ],
   [
"id" => 1050,
"wilaya_id" => 29,
"name_ar" => "بوحنيفية",
"name_fr" => "Bouhanifia"
 ],
   [
   "id" => 1051,
   "wilaya_id" => 29,
   "name_ar" => "الشرفاء",
   "name_fr" => "Chorfa"
],
   [
  "id" => 1052,
  "wilaya_id" => 29,
  "name_ar" => "البرج",
  "name_fr" => "El Bordj"
   ],
   [
 "id" => 1053,
 "wilaya_id" => 29,
 "name_ar" => "القعدة",
 "name_fr" => "El Gaada"
  ],
   [
"id" => 1054,
"wilaya_id" => 29,
"name_ar" => "الغمري",
"name_fr" => "El Ghomri"
 ],
   [
   "id" => 1055,
   "wilaya_id" => 29,
   "name_ar" => "القطنة",
   "name_fr" => "El Gueitena"
],
   [
  "id" => 1056,
  "wilaya_id" => 29,
  "name_ar" => "الحشم",
  "name_fr" => "El Hachem"
   ],
   [
 "id" => 1057,
 "wilaya_id" => 29,
 "name_ar" => "القرط",
 "name_fr" => "El Keurt"
  ],
   [
"id" => 1058,
"wilaya_id" => 29,
"name_ar" => "المأمونية",
"name_fr" => "El Mamounia"
 ],
   [
   "id" => 1059,
   "wilaya_id" => 29,
   "name_ar" => "المنور",
   "name_fr" => "El Menaouer"
],
   [
  "id" => 1060,
  "wilaya_id" => 29,
  "name_ar" => "فراقيق",
  "name_fr" => "Ferraguig"
   ],
   [
 "id" => 1061,
 "wilaya_id" => 29,
 "name_ar" => "فروحة",
 "name_fr" => "Froha"
  ],
   [
"id" => 1062,
"wilaya_id" => 29,
"name_ar" => "غروس",
"name_fr" => "Gharrous"
 ],
   [
   "id" => 1063,
   "wilaya_id" => 29,
   "name_ar" => "غريس",
   "name_fr" => "Ghriss"
],
   [
  "id" => 1064,
  "wilaya_id" => 29,
  "name_ar" => "قرجوم",
  "name_fr" => "Guerdjoum"
   ],
   [
 "id" => 1065,
 "wilaya_id" => 29,
 "name_ar" => "حسين",
 "name_fr" => "Hacine"
  ],
   [
"id" => 1066,
"wilaya_id" => 29,
"name_ar" => "خلوية",
"name_fr" => "Khalouia"
 ],
   [
   "id" => 1067,
   "wilaya_id" => 29,
   "name_ar" => "ماقضة",
   "name_fr" => "Makhda"
],
   [
  "id" => 1068,
  "wilaya_id" => 29,
  "name_ar" => "ماوسة",
  "name_fr" => "Maoussa"
   ],
   [
 "id" => 1069,
 "wilaya_id" => 29,
 "name_ar" => "معسكر",
 "name_fr" => "Mascara"
  ],
   [
"id" => 1070,
"wilaya_id" => 29,
"name_ar" => "المطمور",
"name_fr" => "Matemore"
 ],
   [
   "id" => 1071,
   "wilaya_id" => 29,
   "name_ar" => "مقطع الدوز",
   "name_fr" => "Mocta-Douz"
],
   [
  "id" => 1072,
  "wilaya_id" => 29,
  "name_ar" => "المحمدية",
  "name_fr" => "Mohammadia"
   ],
   [
 "id" => 1073,
 "wilaya_id" => 29,
 "name_ar" => "نسمط",
 "name_fr" => "Nesmot"
  ],
   [
"id" => 1074,
"wilaya_id" => 29,
"name_ar" => "عقاز",
"name_fr" => "Oggaz"
 ],
   [
   "id" => 1075,
   "wilaya_id" => 29,
   "name_ar" => "وادي الأبطال",
   "name_fr" => "Oued El Abtal"
],
   [
  "id" => 1076,
  "wilaya_id" => 29,
  "name_ar" => "وادي التاغية",
  "name_fr" => "Oued Taria"
   ],
   [
 "id" => 1077,
 "wilaya_id" => 29,
 "name_ar" => "رأس عين عميروش",
 "name_fr" => "Ras El Ain Amirouche"
  ],
   [
"id" => 1078,
"wilaya_id" => 29,
"name_ar" => "سجرارة",
"name_fr" => "Sedjerara"
 ],
   [
   "id" => 1079,
   "wilaya_id" => 29,
   "name_ar" => "السهايلية",
   "name_fr" => "Sehailia"
],
   [
  "id" => 1080,
  "wilaya_id" => 29,
  "name_ar" => "سيدي عبد الجبار",
  "name_fr" => "Sidi Abdeldjebar"
   ],
   [
 "id" => 1081,
 "wilaya_id" => 29,
 "name_ar" => "سيدي عبد المومن",
 "name_fr" => "Sidi Abdelmoumene"
  ],
   [
"id" => 1082,
"wilaya_id" => 29,
"name_ar" => "سيدي بوسعيد",
"name_fr" => "Sidi Boussaid"
 ],
   [
   "id" => 1083,
   "wilaya_id" => 29,
   "name_ar" => "سيدي قادة",
   "name_fr" => "Sidi Kada"
],
   [
  "id" => 1084,
  "wilaya_id" => 29,
  "name_ar" => "سيق",
  "name_fr" => "Sig"
   ],
   [
 "id" => 1085,
 "wilaya_id" => 29,
 "name_ar" => "تيغنيف",
 "name_fr" => "Tighennif"
  ],
   [
"id" => 1086,
"wilaya_id" => 29,
"name_ar" => "تيزي",
"name_fr" => "Tizi"
 ],
   [
   "id" => 1087,
   "wilaya_id" => 29,
   "name_ar" => "زهانة",
   "name_fr" => "Zahana"
],
   [
  "id" => 1088,
  "wilaya_id" => 29,
  "name_ar" => "زلامطة",
  "name_fr" => "Zelamta"
   ],
   [
 "id" => 1089,
 "wilaya_id" => 30,
 "name_ar" => "عين البيضاء",
 "name_fr" => "Ain Beida"
  ],
   [
"id" => 1090,
"wilaya_id" => 55,
"name_ar" => "بن ناصر",
"name_fr" => "Benaceur"
 ],
   [
   "id" => 1091,
   "wilaya_id" => 55,
   "name_ar" => "بلدة اعمر",
   "name_fr" => "Blidet Amor"
],
   [
  "id" => 1092,
  "wilaya_id" => 55,
  "name_ar" => "العالية",
  "name_fr" => "El Alia"
   ],
   [
 "id" => 1093,
 "wilaya_id" => 30,
 "name_ar" => "البرمة",
 "name_fr" => "El Borma"
  ],
   [
"id" => 1094,
"wilaya_id" => 55,
"name_ar" => "الحجيرة",
"name_fr" => "El-Hadjira"
 ],
   [
   "id" => 1095,
   "wilaya_id" => 30,
   "name_ar" => "حاسي بن عبد الله",
   "name_fr" => "Hassi Ben Abdellah"
],
   [
  "id" => 1096,
  "wilaya_id" => 30,
  "name_ar" => "حاسي مسعود",
  "name_fr" => "Hassi Messaoud"
   ],
   [
 "id" => 1097,
 "wilaya_id" => 55,
 "name_ar" => "المقارين",
 "name_fr" => "Megarine"
  ],
   [
"id" => 1098,
"wilaya_id" => 55,
"name_ar" => "المنقر",
"name_fr" => "M'naguer"
 ],
   [
   "id" => 1099,
   "wilaya_id" => 55,
   "name_ar" => "النزلة",
   "name_fr" => "Nezla"
],
   [
  "id" => 1100,
  "wilaya_id" => 30,
  "name_ar" => "انقوسة",
  "name_fr" => "N'goussa"
   ],
   [
 "id" => 1101,
 "wilaya_id" => 30,
 "name_ar" => "ورقلة",
 "name_fr" => "Ouargla"
  ],
   [
"id" => 1102,
"wilaya_id" => 30,
"name_ar" => "الرويسات",
"name_fr" => "Rouissat"
 ],
   [
   "id" => 1103,
   "wilaya_id" => 30,
   "name_ar" => "سيدي خويلد",
   "name_fr" => "Sidi Khouiled"
],
   [
  "id" => 1104,
  "wilaya_id" => 55,
  "name_ar" => "سيدي سليمان",
  "name_fr" => "Sidi Slimane"
   ],
   [
 "id" => 1105,
 "wilaya_id" => 55,
 "name_ar" => "الطيبات",
 "name_fr" => "Taibet"
  ],
   [
"id" => 1106,
"wilaya_id" => 55,
"name_ar" => "تبسبست",
"name_fr" => "Tebesbest"
 ],
   [
   "id" => 1107,
   "wilaya_id" => 55,
   "name_ar" => "تماسين",
   "name_fr" => "Temacine"
],
   [
  "id" => 1108,
  "wilaya_id" => 55,
  "name_ar" => "تقرت",
  "name_fr" => "Touggourt"
   ],
   [
 "id" => 1109,
 "wilaya_id" => 55,
 "name_ar" => "الزاوية العابدية",
 "name_fr" => "Zaouia El Abidia"
  ],
   [
"id" => 1110,
"wilaya_id" => 31,
"name_ar" => "عين البية",
"name_fr" => "Ain Biya"
 ],
   [
   "id" => 1111,
   "wilaya_id" => 31,
   "name_ar" => "عين الكرمة",
   "name_fr" => "Ain Kerma"
],
   [
  "id" => 1112,
  "wilaya_id" => 31,
  "name_ar" => "عين الترك",
  "name_fr" => "Ain Turk"
   ],
   [
 "id" => 1113,
 "wilaya_id" => 31,
 "name_ar" => "أرزيو",
 "name_fr" => "Arzew"
  ],
   [
"id" => 1114,
"wilaya_id" => 31,
"name_ar" => "بن فريحة",
"name_fr" => "Ben Freha"
 ],
   [
   "id" => 1115,
   "wilaya_id" => 31,
   "name_ar" => "بطيوة",
   "name_fr" => "Bethioua"
],
   [
  "id" => 1116,
  "wilaya_id" => 31,
  "name_ar" => "بئر الجير",
  "name_fr" => "Bir El Djir"
   ],
   [
 "id" => 1117,
 "wilaya_id" => 31,
 "name_ar" => "بوفاتيس",
 "name_fr" => "Boufatis"
  ],
   [
"id" => 1118,
"wilaya_id" => 31,
"name_ar" => "بوسفر",
"name_fr" => "Bousfer"
 ],
   [
   "id" => 1119,
   "wilaya_id" => 31,
   "name_ar" => "بوتليليس",
   "name_fr" => "Boutlelis"
],
   [
  "id" => 1120,
  "wilaya_id" => 31,
  "name_ar" => "العنصر",
  "name_fr" => "El Ancor"
   ],
   [
 "id" => 1121,
 "wilaya_id" => 31,
 "name_ar" => "البراية",
 "name_fr" => "El Braya"
  ],
   [
"id" => 1122,
"wilaya_id" => 31,
"name_ar" => "الكرمة",
"name_fr" => "El Kerma"
 ],
   [
   "id" => 1123,
   "wilaya_id" => 31,
   "name_ar" => "السانية",
   "name_fr" => "Es Senia"
],
   [
  "id" => 1124,
  "wilaya_id" => 31,
  "name_ar" => "قديل",
  "name_fr" => "Gdyel"
   ],
   [
 "id" => 1125,
 "wilaya_id" => 31,
 "name_ar" => "حاسي بن عقبة",
 "name_fr" => "Hassi Ben Okba"
  ],
   [
"id" => 1126,
"wilaya_id" => 31,
"name_ar" => "حاسي بونيف",
"name_fr" => "Hassi Bounif"
 ],
   [
   "id" => 1127,
   "wilaya_id" => 31,
   "name_ar" => "حاسي مفسوخ",
   "name_fr" => "Hassi Mefsoukh"
],
   [
  "id" => 1128,
  "wilaya_id" => 31,
  "name_ar" => "مرسى الحجاج",
  "name_fr" => "Marsat El Hadjadj"
   ],
   [
 "id" => 1129,
 "wilaya_id" => 31,
 "name_ar" => "المرسى الكبير",
 "name_fr" => "Mers El Kebir"
  ],
   [
"id" => 1130,
"wilaya_id" => 31,
"name_ar" => "مسرغين",
"name_fr" => "Messerghin"
 ],
   [
   "id" => 1131,
   "wilaya_id" => 31,
   "name_ar" => "وهران",
   "name_fr" => "Oran"
],
   [
  "id" => 1132,
  "wilaya_id" => 31,
  "name_ar" => "وادي تليلات",
  "name_fr" => "Oued Tlelat"
   ],
   [
 "id" => 1133,
 "wilaya_id" => 31,
 "name_ar" => "سيدي بن يبقى",
 "name_fr" => "Sidi Ben Yebka"
  ],
   [
"id" => 1134,
"wilaya_id" => 31,
"name_ar" => "سيدي الشحمي",
"name_fr" => "Sidi Chami"
 ],
   [
   "id" => 1135,
   "wilaya_id" => 31,
   "name_ar" => "طفراوي",
   "name_fr" => "Tafraoui"
],
   [
  "id" => 1136,
  "wilaya_id" => 32,
  "name_ar" => "عين العراك",
  "name_fr" => "Ain El Orak"
   ],
   [
 "id" => 1137,
 "wilaya_id" => 32,
 "name_ar" => "اربوات",
 "name_fr" => "Arbaouat"
  ],
   [
"id" => 1138,
"wilaya_id" => 32,
"name_ar" => "بوعلام",
"name_fr" => "Boualem"
 ],
   [
   "id" => 1139,
   "wilaya_id" => 32,
   "name_ar" => "بوقطب",
   "name_fr" => "Bougtoub"
],
   [
  "id" => 1140,
  "wilaya_id" => 32,
  "name_ar" => "بوسمغون",
  "name_fr" => "Boussemghoun"
   ],
   [
 "id" => 1141,
 "wilaya_id" => 32,
 "name_ar" => "بريزينة",
 "name_fr" => "Brezina"
  ],
   [
"id" => 1142,
"wilaya_id" => 32,
"name_ar" => "الشقيق",
"name_fr" => "Cheguig"
 ],
   [
   "id" => 1143,
   "wilaya_id" => 32,
   "name_ar" => "شلالة",
   "name_fr" => "Chellala"
],
   [
  "id" => 1144,
  "wilaya_id" => 32,
  "name_ar" => "البيض",
  "name_fr" => "El Bayadh"
   ],
   [
 "id" => 1145,
 "wilaya_id" => 32,
 "name_ar" => "الأبيض سيدي الشيخ",
 "name_fr" => "Labiodh Sidi Cheikh"
  ],
   [
"id" => 1146,
"wilaya_id" => 32,
"name_ar" => "البنود",
"name_fr" => "El Bnoud"
 ],
   [
   "id" => 1147,
   "wilaya_id" => 32,
   "name_ar" => "الخيثر",
   "name_fr" => "El Kheiter"
],
   [
  "id" => 1148,
  "wilaya_id" => 32,
  "name_ar" => "المحرة",
  "name_fr" => "El Mehara"
   ],
   [
 "id" => 1149,
 "wilaya_id" => 32,
 "name_ar" => "الغاسول",
 "name_fr" => "Ghassoul"
  ],
   [
"id" => 1150,
"wilaya_id" => 32,
"name_ar" => "الكاف الأحمر",
"name_fr" => "Kef El Ahmar"
 ],
   [
   "id" => 1151,
   "wilaya_id" => 32,
   "name_ar" => "كراكدة",
   "name_fr" => "Krakda"
],
   [
  "id" => 1152,
  "wilaya_id" => 32,
  "name_ar" => "رقاصة",
  "name_fr" => "Rogassa"
   ],
   [
 "id" => 1153,
 "wilaya_id" => 32,
 "name_ar" => "سيدي عامر",
 "name_fr" => "Sidi Ameur"
  ],
   [
"id" => 1154,
"wilaya_id" => 32,
"name_ar" => "سيدي سليمان",
"name_fr" => "Sidi Slimane"
 ],
   [
   "id" => 1155,
   "wilaya_id" => 32,
   "name_ar" => "سيدي طيفور",
   "name_fr" => "Sidi Tiffour"
],
   [
  "id" => 1156,
  "wilaya_id" => 32,
  "name_ar" => "ستيتن",
  "name_fr" => "Stitten"
   ],
   [
 "id" => 1157,
 "wilaya_id" => 32,
 "name_ar" => "توسمولين",
 "name_fr" => "Tousmouline"
  ],
   [
"id" => 1158,
"wilaya_id" => 56,
"name_ar" => "برج الحواس",
"name_fr" => "Bordj El Haouass"
 ],
   [
   "id" => 1159,
   "wilaya_id" => 33,
   "name_ar" => "برج عمر إدريس",
   "name_fr" => "Bordj Omar Driss"
],
   [
  "id" => 1160,
  "wilaya_id" => 33,
  "name_ar" => "دبداب",
  "name_fr" => "Debdeb"
   ],
   [
 "id" => 1161,
 "wilaya_id" => 56,
 "name_ar" => "جانت",
 "name_fr" => "Djanet"
  ],
   [
"id" => 1162,
"wilaya_id" => 33,
"name_ar" => "إيليزي",
"name_fr" => "Illizi"
 ],
   [
   "id" => 1163,
   "wilaya_id" => 33,
   "name_ar" => "إن أمناس",
   "name_fr" => "In Amenas"
],
   [
  "id" => 1164,
  "wilaya_id" => 34,
  "name_ar" => "عين تاغروت",
  "name_fr" => "Ain Taghrout"
   ],
   [
 "id" => 1165,
 "wilaya_id" => 34,
 "name_ar" => "عين تسرة",
 "name_fr" => "Ain Tesra"
  ],
   [
"id" => 1166,
"wilaya_id" => 34,
"name_ar" => "برج بوعريرج",
"name_fr" => "B. B. Arreridj"
 ],
   [
   "id" => 1167,
   "wilaya_id" => 34,
   "name_ar" => "بليمور",
   "name_fr" => "Belimour"
],
   [
  "id" => 1168,
  "wilaya_id" => 34,
  "name_ar" => "بن داود",
  "name_fr" => "Ben Daoud"
   ],
   [
 "id" => 1169,
 "wilaya_id" => 34,
 "name_ar" => "بئر قاصد علي",
 "name_fr" => "Bir Kasdali"
  ],
   [
"id" => 1170,
"wilaya_id" => 34,
"name_ar" => "برج الغدير",
"name_fr" => "Bordj Ghedir"
 ],
   [
   "id" => 1171,
   "wilaya_id" => 34,
   "name_ar" => "برج زمورة",
   "name_fr" => "Bordj Zemmoura"
],
   [
  "id" => 1172,
  "wilaya_id" => 34,
  "name_ar" => "القلة",
  "name_fr" => "Colla"
   ],
   [
 "id" => 1173,
 "wilaya_id" => 34,
 "name_ar" => "جعافرة",
 "name_fr" => "Djaafra"
  ],
   [
"id" => 1174,
"wilaya_id" => 34,
"name_ar" => "العش",
"name_fr" => "El Euch"
 ],
   [
   "id" => 1175,
   "wilaya_id" => 34,
   "name_ar" => "الياشير",
   "name_fr" => "El Achir"
],
   [
  "id" => 1176,
  "wilaya_id" => 34,
  "name_ar" => "العناصر",
  "name_fr" => "El Annasseur"
   ],
   [
 "id" => 1177,
 "wilaya_id" => 34,
 "name_ar" => "الحمادية",
 "name_fr" => "Elhammadia"
  ],
   [
"id" => 1178,
"wilaya_id" => 34,
"name_ar" => "الماين",
"name_fr" => "El Main"
 ],
   [
   "id" => 1179,
   "wilaya_id" => 34,
   "name_ar" => "المهير",
   "name_fr" => "El M'hir"
],
   [
  "id" => 1180,
  "wilaya_id" => 34,
  "name_ar" => "غيلاسة",
  "name_fr" => "Ghailasa"
   ],
   [
 "id" => 1181,
 "wilaya_id" => 34,
 "name_ar" => "حرازة",
 "name_fr" => "Haraza"
  ],
   [
"id" => 1182,
"wilaya_id" => 34,
"name_ar" => "حسناوة",
"name_fr" => "Hasnaoua"
 ],
   [
   "id" => 1183,
   "wilaya_id" => 34,
   "name_ar" => "خليل",
   "name_fr" => "Khelil"
],
   [
  "id" => 1184,
  "wilaya_id" => 34,
  "name_ar" => "القصور",
  "name_fr" => "Ksour"
   ],
   [
 "id" => 1185,
 "wilaya_id" => 34,
 "name_ar" => "المنصورة",
 "name_fr" => "Mansoura"
  ],
   [
"id" => 1186,
"wilaya_id" => 34,
"name_ar" => "مجانة",
"name_fr" => "Medjana"
 ],
   [
   "id" => 1187,
   "wilaya_id" => 34,
   "name_ar" => "أولاد أبراهم",
   "name_fr" => "Ouled Brahem"
],
   [
  "id" => 1188,
  "wilaya_id" => 34,
  "name_ar" => "أولاد دحمان",
  "name_fr" => "Ouled Dahmane"
   ],
   [
 "id" => 1189,
 "wilaya_id" => 34,
 "name_ar" => "أولاد سيدي ابراهيم",
 "name_fr" => "Ouled Sidi-Brahim"
  ],
   [
"id" => 1190,
"wilaya_id" => 34,
"name_ar" => "الرابطة",
"name_fr" => "Rabta"
 ],
   [
   "id" => 1191,
   "wilaya_id" => 34,
   "name_ar" => "رأس الوادي",
   "name_fr" => "Ras El Oued"
],
   [
  "id" => 1192,
  "wilaya_id" => 34,
  "name_ar" => "سيدي أمبارك",
  "name_fr" => "Sidi-Embarek"
   ],
   [
 "id" => 1193,
 "wilaya_id" => 34,
 "name_ar" => "تفرق",
 "name_fr" => "Tefreg"
  ],
   [
"id" => 1194,
"wilaya_id" => 34,
"name_ar" => "تقلعيت",
"name_fr" => "Taglait"
 ],
   [
   "id" => 1195,
   "wilaya_id" => 34,
   "name_ar" => "تسامرت",
   "name_fr" => "Tassamert"
],
   [
  "id" => 1196,
  "wilaya_id" => 34,
  "name_ar" => "ثنية النصر",
  "name_fr" => "Teniet En Nasr"
   ],
   [
 "id" => 1197,
 "wilaya_id" => 34,
 "name_ar" => "تيكستار",
 "name_fr" => "Tixter"
  ],
   [
"id" => 1198,
"wilaya_id" => 35,
"name_ar" => "أعفير",
"name_fr" => "Afir"
 ],
   [
   "id" => 1199,
   "wilaya_id" => 35,
   "name_ar" => "عمال",
   "name_fr" => "Ammal"
],
   [
  "id" => 1200,
  "wilaya_id" => 35,
  "name_ar" => "بغلية",
  "name_fr" => "Baghlia"
   ],
   [
 "id" => 1201,
 "wilaya_id" => 35,
 "name_ar" => "بن شود",
 "name_fr" => "Ben Choud"
  ],
   [
"id" => 1202,
"wilaya_id" => 35,
"name_ar" => "بني عمران",
"name_fr" => "Beni Amrane"
 ],
   [
   "id" => 1203,
   "wilaya_id" => 35,
   "name_ar" => "برج منايل",
   "name_fr" => "Bordj Menaiel"
],
   [
  "id" => 1204,
  "wilaya_id" => 35,
  "name_ar" => "بودواو",
  "name_fr" => "Boudouaou"
   ],
   [
 "id" => 1205,
 "wilaya_id" => 35,
 "name_ar" => "بودواو البحري",
 "name_fr" => "Boudouaou El Bahri"
  ],
   [
"id" => 1206,
"wilaya_id" => 35,
"name_ar" => "بومرداس",
"name_fr" => "Boumerdes"
 ],
   [
   "id" => 1207,
   "wilaya_id" => 35,
   "name_ar" => "بوزقزة قدارة",
   "name_fr" => "Bouzegza Keddara"
],
   [
  "id" => 1208,
  "wilaya_id" => 35,
  "name_ar" => "شعبة العامر",
  "name_fr" => "Chabet El Ameur"
   ],
   [
 "id" => 1209,
 "wilaya_id" => 35,
 "name_ar" => "قورصو",
 "name_fr" => "Corso"
  ],
   [
"id" => 1210,
"wilaya_id" => 35,
"name_ar" => "دلس",
"name_fr" => "Dellys"
 ],
   [
   "id" => 1211,
   "wilaya_id" => 35,
   "name_ar" => "جنات",
   "name_fr" => "Djinet"
],
   [
  "id" => 1212,
  "wilaya_id" => 35,
  "name_ar" => "الخروبة",
  "name_fr" => "El Kharrouba"
   ],
   [
 "id" => 1213,
 "wilaya_id" => 35,
 "name_ar" => "حمادي",
 "name_fr" => "Hammedi"
  ],
   [
"id" => 1214,
"wilaya_id" => 35,
"name_ar" => "يسر",
"name_fr" => "Isser"
 ],
   [
   "id" => 1215,
   "wilaya_id" => 35,
   "name_ar" => "خميس الخشنة",
   "name_fr" => "Khemis El Khechna"
],
   [
  "id" => 1216,
  "wilaya_id" => 35,
  "name_ar" => "الاربعطاش",
  "name_fr" => "Larbatache"
   ],
   [
 "id" => 1217,
 "wilaya_id" => 35,
 "name_ar" => "لقاطة",
 "name_fr" => "Leghata"
  ],
   [
"id" => 1218,
"wilaya_id" => 35,
"name_ar" => "الناصرية",
"name_fr" => "Naciria"
 ],
   [
   "id" => 1219,
   "wilaya_id" => 35,
   "name_ar" => "أولاد عيسى",
   "name_fr" => "Ouled Aissa"
],
   [
  "id" => 1220,
  "wilaya_id" => 35,
  "name_ar" => "أولاد هداج",
  "name_fr" => "Ouled Hedadj"
   ],
   [
 "id" => 1221,
 "wilaya_id" => 35,
 "name_ar" => "أولاد موسى",
 "name_fr" => "Ouled Moussa"
  ],
   [
"id" => 1222,
"wilaya_id" => 35,
"name_ar" => "سي مصطفى",
"name_fr" => "Si Mustapha"
 ],
   [
   "id" => 1223,
   "wilaya_id" => 35,
   "name_ar" => "سيدي داود",
   "name_fr" => "Sidi Daoud"
],
   [
  "id" => 1224,
  "wilaya_id" => 35,
  "name_ar" => "سوق الحد",
  "name_fr" => "Souk El Had"
   ],
   [
 "id" => 1225,
 "wilaya_id" => 35,
 "name_ar" => "تاورقة",
 "name_fr" => "Taourga"
  ],
   [
"id" => 1226,
"wilaya_id" => 35,
"name_ar" => "الثنية",
"name_fr" => "Thenia"
 ],
   [
   "id" => 1227,
   "wilaya_id" => 35,
   "name_ar" => "تيجلابين",
   "name_fr" => "Tidjelabine"
],
   [
  "id" => 1228,
  "wilaya_id" => 35,
  "name_ar" => "تيمزريت",
  "name_fr" => "Timezrit"
   ],
   [
 "id" => 1229,
 "wilaya_id" => 35,
 "name_ar" => "زموري",
 "name_fr" => "Zemmouri"
  ],
   [
"id" => 1230,
"wilaya_id" => 36,
"name_ar" => "عين العسل",
"name_fr" => "Ain El Assel"
 ],
   [
   "id" => 1231,
   "wilaya_id" => 36,
   "name_ar" => "عين الكرمة",
   "name_fr" => "Ain Kerma"
],
   [
  "id" => 1232,
  "wilaya_id" => 36,
  "name_ar" => "عصفور",
  "name_fr" => "Asfour"
   ],
   [
 "id" => 1233,
 "wilaya_id" => 36,
 "name_ar" => "بن مهيدي",
 "name_fr" => "Ben M Hidi"
  ],
   [
"id" => 1234,
"wilaya_id" => 36,
"name_ar" => "بريحان",
"name_fr" => "Berrihane"
 ],
   [
   "id" => 1235,
   "wilaya_id" => 36,
   "name_ar" => "البسباس",
   "name_fr" => "Besbes"
],
   [
  "id" => 1236,
  "wilaya_id" => 36,
  "name_ar" => "بوقوس",
  "name_fr" => "Bougous"
   ],
   [
 "id" => 1237,
 "wilaya_id" => 36,
 "name_ar" => "بوحجار",
 "name_fr" => "Bouhadjar"
  ],
   [
"id" => 1238,
"wilaya_id" => 36,
"name_ar" => "بوثلجة",
"name_fr" => "Bouteldja"
 ],
   [
   "id" => 1239,
   "wilaya_id" => 36,
   "name_ar" => "شبيطة مختار",
   "name_fr" => "Chebaita Mokhtar"
],
   [
  "id" => 1240,
  "wilaya_id" => 36,
  "name_ar" => "الشافية",
  "name_fr" => "Chefia"
   ],
   [
 "id" => 1241,
 "wilaya_id" => 36,
 "name_ar" => "شحاني",
 "name_fr" => "Chihani"
  ],
   [
"id" => 1242,
"wilaya_id" => 36,
"name_ar" => "الذرعـان",
"name_fr" => "Drean"
 ],
   [
   "id" => 1243,
   "wilaya_id" => 36,
   "name_ar" => "الشط",
   "name_fr" => "Echatt"
],
   [
  "id" => 1244,
  "wilaya_id" => 36,
  "name_ar" => "العيون",
  "name_fr" => "El Aioun"
   ],
   [
 "id" => 1245,
 "wilaya_id" => 36,
 "name_ar" => "القالة",
 "name_fr" => "El Kala"
  ],
   [
"id" => 1246,
"wilaya_id" => 36,
"name_ar" => "الطارف",
"name_fr" => "El Tarf"
 ],
   [
   "id" => 1247,
   "wilaya_id" => 36,
   "name_ar" => "حمام بني صالح",
   "name_fr" => "Hammam Beni Salah"
],
   [
  "id" => 1248,
  "wilaya_id" => 36,
  "name_ar" => "بحيرة الطيور",
  "name_fr" => "Lac Des Oiseaux"
   ],
   [
 "id" => 1249,
 "wilaya_id" => 36,
 "name_ar" => "وادي الزيتون",
 "name_fr" => "Oued Zitoun"
  ],
   [
"id" => 1250,
"wilaya_id" => 36,
"name_ar" => "رمل السوق",
"name_fr" => "Raml Souk"
 ],
   [
   "id" => 1251,
   "wilaya_id" => 36,
   "name_ar" => "السوارخ",
   "name_fr" => "Souarekh"
],
   [
  "id" => 1252,
  "wilaya_id" => 36,
  "name_ar" => "زريزر",
  "name_fr" => "Zerizer"
   ],
   [
 "id" => 1253,
 "wilaya_id" => 36,
 "name_ar" => "الزيتونة",
 "name_fr" => "Zitouna"
  ],
   [
"id" => 1254,
"wilaya_id" => 37,
"name_ar" => "أم العسل",
"name_fr" => "Oum El Assel"
 ],
   [
   "id" => 1255,
   "wilaya_id" => 37,
   "name_ar" => "تندوف",
   "name_fr" => "Tindouf"
],
   [
  "id" => 1256,
  "wilaya_id" => 38,
  "name_ar" => "عماري",
  "name_fr" => "Ammari"
   ],
   [
 "id" => 1257,
 "wilaya_id" => 38,
 "name_ar" => "بني شعيب",
 "name_fr" => "Beni Chaib"
  ],
   [
"id" => 1258,
"wilaya_id" => 38,
"name_ar" => "بني لحسن",
"name_fr" => "Beni Lahcene"
 ],
   [
   "id" => 1259,
   "wilaya_id" => 38,
   "name_ar" => "برج بونعامة",
   "name_fr" => "Bordj Bounaama"
],
   [
  "id" => 1260,
  "wilaya_id" => 38,
  "name_ar" => "برج الأمير عبد القادر",
  "name_fr" => "Bordj El Emir Abdelkader"
   ],
   [
 "id" => 1261,
 "wilaya_id" => 38,
 "name_ar" => "بوقائد",
 "name_fr" => "Boucaid"
  ],
   [
"id" => 1262,
"wilaya_id" => 38,
"name_ar" => "خميستي",
"name_fr" => "Khemisti"
 ],
   [
   "id" => 1263,
   "wilaya_id" => 38,
   "name_ar" => "الأربعاء",
   "name_fr" => "Larbaa"
],
   [
  "id" => 1264,
  "wilaya_id" => 38,
  "name_ar" => "لرجام",
  "name_fr" => "Lardjem"
   ],
   [
 "id" => 1265,
 "wilaya_id" => 38,
 "name_ar" => "العيون",
 "name_fr" => "Layoune"
  ],
   [
"id" => 1266,
"wilaya_id" => 38,
"name_ar" => "الأزهرية",
"name_fr" => "Lazharia"
 ],
   [
   "id" => 1267,
   "wilaya_id" => 38,
   "name_ar" => "المعاصم",
   "name_fr" => "Maacem"
],
   [
  "id" => 1268,
  "wilaya_id" => 38,
  "name_ar" => "الملعب",
  "name_fr" => "Melaab"
   ],
   [
 "id" => 1269,
 "wilaya_id" => 38,
 "name_ar" => "أولاد بسام",
 "name_fr" => "Ouled Bessam"
  ],
   [
"id" => 1270,
"wilaya_id" => 38,
"name_ar" => "سيدي عابد",
"name_fr" => "Sidi Abed"
 ],
   [
   "id" => 1271,
   "wilaya_id" => 38,
   "name_ar" => "سيدي بوتوشنت",
   "name_fr" => "Sidi Boutouchent"
],
   [
  "id" => 1272,
  "wilaya_id" => 38,
  "name_ar" => "سيدي العنتري",
  "name_fr" => "Sidi Lantri"
   ],
   [
 "id" => 1273,
 "wilaya_id" => 38,
 "name_ar" => "سيدي سليمان",
 "name_fr" => "Sidi Slimane"
  ],
   [
"id" => 1274,
"wilaya_id" => 38,
"name_ar" => "تملاحت",
"name_fr" => "Tamellahet"
 ],
   [
   "id" => 1275,
   "wilaya_id" => 38,
   "name_ar" => "ثنية الاحد",
   "name_fr" => "Theniet El Had"
],
   [
  "id" => 1276,
  "wilaya_id" => 38,
  "name_ar" => "تيسمسيلت",
  "name_fr" => "Tissemsilt"
   ],
   [
 "id" => 1277,
 "wilaya_id" => 38,
 "name_ar" => "اليوسفية",
 "name_fr" => "Youssoufia"
  ],
   [
"id" => 1278,
"wilaya_id" => 39,
"name_ar" => "البياضة",
"name_fr" => "Bayadha"
 ],
   [
   "id" => 1279,
   "wilaya_id" => 39,
   "name_ar" => "بن  قشة",
   "name_fr" => "Ben Guecha"
],
   [
  "id" => 1280,
  "wilaya_id" => 39,
  "name_ar" => "الدبيلة",
  "name_fr" => "Debila"
   ],
   [
 "id" => 1281,
 "wilaya_id" => 57,
 "name_ar" => "جامعة",
 "name_fr" => "Djamaa"
  ],
   [
"id" => 1282,
"wilaya_id" => 39,
"name_ar" => "دوار الماء",
"name_fr" => "Douar El Maa"
 ],
   [
   "id" => 1283,
   "wilaya_id" => 39,
   "name_ar" => "العقلة",
   "name_fr" => "El Ogla"
],
   [
  "id" => 1284,
  "wilaya_id" => 57,
  "name_ar" => "المغير",
  "name_fr" => "El-M'ghaier"
   ],
   [
 "id" => 1285,
 "wilaya_id" => 39,
 "name_ar" => "الوادي",
 "name_fr" => "El-Oued"
  ],
   [
"id" => 1286,
"wilaya_id" => 39,
"name_ar" => "قمار",
"name_fr" => "Guemar"
 ],
   [
   "id" => 1287,
   "wilaya_id" => 39,
   "name_ar" => "الحمراية",
   "name_fr" => "Hamraia"
],
   [
  "id" => 1288,
  "wilaya_id" => 39,
  "name_ar" => "حساني عبد الكريم",
  "name_fr" => "Hassani Abdelkrim"
   ],
   [
 "id" => 1289,
 "wilaya_id" => 39,
 "name_ar" => "حاسي خليفة",
 "name_fr" => "Hassi Khalifa"
  ],
   [
"id" => 1290,
"wilaya_id" => 39,
"name_ar" => "كوينين",
"name_fr" => "Kouinine"
 ],
   [
   "id" => 1291,
   "wilaya_id" => 39,
   "name_ar" => "المقرن",
   "name_fr" => "Magrane"
],
   [
  "id" => 1292,
  "wilaya_id" => 39,
  "name_ar" => "اميه وانسة",
  "name_fr" => "Mih Ouansa"
   ],
   [
 "id" => 1293,
 "wilaya_id" => 57,
 "name_ar" => "المرارة",
 "name_fr" => "M'rara"
  ],
   [
"id" => 1294,
"wilaya_id" => 39,
"name_ar" => "النخلة",
"name_fr" => "Nakhla"
 ],
   [
   "id" => 1295,
   "wilaya_id" => 39,
   "name_ar" => "وادي العلندة",
   "name_fr" => "Oued El Alenda"
],
   [
  "id" => 1296,
  "wilaya_id" => 57,
  "name_ar" => "أم الطيور",
  "name_fr" => "Oum Touyour"
   ],
   [
 "id" => 1297,
 "wilaya_id" => 39,
 "name_ar" => "ورماس",
 "name_fr" => "Ourmes"
  ],
   [
"id" => 1298,
"wilaya_id" => 39,
"name_ar" => "الرقيبة",
"name_fr" => "Reguiba"
 ],
   [
   "id" => 1299,
   "wilaya_id" => 39,
   "name_ar" => "الرباح",
   "name_fr" => "Robbah"
],
   [
  "id" => 1300,
  "wilaya_id" => 57,
  "name_ar" => "سيدي عمران",
  "name_fr" => "Sidi Amrane"
   ],
   [
 "id" => 1301,
 "wilaya_id" => 39,
 "name_ar" => "سيدي عون",
 "name_fr" => "Sidi Aoun"
  ],
   [
"id" => 1302,
"wilaya_id" => 57,
"name_ar" => "سيدي خليل",
"name_fr" => "Sidi Khelil"
 ],
   [
   "id" => 1303,
   "wilaya_id" => 57,
   "name_ar" => "سطيل",
   "name_fr" => "Still"
],
   [
  "id" => 1304,
  "wilaya_id" => 39,
  "name_ar" => "تغزوت",
  "name_fr" => "Taghzout"
   ],
   [
 "id" => 1305,
 "wilaya_id" => 39,
 "name_ar" => "الطالب العربي",
 "name_fr" => "Taleb Larbi"
  ],
   [
"id" => 1306,
"wilaya_id" => 57,
"name_ar" => "تندلة",
"name_fr" => "Tenedla"
 ],
   [
   "id" => 1307,
   "wilaya_id" => 39,
   "name_ar" => "الطريفاوي",
   "name_fr" => "Trifaoui"
],
   [
  "id" => 1308,
  "wilaya_id" => 40,
  "name_ar" => "عين الطويلة",
  "name_fr" => "Ain Touila"
   ],
   [
 "id" => 1309,
 "wilaya_id" => 40,
 "name_ar" => "بابار",
 "name_fr" => "Babar"
  ],
   [
"id" => 1310,
"wilaya_id" => 40,
"name_ar" => "بغاي",
"name_fr" => "Baghai"
 ],
   [
   "id" => 1311,
   "wilaya_id" => 40,
   "name_ar" => "بوحمامة",
   "name_fr" => "Bouhmama"
],
   [
  "id" => 1312,
  "wilaya_id" => 40,
  "name_ar" => "ششار",
  "name_fr" => "Chechar"
   ],
   [
 "id" => 1313,
 "wilaya_id" => 40,
 "name_ar" => "شلية",
 "name_fr" => "Chelia"
  ],
   [
"id" => 1314,
"wilaya_id" => 40,
"name_ar" => "جلال",
"name_fr" => "Djellal"
 ],
   [
   "id" => 1315,
   "wilaya_id" => 40,
   "name_ar" => "الحامة",
   "name_fr" => "El Hamma"
],
   [
  "id" => 1316,
  "wilaya_id" => 40,
  "name_ar" => "المحمل",
  "name_fr" => "El Mahmal"
   ],
   [
 "id" => 1317,
 "wilaya_id" => 40,
 "name_ar" => "الولجة",
 "name_fr" => "El Oueldja"
  ],
   [
"id" => 1318,
"wilaya_id" => 40,
"name_ar" => "انسيغة",
"name_fr" => "Ensigha"
 ],
   [
   "id" => 1319,
   "wilaya_id" => 40,
   "name_ar" => "قايس",
   "name_fr" => "Kais"
],
   [
  "id" => 1320,
  "wilaya_id" => 40,
  "name_ar" => "خنشلة",
  "name_fr" => "Khenchela"
   ],
   [
 "id" => 1321,
 "wilaya_id" => 40,
 "name_ar" => "خيران",
 "name_fr" => "Khirane"
  ],
   [
"id" => 1322,
"wilaya_id" => 40,
"name_ar" => "مصارة",
"name_fr" => "M'sara"
 ],
   [
   "id" => 1323,
   "wilaya_id" => 40,
   "name_ar" => "متوسة",
   "name_fr" => "M'toussa"
],
   [
  "id" => 1324,
  "wilaya_id" => 40,
  "name_ar" => "أولاد رشاش",
  "name_fr" => "Ouled Rechache"
   ],
   [
 "id" => 1325,
 "wilaya_id" => 40,
 "name_ar" => "الرميلة",
 "name_fr" => "Remila"
  ],
   [
"id" => 1326,
"wilaya_id" => 40,
"name_ar" => "طامزة",
"name_fr" => "Tamza"
 ],
   [
   "id" => 1327,
   "wilaya_id" => 40,
   "name_ar" => "تاوزيانت",
   "name_fr" => "Taouzianat"
],
   [
  "id" => 1328,
  "wilaya_id" => 40,
  "name_ar" => "يابوس",
  "name_fr" => "Yabous"
   ],
   [
 "id" => 1329,
 "wilaya_id" => 41,
 "name_ar" => "عين سلطان",
 "name_fr" => "Ain Soltane"
  ],
   [
"id" => 1330,
"wilaya_id" => 41,
"name_ar" => "عين الزانة",
"name_fr" => "Ain Zana"
 ],
   [
   "id" => 1331,
   "wilaya_id" => 41,
   "name_ar" => "بئر بوحوش",
   "name_fr" => "Bir Bouhouche"
],
   [
  "id" => 1332,
  "wilaya_id" => 41,
  "name_ar" => "الدريعة",
  "name_fr" => "Drea"
   ],
   [
 "id" => 1333,
 "wilaya_id" => 41,
 "name_ar" => "الحدادة",
 "name_fr" => "Haddada"
  ],
   [
"id" => 1334,
"wilaya_id" => 41,
"name_ar" => "الحنانشة",
"name_fr" => "Hanencha"
 ],
   [
   "id" => 1335,
   "wilaya_id" => 41,
   "name_ar" => "الخضارة",
   "name_fr" => "Khedara"
],
   [
  "id" => 1336,
  "wilaya_id" => 41,
  "name_ar" => "خميسة",
  "name_fr" => "Khemissa"
   ],
   [
 "id" => 1337,
 "wilaya_id" => 41,
 "name_ar" => "المشروحة",
 "name_fr" => "Machroha"
  ],
   [
"id" => 1338,
"wilaya_id" => 41,
"name_ar" => "مداوروش",
"name_fr" => "M'daourouche"
 ],
   [
   "id" => 1339,
   "wilaya_id" => 41,
   "name_ar" => "المراهنة",
   "name_fr" => "Merahna"
],
   [
  "id" => 1340,
  "wilaya_id" => 41,
  "name_ar" => "وادي الكبريت",
  "name_fr" => "Oued Kebrit"
   ],
   [
 "id" => 1341,
 "wilaya_id" => 41,
 "name_ar" => "أولاد إدريس",
 "name_fr" => "Ouled Driss"
  ],
   [
"id" => 1342,
"wilaya_id" => 41,
"name_ar" => "أولاد مومن",
"name_fr" => "Ouled Moumen"
 ],
   [
   "id" => 1343,
   "wilaya_id" => 41,
   "name_ar" => "أم العظايم",
   "name_fr" => "Oum El Adhaim"
],
   [
  "id" => 1344,
  "wilaya_id" => 41,
  "name_ar" => "ويلان",
  "name_fr" => "Ouillen"
   ],
   [
 "id" => 1345,
 "wilaya_id" => 41,
 "name_ar" => "الراقوبة",
 "name_fr" => "Ragouba"
  ],
   [
"id" => 1346,
"wilaya_id" => 41,
"name_ar" => "سافل الويدان",
"name_fr" => "Safel El Ouiden"
 ],
   [
   "id" => 1347,
   "wilaya_id" => 41,
   "name_ar" => "سدراتة",
   "name_fr" => "Sedrata"
],
   [
  "id" => 1348,
  "wilaya_id" => 41,
  "name_ar" => "سيدي فرج",
  "name_fr" => "Sidi Fredj"
   ],
   [
 "id" => 1349,
 "wilaya_id" => 41,
 "name_ar" => "سوق أهراس",
 "name_fr" => "Souk Ahras"
  ],
   [
"id" => 1350,
"wilaya_id" => 41,
"name_ar" => "تاورة",
"name_fr" => "Taoura"
 ],
   [
   "id" => 1351,
   "wilaya_id" => 41,
   "name_ar" => "ترقالت",
   "name_fr" => "Terraguelt"
],
   [
  "id" => 1352,
  "wilaya_id" => 41,
  "name_ar" => "تيفاش",
  "name_fr" => "Tiffech"
   ],
   [
 "id" => 1353,
 "wilaya_id" => 41,
 "name_ar" => "الزعرورية",
 "name_fr" => "Zaarouria"
  ],
   [
"id" => 1354,
"wilaya_id" => 41,
"name_ar" => "الزوابي",
"name_fr" => "Zouabi"
 ],
   [
   "id" => 1355,
   "wilaya_id" => 42,
   "name_ar" => "أغبال",
   "name_fr" => "Aghbal"
],
   [
  "id" => 1356,
  "wilaya_id" => 42,
  "name_ar" => "أحمر العين",
  "name_fr" => "Ahmer El Ain"
   ],
   [
 "id" => 1357,
 "wilaya_id" => 42,
 "name_ar" => "عين تاقورايت",
 "name_fr" => "Ain Tagourait"
  ],
   [
"id" => 1358,
"wilaya_id" => 42,
"name_ar" => "الحطاطبة",
"name_fr" => "Attatba"
 ],
   [
   "id" => 1359,
   "wilaya_id" => 42,
   "name_ar" => "بني ميلك",
   "name_fr" => "Beni Mileuk"
],
   [
  "id" => 1360,
  "wilaya_id" => 42,
  "name_ar" => "بوهارون",
  "name_fr" => "Bou Haroun"
   ],
   [
 "id" => 1361,
 "wilaya_id" => 42,
 "name_ar" => "بواسماعيل",
 "name_fr" => "Bou Ismail"
  ],
   [
"id" => 1362,
"wilaya_id" => 42,
"name_ar" => "بورقيقة",
"name_fr" => "Bourkika"
 ],
   [
   "id" => 1363,
   "wilaya_id" => 42,
   "name_ar" => "الشعيبة",
   "name_fr" => "Chaiba"
],
   [
  "id" => 1364,
  "wilaya_id" => 42,
  "name_ar" => "شرشال",
  "name_fr" => "Cherchell"
   ],
   [
 "id" => 1365,
 "wilaya_id" => 42,
 "name_ar" => "الداموس",
 "name_fr" => "Damous"
  ],
   [
"id" => 1366,
"wilaya_id" => 42,
"name_ar" => "دواودة",
"name_fr" => "Douaouda"
 ],
   [
   "id" => 1367,
   "wilaya_id" => 42,
   "name_ar" => "فوكة",
   "name_fr" => "Fouka"
],
   [
  "id" => 1368,
  "wilaya_id" => 42,
  "name_ar" => "قوراية",
  "name_fr" => "Gouraya"
   ],
   [
 "id" => 1369,
 "wilaya_id" => 42,
 "name_ar" => "حجوط",
 "name_fr" => "Hadjout"
  ],
   [
"id" => 1370,
"wilaya_id" => 42,
"name_ar" => "حجرة النص",
"name_fr" => "Hadjret Ennous"
 ],
   [
   "id" => 1371,
   "wilaya_id" => 42,
   "name_ar" => "خميستي",
   "name_fr" => "Khemisti"
],
   [
  "id" => 1372,
  "wilaya_id" => 42,
  "name_ar" => "القليعة",
  "name_fr" => "Kolea"
   ],
   [
 "id" => 1373,
 "wilaya_id" => 42,
 "name_ar" => "الأرهاط",
 "name_fr" => "Larhat"
  ],
   [
"id" => 1374,
"wilaya_id" => 42,
"name_ar" => "مناصر",
"name_fr" => "Menaceur"
 ],
   [
   "id" => 1375,
   "wilaya_id" => 42,
   "name_ar" => "مراد",
   "name_fr" => "Merad"
],
   [
  "id" => 1376,
  "wilaya_id" => 42,
  "name_ar" => "مسلمون",
  "name_fr" => "Messelmoun"
   ],
   [
 "id" => 1377,
 "wilaya_id" => 42,
 "name_ar" => "الناظور",
 "name_fr" => "Nador"
  ],
   [
"id" => 1378,
"wilaya_id" => 42,
"name_ar" => "سيدي غيلاس",
"name_fr" => "Sidi Ghiles"
 ],
   [
   "id" => 1379,
   "wilaya_id" => 42,
   "name_ar" => "سيدي راشد",
   "name_fr" => "Sidi Rached"
],
   [
  "id" => 1380,
  "wilaya_id" => 42,
  "name_ar" => "سيدي سميان",
  "name_fr" => "Sidi Semiane"
   ],
   [
 "id" => 1381,
 "wilaya_id" => 42,
 "name_ar" => "سيدي عامر",
 "name_fr" => "Sidi-Amar"
  ],
   [
"id" => 1382,
"wilaya_id" => 42,
"name_ar" => "تيبازة",
"name_fr" => "Tipaza"
 ],
   [
   "id" => 1383,
   "wilaya_id" => 43,
   "name_ar" => "أحمد راشدي",
   "name_fr" => "Ahmed Rachedi"
],
   [
  "id" => 1384,
  "wilaya_id" => 43,
  "name_ar" => " عين البيضاء أحريش",
  "name_fr" => "Ain Beida Harriche"
   ],
   [
 "id" => 1385,
 "wilaya_id" => 43,
 "name_ar" => "عين الملوك",
 "name_fr" => "Ain Mellouk"
  ],
   [
"id" => 1386,
"wilaya_id" => 43,
"name_ar" => "عين التين",
"name_fr" => "Ain Tine"
 ],
   [
   "id" => 1387,
   "wilaya_id" => 43,
   "name_ar" => "اعميرة اراس",
   "name_fr" => "Amira Arres"
],
   [
  "id" => 1388,
  "wilaya_id" => 43,
  "name_ar" => "بن يحي عبد الرحمن",
  "name_fr" => "Benyahia Abderrahmane"
   ],
   [
 "id" => 1389,
 "wilaya_id" => 43,
 "name_ar" => "بوحاتم",
 "name_fr" => "Bouhatem"
  ],
   [
"id" => 1390,
"wilaya_id" => 43,
"name_ar" => "شلغوم العيد",
"name_fr" => "Chelghoum Laid"
 ],
   [
   "id" => 1391,
   "wilaya_id" => 43,
   "name_ar" => "الشيقارة",
   "name_fr" => "Chigara"
],
   [
  "id" => 1392,
  "wilaya_id" => 43,
  "name_ar" => "دراحي بوصلاح",
  "name_fr" => "Derrahi Bousselah"
   ],
   [
 "id" => 1393,
 "wilaya_id" => 43,
 "name_ar" => "العياضي برباس",
 "name_fr" => "El Ayadi Barbes"
  ],
   [
"id" => 1394,
"wilaya_id" => 43,
"name_ar" => "مشيرة",
"name_fr" => "El Mechira"
 ],
   [
   "id" => 1395,
   "wilaya_id" => 43,
   "name_ar" => "فرجيوة",
   "name_fr" => "Ferdjioua"
],
   [
  "id" => 1396,
  "wilaya_id" => 43,
  "name_ar" => "القرارم قوقة",
  "name_fr" => "Grarem Gouga"
   ],
   [
 "id" => 1397,
 "wilaya_id" => 43,
 "name_ar" => "حمالة",
 "name_fr" => "Hamala"
  ],
   [
"id" => 1398,
"wilaya_id" => 43,
"name_ar" => "ميلة",
"name_fr" => "Mila"
 ],
   [
   "id" => 1399,
   "wilaya_id" => 43,
   "name_ar" => "مينار زارزة",
   "name_fr" => "Minar Zarza"
],
   [
  "id" => 1400,
  "wilaya_id" => 43,
  "name_ar" => "وادي العثمانية",
  "name_fr" => "Oued Athmenia"
   ],
   [
 "id" => 1401,
 "wilaya_id" => 43,
 "name_ar" => "وادي النجاء",
 "name_fr" => "Oued Endja"
  ],
   [
"id" => 1402,
"wilaya_id" => 43,
"name_ar" => "وادي سقان",
"name_fr" => "Oued Seguen"
 ],
   [
   "id" => 1403,
   "wilaya_id" => 43,
   "name_ar" => "أولاد اخلوف",
   "name_fr" => "Ouled Khalouf"
],
   [
  "id" => 1404,
  "wilaya_id" => 43,
  "name_ar" => "الرواشد",
  "name_fr" => "Rouached"
   ],
   [
 "id" => 1405,
 "wilaya_id" => 43,
 "name_ar" => "سيدي خليفة",
 "name_fr" => "Sidi Khelifa"
  ],
   [
"id" => 1406,
"wilaya_id" => 43,
"name_ar" => "سيدي مروان",
"name_fr" => "Sidi Merouane"
 ],
   [
   "id" => 1407,
   "wilaya_id" => 43,
   "name_ar" => "تاجنانت",
   "name_fr" => "Tadjenanet"
],
   [
  "id" => 1408,
  "wilaya_id" => 43,
  "name_ar" => "تسدان حدادة",
  "name_fr" => "Tassadane Haddada"
   ],
   [
 "id" => 1409,
 "wilaya_id" => 43,
 "name_ar" => "التلاغمة",
 "name_fr" => "Teleghma"
  ],
   [
"id" => 1410,
"wilaya_id" => 43,
"name_ar" => "ترعي باينان",
"name_fr" => "Terrai Bainen"
 ],
   [
   "id" => 1411,
   "wilaya_id" => 43,
   "name_ar" => "تسالة لمطاعي",
   "name_fr" => "Tassala Lematai"
],
   [
  "id" => 1412,
  "wilaya_id" => 43,
  "name_ar" => "تيبرقنت",
  "name_fr" => "Tiberguent"
   ],
   [
 "id" => 1413,
 "wilaya_id" => 43,
 "name_ar" => "يحي بني قشة",
 "name_fr" => "Yahia Beniguecha"
  ],
   [
"id" => 1414,
"wilaya_id" => 43,
"name_ar" => "زغاية",
"name_fr" => "Zeghaia"
 ],
   [
   "id" => 1415,
   "wilaya_id" => 44,
   "name_ar" => "عين البنيان",
   "name_fr" => "Ain-Benian"
],
   [
  "id" => 1416,
  "wilaya_id" => 44,
  "name_ar" => "عين بويحيى",
  "name_fr" => "Ain-Bouyahia"
   ],
   [
 "id" => 1417,
 "wilaya_id" => 44,
 "name_ar" => "عين الدفلى",
 "name_fr" => "Ain-Defla"
  ],
   [
"id" => 1418,
"wilaya_id" => 44,
"name_ar" => "عين الاشياخ",
"name_fr" => "Ain-Lechiakh"
 ],
   [
   "id" => 1419,
   "wilaya_id" => 44,
   "name_ar" => "عين السلطان",
   "name_fr" => "Ain-Soltane"
],
   [
  "id" => 1420,
  "wilaya_id" => 44,
  "name_ar" => "عين التركي",
  "name_fr" => "Ain-Torki"
   ],
   [
 "id" => 1421,
 "wilaya_id" => 44,
 "name_ar" => "عريب",
 "name_fr" => "Arib"
  ],
   [
"id" => 1422,
"wilaya_id" => 44,
"name_ar" => "بربوش",
"name_fr" => "Birbouche"
 ],
   [
   "id" => 1423,
   "wilaya_id" => 44,
   "name_ar" => "بطحية",
   "name_fr" => "Bathia"
],
   [
  "id" => 1424,
  "wilaya_id" => 44,
  "name_ar" => "بلعاص",
  "name_fr" => "Belaas"
   ],
   [
 "id" => 1425,
 "wilaya_id" => 44,
 "name_ar" => "بن علال",
 "name_fr" => "Ben Allal"
  ],
   [
"id" => 1426,
"wilaya_id" => 44,
"name_ar" => "بئر ولد خليفة",
"name_fr" => "Bir-Ould-Khelifa"
 ],
   [
   "id" => 1427,
   "wilaya_id" => 44,
   "name_ar" => "برج الأمير خالد",
   "name_fr" => "Bordj-Emir-Khaled"
],
   [
  "id" => 1428,
  "wilaya_id" => 44,
  "name_ar" => "بومدفع",
  "name_fr" => "Boumedfaa"
   ],
   [
 "id" => 1429,
 "wilaya_id" => 44,
 "name_ar" => "بوراشد",
 "name_fr" => "Bourached"
  ],
   [
"id" => 1430,
"wilaya_id" => 44,
"name_ar" => "جليدة",
"name_fr" => "Djelida"
 ],
   [
   "id" => 1431,
   "wilaya_id" => 44,
   "name_ar" => "جمعة أولاد الشيخ",
   "name_fr" => "Djemaa Ouled Cheikh"
],
   [
  "id" => 1432,
  "wilaya_id" => 44,
  "name_ar" => "جندل",
  "name_fr" => "Djendel"
   ],
   [
 "id" => 1433,
 "wilaya_id" => 44,
 "name_ar" => "العبادية",
 "name_fr" => "El-Abadia"
  ],
   [
"id" => 1434,
"wilaya_id" => 44,
"name_ar" => "العامرة",
"name_fr" => "El-Amra"
 ],
   [
   "id" => 1435,
   "wilaya_id" => 44,
   "name_ar" => "العطاف",
   "name_fr" => "El-Attaf"
],
   [
  "id" => 1436,
  "wilaya_id" => 44,
  "name_ar" => "الماين",
  "name_fr" => "El-Maine"
   ],
   [
 "id" => 1437,
 "wilaya_id" => 44,
 "name_ar" => "حمام ريغة",
 "name_fr" => "Hammam-Righa"
  ],
   [
"id" => 1438,
"wilaya_id" => 44,
"name_ar" => "الحسانية",
"name_fr" => "Hassania"
 ],
   [
   "id" => 1439,
   "wilaya_id" => 44,
   "name_ar" => "الحسينية",
   "name_fr" => "Hoceinia"
],
   [
  "id" => 1440,
  "wilaya_id" => 44,
  "name_ar" => "خميس مليانة",
  "name_fr" => "Khemis-Miliana"
   ],
   [
 "id" => 1441,
 "wilaya_id" => 44,
 "name_ar" => "المخاطرية",
 "name_fr" => "Mekhatria"
  ],
   [
"id" => 1442,
"wilaya_id" => 44,
"name_ar" => "مليانة",
"name_fr" => "Miliana"
 ],
   [
   "id" => 1443,
   "wilaya_id" => 44,
   "name_ar" => "وادي الشرفاء",
   "name_fr" => "Oued Chorfa"
],
   [
  "id" => 1444,
  "wilaya_id" => 44,
  "name_ar" => "واد الجمعة",
  "name_fr" => "Oued Djemaa"
   ],
   [
 "id" => 1445,
 "wilaya_id" => 44,
 "name_ar" => "الروينة",
 "name_fr" => "Rouina"
  ],
   [
"id" => 1446,
"wilaya_id" => 44,
"name_ar" => "سيدي الأخضر",
"name_fr" => "Sidi-Lakhdar"
 ],
   [
   "id" => 1447,
   "wilaya_id" => 44,
   "name_ar" => "تاشتة زقاغة",
   "name_fr" => "Tacheta Zegagha"
],
   [
  "id" => 1448,
  "wilaya_id" => 44,
  "name_ar" => "طارق بن زياد",
  "name_fr" => "Tarik-Ibn-Ziad"
   ],
   [
 "id" => 1449,
 "wilaya_id" => 44,
 "name_ar" => "تبركانين",
 "name_fr" => "Tiberkanine"
  ],
   [
"id" => 1450,
"wilaya_id" => 44,
"name_ar" => "زدين",
"name_fr" => "Zeddine"
 ],
   [
   "id" => 1451,
   "wilaya_id" => 45,
   "name_ar" => "عين بن خليل",
   "name_fr" => "Ain Ben Khelil"
],
   [
  "id" => 1452,
  "wilaya_id" => 45,
  "name_ar" => "عين الصفراء",
  "name_fr" => "Ain Sefra"
   ],
   [
 "id" => 1453,
 "wilaya_id" => 45,
 "name_ar" => "عسلة",
 "name_fr" => "Asla"
  ],
   [
"id" => 1454,
"wilaya_id" => 45,
"name_ar" => "جنين بورزق",
"name_fr" => "Djenienne Bourezg"
 ],
   [
   "id" => 1455,
   "wilaya_id" => 45,
   "name_ar" => "البيوض",
   "name_fr" => "El Biodh"
],
   [
  "id" => 1456,
  "wilaya_id" => 45,
  "name_ar" => "القصدير",
  "name_fr" => "Kasdir"
   ],
   [
 "id" => 1457,
 "wilaya_id" => 45,
 "name_ar" => "مكمن بن عمار",
 "name_fr" => "Makmen Ben Amar"
  ],
   [
"id" => 1458,
"wilaya_id" => 45,
"name_ar" => "المشرية",
"name_fr" => "Mecheria"
 ],
   [
   "id" => 1459,
   "wilaya_id" => 45,
   "name_ar" => "مغرار",
   "name_fr" => "Moghrar"
],
   [
  "id" => 1460,
  "wilaya_id" => 45,
  "name_ar" => "النعامة",
  "name_fr" => "Naama"
   ],
   [
 "id" => 1461,
 "wilaya_id" => 45,
 "name_ar" => "سفيسيفة",
 "name_fr" => "Sfissifa"
  ],
   [
"id" => 1462,
"wilaya_id" => 45,
"name_ar" => "تيوت",
"name_fr" => "Tiout"
 ],
   [
   "id" => 1463,
   "wilaya_id" => 46,
   "name_ar" => "أغلال",
   "name_fr" => "Aghlal"
],
   [
  "id" => 1464,
  "wilaya_id" => 46,
  "name_ar" => "عين الأربعاء",
  "name_fr" => "Ain El Arbaa"
   ],
   [
 "id" => 1465,
 "wilaya_id" => 46,
 "name_ar" => "عين الكيحل",
 "name_fr" => "Ain Kihal"
  ],
   [
"id" => 1466,
"wilaya_id" => 46,
"name_ar" => "عين تموشنت",
"name_fr" => "Ain Temouchent"
 ],
   [
   "id" => 1467,
   "wilaya_id" => 46,
   "name_ar" => "عين الطلبة",
   "name_fr" => "Ain Tolba"
],
   [
  "id" => 1468,
  "wilaya_id" => 46,
  "name_ar" => "عقب الليل",
  "name_fr" => "Aoubellil"
   ],
   [
 "id" => 1469,
 "wilaya_id" => 46,
 "name_ar" => "بني صاف",
 "name_fr" => "Beni Saf"
  ],
   [
"id" => 1470,
"wilaya_id" => 46,
"name_ar" => "بوزجار",
"name_fr" => "Bouzedjar"
 ],
   [
   "id" => 1471,
   "wilaya_id" => 46,
   "name_ar" => "شعبة اللحم",
   "name_fr" => "Chaabat El Ham"
],
   [
  "id" => 1472,
  "wilaya_id" => 46,
  "name_ar" => "شنتوف",
  "name_fr" => "Chentouf"
   ],
   [
 "id" => 1473,
 "wilaya_id" => 46,
 "name_ar" => "العامرية",
 "name_fr" => "El Amria"
  ],
   [
"id" => 1474,
"wilaya_id" => 46,
"name_ar" => "المالح",
"name_fr" => "El Maleh"
 ],
   [
   "id" => 1475,
   "wilaya_id" => 46,
   "name_ar" => "المساعيد",
   "name_fr" => "El Messaid"
],
   [
  "id" => 1476,
  "wilaya_id" => 46,
  "name_ar" => "الأمير عبد القادر",
  "name_fr" => "Emir Abdelkader"
   ],
   [
 "id" => 1477,
 "wilaya_id" => 46,
 "name_ar" => "حمام بوحجر",
 "name_fr" => "Hammam Bou Hadjar"
  ],
   [
"id" => 1478,
"wilaya_id" => 46,
"name_ar" => "الحساسنة",
"name_fr" => "Hassasna"
 ],
   [
   "id" => 1479,
   "wilaya_id" => 46,
   "name_ar" => "حاسي الغلة",
   "name_fr" => "Hassi El Ghella"
],
   [
  "id" => 1480,
  "wilaya_id" => 46,
  "name_ar" => "وادي برقش",
  "name_fr" => "Oued Berkeche"
   ],
   [
 "id" => 1481,
 "wilaya_id" => 46,
 "name_ar" => "وادي الصباح",
 "name_fr" => "Oued Sebbah"
  ],
   [
"id" => 1482,
"wilaya_id" => 46,
"name_ar" => "أولاد بوجمعة",
"name_fr" => "Ouled Boudjemaa"
 ],
   [
   "id" => 1483,
   "wilaya_id" => 46,
   "name_ar" => "أولاد الكيحل",
   "name_fr" => "Ouled Kihal"
],
   [
  "id" => 1484,
  "wilaya_id" => 46,
  "name_ar" => "ولهاصة الغرابة",
  "name_fr" => "Oulhaca El Gheraba"
   ],
   [
 "id" => 1485,
 "wilaya_id" => 46,
 "name_ar" => "سيدي بن عدة",
 "name_fr" => "Sidi Ben Adda"
  ],
   [
"id" => 1486,
"wilaya_id" => 46,
"name_ar" => "سيدي بومدين",
"name_fr" => "Sidi Boumediene"
 ],
   [
   "id" => 1487,
   "wilaya_id" => 46,
   "name_ar" => "سيدي ورياش",
   "name_fr" => "Sidi Ouriache"
],
   [
  "id" => 1488,
  "wilaya_id" => 46,
  "name_ar" => "سيدي صافي",
  "name_fr" => "Sidi Safi"
   ],
   [
 "id" => 1489,
 "wilaya_id" => 46,
 "name_ar" => "تامزورة",
 "name_fr" => "Tamzoura"
  ],
   [
"id" => 1490,
"wilaya_id" => 46,
"name_ar" => "تارقة",
"name_fr" => "Terga"
 ],
   [
   "id" => 1491,
   "wilaya_id" => 47,
   "name_ar" => "بريان",
   "name_fr" => "Berriane"
],
   [
  "id" => 1492,
  "wilaya_id" => 47,
  "name_ar" => "بونورة",
  "name_fr" => "Bounoura"
   ],
   [
 "id" => 1493,
 "wilaya_id" => 47,
 "name_ar" => "ضاية بن ضحوة",
 "name_fr" => "Dhayet Bendhahoua"
  ],
   [
"id" => 1494,
"wilaya_id" => 47,
"name_ar" => "العطف",
"name_fr" => "El Atteuf"
 ],
   [
   "id" => 1495,
   "wilaya_id" => 58,
   "name_ar" => "المنيعة",
   "name_fr" => "El Meniaa"
],
   [
  "id" => 1496,
  "wilaya_id" => 47,
  "name_ar" => "غرداية",
  "name_fr" => "Ghardaia"
   ],
   [
 "id" => 1497,
 "wilaya_id" => 47,
 "name_ar" => "القرارة",
 "name_fr" => "El Guerrara"
  ],
   [
"id" => 1498,
"wilaya_id" => 58,
"name_ar" => "حاسي الفحل",
"name_fr" => "Hassi Fehal"
 ],
   [
   "id" => 1499,
   "wilaya_id" => 58,
   "name_ar" => "حاسي القارة",
   "name_fr" => "Hassi Gara"
],
   [
  "id" => 1500,
  "wilaya_id" => 47,
  "name_ar" => "المنصورة",
  "name_fr" => "Mansoura"
   ],
   [
 "id" => 1501,
 "wilaya_id" => 47,
 "name_ar" => "متليلي",
 "name_fr" => "Metlili"
  ],
   [
"id" => 1502,
"wilaya_id" => 47,
"name_ar" => "سبسب",
"name_fr" => "Sebseb"
 ],
   [
   "id" => 1503,
   "wilaya_id" => 47,
   "name_ar" => "زلفانة",
   "name_fr" => "Zelfana"
],
   [
  "id" => 1504,
  "wilaya_id" => 48,
  "name_ar" => "عين الرحمة",
  "name_fr" => "Ain Rahma"
   ],
   [
 "id" => 1505,
 "wilaya_id" => 48,
 "name_ar" => "عين طارق",
 "name_fr" => "Ain-Tarek"
  ],
   [
"id" => 1506,
"wilaya_id" => 48,
"name_ar" => "عمي موسى",
"name_fr" => "Ammi Moussa"
 ],
   [
   "id" => 1507,
   "wilaya_id" => 48,
   "name_ar" => "بلعسل بوزقزة",
   "name_fr" => "Belaassel Bouzagza"
],
   [
  "id" => 1508,
  "wilaya_id" => 48,
  "name_ar" => "بن داود",
  "name_fr" => "Bendaoud"
   ],
   [
 "id" => 1509,
 "wilaya_id" => 48,
 "name_ar" => "بني درقن",
 "name_fr" => "Beni Dergoun"
  ],
   [
"id" => 1510,
"wilaya_id" => 48,
"name_ar" => "بني زنطيس",
"name_fr" => "Beni Zentis"
 ],
   [
   "id" => 1511,
   "wilaya_id" => 48,
   "name_ar" => "دار بن عبد الله",
   "name_fr" => "Dar Ben Abdelah"
],
   [
  "id" => 1512,
  "wilaya_id" => 48,
  "name_ar" => "جديوية",
  "name_fr" => "Djidiouia"
   ],
   [
 "id" => 1513,
 "wilaya_id" => 48,
 "name_ar" => "الحاسي",
 "name_fr" => "El Hassi"
  ],
   [
"id" => 1514,
"wilaya_id" => 48,
"name_ar" => "الحمادنة",
"name_fr" => "El H'madna"
 ],
   [
   "id" => 1515,
   "wilaya_id" => 48,
   "name_ar" => "الولجة",
   "name_fr" => "El Ouldja"
],
   [
  "id" => 1516,
  "wilaya_id" => 48,
  "name_ar" => "القطار",
  "name_fr" => "El-Guettar"
   ],
   [
 "id" => 1517,
 "wilaya_id" => 48,
 "name_ar" => "المطمر",
 "name_fr" => "El-Matmar"
  ],
   [
"id" => 1518,
"wilaya_id" => 48,
"name_ar" => "حد الشكالة",
"name_fr" => "Had Echkalla"
 ],
   [
   "id" => 1519,
   "wilaya_id" => 48,
   "name_ar" => "حمري",
   "name_fr" => "Hamri"
],
   [
  "id" => 1520,
  "wilaya_id" => 48,
  "name_ar" => "القلعة",
  "name_fr" => "Kalaa"
   ],
   [
 "id" => 1521,
 "wilaya_id" => 48,
 "name_ar" => "لحلاف",
 "name_fr" => "Lahlef"
  ],
   [
"id" => 1522,
"wilaya_id" => 48,
"name_ar" => "مازونة",
"name_fr" => "Mazouna"
 ],
   [
   "id" => 1523,
   "wilaya_id" => 48,
   "name_ar" => "مديونة",
   "name_fr" => "Mediouna"
],
   [
  "id" => 1524,
  "wilaya_id" => 48,
  "name_ar" => "منداس",
  "name_fr" => "Mendes"
   ],
   [
 "id" => 1525,
 "wilaya_id" => 48,
 "name_ar" => "مرجة سيدي عابد",
 "name_fr" => "Merdja Sidi Abed"
  ],
   [
"id" => 1526,
"wilaya_id" => 48,
"name_ar" => "واريزان",
"name_fr" => "Ouarizane"
 ],
   [
   "id" => 1527,
   "wilaya_id" => 48,
   "name_ar" => "وادي الجمعة",
   "name_fr" => "Oued El Djemaa"
],
   [
  "id" => 1528,
  "wilaya_id" => 48,
  "name_ar" => "وادي السلام",
  "name_fr" => "Oued Essalem"
   ],
   [
 "id" => 1529,
 "wilaya_id" => 48,
 "name_ar" => "وادي رهيو",
 "name_fr" => "Oued-Rhiou"
  ],
   [
"id" => 1530,
"wilaya_id" => 48,
"name_ar" => "أولاد يعيش",
"name_fr" => "Ouled Aiche"
 ],
   [
   "id" => 1531,
   "wilaya_id" => 48,
   "name_ar" => "أولاد سيدي الميهوب",
   "name_fr" => "Ouled Sidi Mihoub"
],
   [
  "id" => 1532,
  "wilaya_id" => 48,
  "name_ar" => "الرمكة",
  "name_fr" => "Ramka"
   ],
   [
 "id" => 1533,
 "wilaya_id" => 48,
 "name_ar" => "غليزان",
 "name_fr" => "Relizane"
  ],
   [
"id" => 1534,
"wilaya_id" => 48,
"name_ar" => "سيدي  خطاب",
"name_fr" => "Sidi Khettab"
 ],
   [
   "id" => 1535,
   "wilaya_id" => 48,
   "name_ar" => "سيدي لزرق",
   "name_fr" => "Sidi Lazreg"
],
   [
  "id" => 1536,
  "wilaya_id" => 48,
  "name_ar" => "سيدي أمحمد بن علي",
  "name_fr" => "Sidi M'hamed Benali"
   ],
   [
 "id" => 1537,
 "wilaya_id" => 48,
 "name_ar" => "سيدي امحمد بن عودة",
 "name_fr" => "Sidi M'hamed Benaouda"
  ],
   [
"id" => 1538,
"wilaya_id" => 48,
"name_ar" => "سيدي سعادة",
"name_fr" => "Sidi Saada"
 ],
   [
   "id" => 1539,
   "wilaya_id" => 48,
   "name_ar" => "سوق الحد",
   "name_fr" => "Souk El Had"
],
   [
  "id" => 1540,
  "wilaya_id" => 48,
  "name_ar" => "يلل",
  "name_fr" => "Yellel"
   ],
   [
 "id" => 1541,
 "wilaya_id" => 48,
 "name_ar" => "زمورة",
 "name_fr" => "Zemmoura"
  ]
]


);
}
}
