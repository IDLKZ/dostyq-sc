<?php

namespace Database\Seeders;

use App\Models\EducationTypes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EducationTypes::create([
           'title_kz' => 'мектептен кейін',
           'title_ru' => 'после школы',
           'title_en' => 'after school'
        ]);
        EducationTypes::create([
            'title_kz' => 'колледжден кейін',
            'title_ru' => 'после колледжа',
            'title_en' => 'after college'
        ]);
        EducationTypes::create([
            'title_kz' => 'екінші жоғары білім',
            'title_ru' => 'после высшего образования',
            'title_en' => 'after higher education'
        ]);
    }
}
