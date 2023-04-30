<?php

namespace App\Models;

use App\Traits\Language;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationForm extends Model
{
    use HasFactory;
    use Language;
    protected $table = 'education_form';
    protected $fillable = ['title_kz', 'title_ru', 'title_en'];
}
