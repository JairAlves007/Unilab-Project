<?php

namespace App\Http\Controllers;

use App\Models\Areas;
use App\Models\BigAreas;
use App\Models\Edicts;
use App\Models\Institutes;
use App\Models\Projects;
use App\Models\Specialities;
use App\Models\SubAreas;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $edict = Edicts::findOrFail($id);
        $institutes = Institutes::all();
        $specialities = Specialities::all();
        $big_areas = BigAreas::all();

        return view('projects.formAttachProject', [
            'edict' => $edict,
            'institutes' => $institutes,
            'specialities' => $specialities,
            'big_areas' => $big_areas,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        $project = new Projects;

        $project->title = $request->title;
        $project->code = strtotime('now');
        $project->content = $request->content;
        $project->abstract = $request->abstract;
        $project->references = $request->references;
        $project->edicts_id = $id;
        $project->teachers_id = auth()->user()->id;
        $project->institutes_id = $request->institutes;
        $project->specialities_id = $request->specialities;
        $project->big_areas_id = $request->big_areas;
        $project->areas_id = $request->areas;
        $project->sub_areas_id = $request->sub_areas;

        if ($request->file('archive')->isValid() && $request->hasFile('archive')) {

            $name = uniqid(date('HisYmd'));
            $extension = $request->archive->extension();

            $nameFile = "{$name}.{$extension}";
            $project->archive = $request->archive->storeAs('projects', $nameFile, 'public');
        }

        $project->save();

        return redirect()
            ->route('projects.form-attach-project', $id)
            ->with('msg', 'O Projeto Foi Criado Com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(Projects $projects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit(Projects $projects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projects $projects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projects $projects)
    {
        //
    }

    public function findAreas(Request $request)
    {
        $areas = Areas::all();
        return $areas->where('big_areas_id', $request['big_areas_id']);
    }

    public function findSubAreas(Request $request)
    {
        $areas = SubAreas::all();
        return $areas->where('areas_id', $request['sub_areas_id']);
    }
}