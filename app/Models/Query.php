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

    public static function searchable($request, $boolean = false)
    {
        if ($boolean) {
            $data = Query::with('region', 'country', 'eps', 'educationType', 'educationForm')->where('iin', 'LIKE', '%'.$request['iin'].'%')
                ->where('surname', 'LIKE', '%'.$request['surname'].'%')
                ->where('name', 'LIKE', '%'.$request['name'].'%');
        } else {
            $data = Query::with('region')->where('iin', 'LIKE', '%'.$request['iin'].'%')
                ->where('surname', 'LIKE', '%'.$request['surname'].'%')
                ->where('name', 'LIKE', '%'.$request['name'].'%');
        }
        if ($request['country_id'] != 0) {
            $data->where('country_id', $request['country_id']);
        }
        if ($request['eps_id'] != 0) {
            $data->where('eps_id', $request['eps_id']);
        }
        if ($request['region_id'] != 0) {
            $data->where('region_id', $request['region_id']);
        }
        if ($request['education_type_id'] != 0) {
            $data->where('education_type_id', $request['education_type_id']);
        }
        if ($request['education_form_id'] != 0) {
            $data->where('education_form_id', $request['education_form_id']);
        }
        return $data;
    }

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
