<?php

namespace Database\Seeders;

use App\Models\EducationForm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EducationForm::create([
            'title_kz' => 'күндізгі',
            'title_ru' => 'дневное',
            'title_en' => 'full-time'
        ]);
        EducationForm::create([
            'title_kz' => 'қашықтықтан',
            'title_ru' => 'дистанционное',
            'title_en' => 'distance'
        ]);
    }
}
