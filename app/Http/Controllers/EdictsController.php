<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Edicts;
use App\Models\MinTitulations;
use Illuminate\Http\Request;

class EdictsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request){
        $filters = $request->except('_token');

        $search = $request->search;

        $edicts = Edicts::where([
            ['title', 'like', "%{$request->search}%"]
            ])->paginate(1);

        return view('welcome', [ "filters" => $filters, "edicts" => $edicts , "search" => $search]);
    }


    public function index()
    {
        // $search = request('search');
        // if($search){
        //   $edicts = Edicts::where([
        //     ['title', 'like', '%'.$search.'%']
        //     ])->paginate(1);
        // }else{
          $edicts = Edicts::paginate(1);
        // }
        return view('welcome',['edicts' => $edicts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $min_titulations = MinTitulations::all();
        $categories = Categories::all();
        return view("edicts.createEdict", [
            'min_titulations' => $min_titulations,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $edict = new Edicts;
        $data = $request->all();

        $edict->edict_year = substr($data['submission_start'], 0, 4);
        $edict->title = $data['title'];
        $edict->code = md5(strtotime('now'));
        $edict->description = $data['description'];
        $edict->submission_start = $data['submission_start'];
        $edict->submission_finish = $data['submission_finish'];
        $edict->min_titulations_id = $data['min_titulations_id'];
        $edict->categories_id = $data['categories_id'];

        if($data['archive']->isValid() && $request->hasFile('archive')) {
            $extension = $data['archive']->extension();
            $name = md5( $data['archive']->getClientOriginalName() . strtotime('now') ) . '.' . $extension;
            $edict->archive = $name;
            $data['archive']->move(public_path('docs/edicts/', $name));

            // dd($data['archive']->store('docs/edicts'));
        }

        $edict->save();

        return redirect('/edict/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Edicts  $edicts
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $edict = Edicts::find($id);
        $projects_attachs = $edict->projects;

        return view("edicts.showEdict", [
            "edict" => $edict,
            'projects_attachs' => $projects_attachs
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Edicts  $edicts
     * @return \Illuminate\Http\Response
     */
    public function edit(Edicts $edicts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Edicts  $edicts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Edicts $edicts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Edicts  $edicts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Edicts $edicts)
    {
        //
    }

    public function attachProject()
    {
        # code...
    }
}
