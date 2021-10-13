<?php

namespace App\Http\Controllers;

use App\Models\Areas;
use App\Models\BigAreas;
use App\Models\Categories;
use App\Models\Edicts;
use App\Models\Institutes;
use App\Models\MinTitulations;
use App\Models\Specialities;
use App\Models\SubAreas;
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

        $edict->edict_year = substr($request->submission_start, 0, 4);
        $edict->title = $request->title;
        $edict->code = md5(strtotime('now'));
        $edict->description = $request->description;
        $edict->submission_start = $request->submission_start;
        $edict->submission_finish = $request->submission_finish;
        $edict->min_titulations_id = $request->min_titulations_id;
        $edict->categories_id = $request->categories_id;

        if($request->file('archive')->isValid() && $request->hasFile('archive')) {
            
            $name = uniqid(date('HisYmd'));
            $extension = $request->archive->extension();

            $nameFile = "{$name}.{$extension}";
            $edict->archive = $request->archive->storeAs('edicts', $nameFile, 'public');

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

    public function showAttachProject()
    {
        $edicts = Edicts::all();

        return view('projects.attachProjects', [
            'edicts' => $edicts
        ]);
    }

    public function formAttachProject($id)
    {
        $edict = Edicts::findOrFail($id);
        $institutes = Institutes::all();
        $specialities = Specialities::all();
        $big_areas = BigAreas::all();
        $sub_areas = SubAreas::all();
        $areas = Areas::all();

        return view('projects.formAttachProject', [
            'edict' => $edict,
            'institutes' => $institutes,
            'specialities' => $specialities,
            'big_areas' => $big_areas,
            'sub_areas' => $sub_areas,
            'areas' => $areas
        ]);
    }
}
