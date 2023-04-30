<?php

namespace App\Http\Controllers;

use App\Models\Query;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $queries = Query::with('eps', 'educationType', 'educationForm', 'region')->paginate(20);
        return view('queries.index', compact('queries'));
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
