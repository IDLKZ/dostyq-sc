<?php

namespace App\Models;

use App\Traits\Language;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationTypes extends Model
{
    use HasFactory;
    use Language;
    protected $table = 'education_types';
    protected $fillable = ['title_kz', 'title_ru', 'title_en'];

    public function queries()
    {
        return $this->hasMany(Query::class, 'education_type_id', 'id');
    }
}
