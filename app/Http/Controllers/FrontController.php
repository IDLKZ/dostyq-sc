<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\EducationForm;
use App\Models\EducationTypes;
use App\Models\Eps;
use App\Models\Query;
use App\Models\Region;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        $regions = Region::all();
        $education_types = EducationTypes::all();
        $education_forms = EducationForm::all();
        $eps = Eps::all();
        return view('welcome', compact('countries', 'regions', 'education_forms', 'education_types', 'eps'));
    }

    public function createQuery(Request $request)
    {
        $this->validate($request, [
           'fio' => 'required',
           'iin' => 'required',
           'country' => 'required',
           'phone' => 'required',
           'email' => 'required',
           'education_type_id' => 'required',
           'education_form_id' => 'required',
           'eps_id' => 'required',
           'region_id' => 'required',
           'address' => 'required',
           'photo_card_url' => 'required',
           'photo_url' => 'required',
           'photo_diploma_url' => 'required',
           'reference_075_url' => 'required'
        ]);
        $data = $request->all();
        $fio = explode(" ", $request['fio']);
        $name = $fio[0];

        $surname = isset($fio[1]) ? $fio[1] : "";
        $middlename = isset($fio[2]) ? $fio[2] : "";
        $data['name'] = $name;
        $data['surname'] = $surname;
        $data['middlename'] = $middlename;
//        dd($data);
        Query::add($data);

    }
}
