<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\EducationForm;
use App\Models\EducationTypes;
use App\Models\Eps;
use App\Models\Query;
use App\Models\Region;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Query>
 */
class QueryFactory extends Factory
{
    protected $model = Query::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => Str::random(5),
            'surname' => Str::random(6),
            'middlename' => Str::random(3),
            'iin' => rand(0,999999999),
            'address' => $this->faker->sentence,
            'email' => Str::random(5).'@mail.ru',
            'phone' => rand(1, 9999999),
            'photo_url' => Str::random(3),
            'photo_card_url' => Str::random(3),
            'photo_diploma_url' => Str::random(3),
            'reference_075_url' => Str::random(3),
            'country_id' => Country::inRandomOrder()->first()->id,
            'eps_id' => Eps::inRandomOrder()->first()->id,
            'education_type_id' => EducationTypes::inRandomOrder()->first()->id,
            'education_form_id' => EducationForm::inRandomOrder()->first()->id,
            'region_id' => Region::inRandomOrder()->first()->id
        ];
    }
}
