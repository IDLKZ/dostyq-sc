<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationForm extends Model
{
    use HasFactory;
    protected $table = 'education_form';
    protected $fillable = ['title_kz', 'title_ru', 'title_en'];
}
