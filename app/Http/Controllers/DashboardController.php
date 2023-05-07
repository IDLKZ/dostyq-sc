<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EducationForm;
use App\Models\EducationTypes;
use App\Models\Region;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $regionsPluck = [];
        $eTypesPluck = [];
        $eFormsPluck = [];
        $regions = Region::with('queries')->get();
        $etypes = EducationTypes::with('queries')->get();
        $eforms = EducationForm::with('queries')->get();
        foreach ($etypes as $etype) {
            $eTypesPluck[$etype->title_ru] = $etype->queries->count();
        }
        foreach ($eforms as $eform) {
            $eFormsPluck[$eform->title_ru] = $eform->queries->count();
        }
        foreach ($regions as $region)
        {
            $regionsPluck[$region->title_ru] = $region->queries->count();
        }
        natsort($regionsPluck);
        $regionLabel = array_keys($regionsPluck);
        $regionData = array_values($regionsPluck);

        $etypeLabel = array_keys($eTypesPluck);
        $etypeData = array_values($eTypesPluck);

        $eFormLabel = array_keys($eFormsPluck);
        $eFormData = array_values($eFormsPluck);

        return view('dashboard', compact(
            'regionLabel', 'regionData',
                    'etypeLabel', 'etypeData', 'eFormLabel', 'eFormData'));
    }
}
