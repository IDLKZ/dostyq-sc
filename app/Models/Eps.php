<?php

namespace App\Models;

use App\Traits\Language;
use App\Traits\Upload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eps extends Model
{
    use HasFactory;
    use Upload;
    use Language;
    protected $table = 'eps';
    protected $fillable = ['title_kz', 'title_ru', 'title_en'];
}
