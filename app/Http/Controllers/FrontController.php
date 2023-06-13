<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\EducationForm;
use App\Models\EducationTypes;
use App\Models\Eps;
use App\Models\Query;
use App\Models\Region;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
           'country_id' => 'required',
           'phone' => 'required',
           'email' => 'required',
           'education_type_id' => 'required',
//           'education_form_id' => 'required',
           'eps_id' => 'required',
           'region_id' => 'required',
//           'address' => 'required',
           'photo_card_url' => 'required|max:4096',
           'photo_url' => 'required|max:4096',
           'photo_diploma_url' => 'required|max:4096',
           'reference_075_url' => 'required|max:4096'
        ], [], [
            'fio' => __('messages.fio'),
            'iin' => __('messages.iin'),
            'phone' => __('messages.phone'),
            'email' => __('messages.email'),
            'education_type_id' => __('messages.etype'),
            'education_form_id' => __('messages.eform'),
            'address' => __('messages.address'),
            'photo_card_url' => __('messages.card_id'),
            'photo_url' => __('messages.photo'),
            'photo_diploma_url' => __('messages.diploma'),
            'reference_075_url' => __('messages.docs_075')
        ]);
        $data = $request->all();
        $fio = explode(" ", $request['fio']);
        $surname = $fio[0];
        $name = isset($fio[1]) ? $fio[1] : "";
        $middlename = isset($fio[2]) ? $fio[2] : "";
        $data['name'] = $name;
        $data['surname'] = $surname;
        $data['middlename'] = $middlename;
        $data['education_form_id'] = 1;
//        dd($data);
        $query = Query::add($data);
        $query->uploadFile($data['photo_card_url'], 'photo_card_url');
        $query->uploadFile($data['photo_url'], 'photo_url');
        $query->uploadFile($data['photo_diploma_url'], 'photo_diploma_url');
        $query->uploadFile($data['reference_075_url'], 'reference_075_url');
        Alert::success(__('messages.success_alert'));
        return redirect()->back();
    }
}
