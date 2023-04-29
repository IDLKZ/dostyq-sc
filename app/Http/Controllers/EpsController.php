<?php

namespace App\Http\Controllers;

use App\Models\Eps;
use Illuminate\Http\Request;

class EpsController extends Controller
{
    public function index()
    {
        $eps = Eps::paginate(10);
        return view('eps.index', compact('eps'));
    }

    public function create()
    {
        return view('eps.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title_kz' => 'required',
            'title_ru' => 'required',
            'title_en' => 'required'
        ]);

        Eps::add($request->all());
        return redirect(route('eps.index'));
    }

    public function edit($id)
    {
        $ep = Eps::findOrFail($id);
        return view('eps.edit', compact('ep'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title_kz' => 'required',
            'title_ru' => 'required',
            'title_en' => 'required'
        ]);
        $ep = Eps::findOrFail($id);
        $ep->update($request->all());
        return redirect(route('eps.index'));
    }

    public function destroy($id)
    {
        $ep = Eps::findOrFail($id);
        $ep->delete();
        return redirect()->back();
    }
}
