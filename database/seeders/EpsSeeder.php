<?php

namespace Database\Seeders;

use App\Models\Eps;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Eps::create([
           'title_kz' => '6В01110 - Педагогика және психология',
           'title_ru' => '6В01110 - Педагогика и психология',
           'title_en' => '6В01110 - Pedagogy and psychology'
        ]);
        Eps::create([
           'title_kz' => '6В01210 - Мектепке дейінгі оқыту және тәрбиелеу',
           'title_ru' => '6В01210 - Дошкольное обучение и  воспитание',
           'title_en' => '6В01210 - Preschool education and upbringing'
        ]);
        Eps::create([
           'title_kz' => '6В01310 - Бастауыш оқытудың педагогикасы мен әдістемесі',
           'title_ru' => '6В01310 - Педагогика и методика начального обучения',
           'title_en' => '6В01210 - Preschool education and upbringing'
        ]);
        Eps::create([
           'title_kz' => '6В01410 – Бастапқы әскери дайындық',
           'title_ru' => '6В01410 – Начальная военная подготовка',
           'title_en' => '6B01410 - Basic military training'
        ]);
        Eps::create([
           'title_kz' => '6В01430 - Музыкалық білім',
           'title_ru' => '6В01430 - Музыкальное образование',
           'title_en' => '6В01430 - Music education'
        ]);
        Eps::create([
           'title_kz' => '6В01440 - Бейнелеу өнері және сызу',
           'title_ru' => '6В01440 - Изобразительное искусство и черчение',
           'title_en' => '6В01440 - Fine arts and drawing'
        ]);
        Eps::create([
           'title_kz' => '6В01440 - Дене шынықтыру және спорт',
           'title_ru' => '6В01440 - Физическая культура и спорт',
           'title_en' => '6В01440 - Physical culture and sports'
        ]);
        Eps::create([
           'title_kz' => '6В01450 - Кәсіптік оқыту',
           'title_ru' => '6В01450 - Профессиональное обучение',
           'title_en' => '6В01450 - Vocational training'
        ]);
        Eps::create([
           'title_kz' => '6В01460 - Құқық және экономика негіздері',
           'title_ru' => '6В01460 - Основы права и экономики',
           'title_en' => '6В01460 - Fundamentals of law and economics'
        ]);
        Eps::create([
           'title_kz' => '6В01510 - Математика',
           'title_ru' => '6В01510 - Математика',
           'title_en' => '6В01510 - Mathematics'
        ]);
        Eps::create([
           'title_kz' => '6В01520 - Физика',
           'title_ru' => '6В01520 - Физика',
           'title_en' => '6B01520 - Physics'
        ]);
        Eps::create([
           'title_kz' => '6В01530 - Информатика',
           'title_ru' => '6В01530 - Информатика',
           'title_en' => '6В01530 - Informatics'
        ]);
        Eps::create([
           'title_kz' => '6В01540 - Химия',
           'title_ru' => '6В01540 - Химия',
           'title_en' => '6B01540 - Chemistry'
        ]);
        Eps::create([
           'title_kz' => '6В01550 - Биология',
           'title_ru' => '6В01550 - Биология',
           'title_en' => '6В01550 - Biology'
        ]);
        Eps::create([
           'title_kz' => '6В01560 - География',
           'title_ru' => '6В01560 - География',
           'title_en' => '6В01560 - Geography'
        ]);
        Eps::create([
           'title_kz' => '6В01610 - Тарих',
           'title_ru' => '6В01610- История',
           'title_en' => '6В01610- History'
        ]);
        Eps::create([
           'title_kz' => '6В01710 - Қазақ тілі мен әдебиеті',
           'title_ru' => '6В01710 - Казахский язык и литература',
           'title_en' => '6В01710 - Kazakh language and literature'
        ]);
        Eps::create([
           'title_kz' => '6В01720 - Орыс тілі және әдебиеті',
           'title_ru' => '6В01720 - Русский язык и литература',
           'title_en' => '6В01720 - Russian language and literature'
        ]);
        Eps::create([
           'title_kz' => '6В01730 - Шет тілі: екі шет тілі',
           'title_ru' => '6В01730 - Иностранный язык: два иностранных языка',
           'title_en' => '6В01730 - Foreign language: two foreign languages'
        ]);
        Eps::create([
           'title_kz' => '6В01910 - Дефектология',
           'title_ru' => '6В01910 - Дефектология',
           'title_en' => '6В01910 - Defectology'
        ]);
        Eps::create([
           'title_kz' => '6В02320 - Аударма ісі',
           'title_ru' => '6В02320 - Переводческое дело',
           'title_en' => '6В02320 - Translation business'
        ]);
        Eps::create([
           'title_kz' => '6В04210 - Дизайн',
           'title_ru' => '6В04210 - Дизайн',
           'title_en' => '6В04210 - Design'
        ]);
        Eps::create([
           'title_kz' => '6В04110 - Экономика',
           'title_ru' => '6В04110 - Экономика',
           'title_en' => '6В04110 - Economics'
        ]);
        Eps::create([
           'title_kz' => '6В04130 - Есеп және аудит',
           'title_ru' => '6В04130 - Учет и аудит',
           'title_en' => '6В04130 - Accounting and audit'
        ]);
        Eps::create([
           'title_kz' => '6В04140 - Қаржы',
           'title_ru' => '6В04140 - Финансы',
           'title_en' => '6В04140 - Finance'
        ]);
        Eps::create([
           'title_kz' => '6В04150 - Мемлекеттік және жергілікті басқару',
           'title_ru' => '6В04150 - Государственное и местное управление',
           'title_en' => '6В04150 - State and local government'
        ]);
        Eps::create([
           'title_kz' => '6В04210 - Құқықтану',
           'title_ru' => '6В04210 - Юриспруденция',
           'title_en' => '6В04210 - Jurisprudence'
        ]);
        Eps::create([
           'title_kz' => '6В06110 - Информатика',
           'title_ru' => '6В06110 - Информатика',
           'title_en' => '6В06110 - Informatics'
        ]);
        Eps::create([
           'title_kz' => '6В06110 - Ақпараттық жүйе',
           'title_ru' => '6В06110 - Информационные системы',
           'title_en' => '6В06110 - Information systems'
        ]);
        Eps::create([
           'title_kz' => '6В06130 - Есептеу техникасы және бағдарламалық қамтамасыз ету',
           'title_ru' => '6В06130 - Вычислительная техника и программное обеспечение',
           'title_en' => '6В06130 - Computer technology and software'
        ]);
        Eps::create([
           'title_kz' => '6В06210 - Радиотехника, электроника және телекоммуникациялар',
           'title_ru' => '6В06210 - Радиотехника, электроника и телекоммуникации',
           'title_en' => '6В06210 - Radio engineering, electronics and telecommunications'
        ]);
        Eps::create([
           'title_kz' => '6В07110 - Электр энергетикасы',
           'title_ru' => '6В07110 - Электроэнергетика',
           'title_en' => '6В07110 - Power industry'
        ]);
        Eps::create([
           'title_kz' => '6В07120 - Органикалық заттардың химиялық технологиясы',
           'title_ru' => '6В07120 - Химическая технология органических веществ',
           'title_en' => '6В07120 - Chemical technology of organic substances'
        ]);
        Eps::create([
           'title_kz' => '6В07310 - Архитектура',
           'title_ru' => '6В07310 - Архитектура',
           'title_en' => '6В07310 - Architecture'
        ]);
        Eps::create([
           'title_kz' => '6В07320 - Құрылыс',
           'title_ru' => '6В07320 - Строительство',
           'title_en' => '6В07320 - Civil engineering'
        ]);
    }
}
