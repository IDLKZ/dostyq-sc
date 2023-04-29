<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Region::create([
           'title_kz' => 'Шымкент қ',
           'title_ru' => 'г.Шымкент',
           'title_en' => 'Shymkent'
        ]);
        Region::create([
           'title_kz' => 'Түркістан қ',
           'title_ru' => 'г.Түркістан',
           'title_en' => 'Turkestan'
        ]);
        Region::create([
           'title_kz' => 'Кентау қ',
           'title_ru' => 'г.Кентау',
           'title_en' => 'Kentau'
        ]);
        Region::create([
           'title_kz' => 'Арыс қ',
           'title_ru' => 'г.Арыс',
           'title_en' => 'Arys'
        ]);
        Region::create([
           'title_kz' => 'Сарыағаш қ',
           'title_ru' => 'г.Сарыағаш',
           'title_en' => 'Saryagash'
        ]);
        Region::create([
           'title_kz' => 'Шардара қ',
           'title_ru' => 'г.Шардара',
           'title_en' => 'Shardara'
        ]);
        Region::create([
           'title_kz' => 'Жетысай қ',
           'title_ru' => 'г.Жетысай',
           'title_en' => 'Zhetisai'
        ]);
        Region::create([
           'title_kz' => 'Ленгер қ',
           'title_ru' => 'г.Ленгер',
           'title_en' => 'Lenger'
        ]);
        Region::create([
           'title_kz' => 'Бәйдібек ауданы',
           'title_ru' => 'Байдибекский район',
           'title_en' => 'Baidibek region'
        ]);
        Region::create([
           'title_kz' => 'Жетісай ауданы',
           'title_ru' => 'Жетысайский район',
           'title_en' => 'Zhetisai region'
        ]);
        Region::create([
           'title_kz' => 'Қазығұрт ауданы',
           'title_ru' => 'Казыгуртский район',
           'title_en' => 'Kazygurt region'
        ]);
        Region::create([
           'title_kz' => 'Келес ауданы',
           'title_ru' => 'Келесский район',
           'title_en' => 'Keles region'
        ]);
        Region::create([
           'title_kz' => 'Мақтарал ауданы',
           'title_ru' => 'Мактааральский район',
           'title_en' => 'Maktaral region'
        ]);
        Region::create([
           'title_kz' => 'Ордабасы ауданы',
           'title_ru' => 'Ордабасинский район',
           'title_en' => 'Ordabasy region'
        ]);
        Region::create([
           'title_kz' => 'Отырар ауданы',
           'title_ru' => 'Отырарский район',
           'title_en' => 'Otyrar region'
        ]);
        Region::create([
           'title_kz' => 'Сайрам ауданы',
           'title_ru' => 'Сайрамский район',
           'title_en' => 'Sairam region'
        ]);
        Region::create([
           'title_kz' => 'Сарыағаш ауданы',
           'title_ru' => 'Сарыагашский район',
           'title_en' => 'Saryagash region'
        ]);
        Region::create([
           'title_kz' => 'Созақ ауданы',
           'title_ru' => 'Созакский район',
           'title_en' => 'Sozaq region'
        ]);
        Region::create([
           'title_kz' => 'Төлеби ауданы',
           'title_ru' => 'Толебийский район',
           'title_en' => 'Tolebi region'
        ]);
        Region::create([
           'title_kz' => 'Түлкібас ауданы',
           'title_ru' => 'Тюлькубасский район',
           'title_en' => 'Tulkibas region'
        ]);
        Region::create([
           'title_kz' => 'Шардара ауданы',
           'title_ru' => 'Шардаринский район',
           'title_en' => 'Shardara region'
        ]);
    }
}
