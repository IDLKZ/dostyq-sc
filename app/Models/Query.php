<?php

namespace App\Models;

use App\Traits\Language;
use App\Traits\Upload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
    use HasFactory;
    use Upload;
    use Language;
    protected $table = 'queries';
    protected $fillable = [
        'name',
        'surname',
        'middlename',
        'iin',
        'country_id',
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

    public function eps()
    {
        return $this->belongsTo(Eps::class, 'eps_id');
    }
    public function educationType()
    {
        return $this->belongsTo(EducationTypes::class, 'education_type_id');
    }
    public function educationForm()
    {
        return $this->belongsTo(EducationForm::class, 'education_form_id');
    }
    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
