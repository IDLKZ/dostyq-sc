<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\EducationForm;
use App\Models\EducationTypes;
use App\Models\Eps;
use App\Models\Query;
use App\Models\Region;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $queries = Query::with('region')->paginate(20);
        $eps = Eps::all();
        $regions = Region::all();
        $education_forms = EducationForm::all();
        $education_types = EducationTypes::all();
        $countries = Country::all();
        return view('queries.index', compact('queries', 'eps', 'regions', 'education_forms', 'education_types', 'countries'));
    }

    public function search(Request $request)
    {
        $data = Query::with('region')->where('surname', 'LIKE', '%'.$request['surname'].'%')
            ->where('name', 'LIKE', '%'.$request['name'].'%');
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
        $queries = $data->paginate(20);
        $eps = Eps::all();
        $regions = Region::all();
        $education_forms = EducationForm::all();
        $education_types = EducationTypes::all();
        $countries = Country::all();
        return view('queries.index', compact('queries','eps', 'regions', 'education_forms', 'education_types', 'countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $query = Query::with('eps', 'educationType', 'educationForm', 'region')->where('id', $id)->firstOrFail();

        return view('queries.show', compact('query'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Query $query)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Query $query)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $query = Query::findOrFail($id);
        $query->removeFile('photo_url');
        $query->removeFile('photo_card_url');
        $query->removeFile('photo_diploma_url');
        $query->removeFile('reference_075_url');
        $query->delete();
        return redirect()->back();
    }
}
