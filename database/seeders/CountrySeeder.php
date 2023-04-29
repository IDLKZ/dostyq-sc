<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::create([
           'title_kz' => 'Қазақстан',
           'title_ru' => 'Казахстан',
           'title_en' => 'Kazakhstan'
        ]);
        Country::create([
           'title_kz' => 'Ресей Федерациясы',
           'title_ru' => 'Российская федерация',
           'title_en' => 'Russian Federation'
        ]);
        Country::create([
           'title_kz' => 'Өзбекстан',
           'title_ru' => 'Узбекистан',
           'title_en' => 'Uzbekistan'
        ]);
        Country::create([
           'title_kz' => 'Қырғызстан',
           'title_ru' => 'Кыргызстан',
           'title_en' => 'Kyrgyzstan'
        ]);
        Country::create([
           'title_kz' => 'Түркменстан',
           'title_ru' => 'Туркменистан',
           'title_en' => 'Turkmenistan'
        ]);
        Country::create([
           'title_kz' => 'Ауғанстан',
           'title_ru' => 'Афганистан',
           'title_en' => 'Afghanistan'
        ]);
        Country::create([
           'title_kz' => 'ҚХР',
           'title_ru' => 'КНР',
           'title_en' => 'PRC'
        ]);
        Country::create([
           'title_kz' => 'Түркия',
           'title_ru' => 'Турция',
           'title_en' => 'Türkiye'
        ]);
        Country::create([
           'title_kz' => 'Тәжікістан',
           'title_ru' => 'Таджикистан',
           'title_en' => 'Tajikistan'
        ]);
        Country::create([
           'title_kz' => 'Басқа',
           'title_ru' => 'Другое',
           'title_en' => 'Other'
        ]);
    }
}
