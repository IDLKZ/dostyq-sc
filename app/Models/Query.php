<?php

namespace App\Models;

use App\Traits\Upload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
    use HasFactory;
    use Upload;
    protected $table = 'queries';
    protected $fillable = [
        'name',
        'surname',
        'middlename',
        'iin',
        'country',
        'phone',
        'email',
        'education_type_id',
        'education_form_id',
        'eps_id',
        'region_id',
        'address',
        'photo_card_url',
        'photo_url',
        'photo_diploma_url',
        'reference_075_url'
    ];
}
