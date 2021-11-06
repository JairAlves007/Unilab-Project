<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormAttachProjectValidation;
use App\Models\Areas;
use App\Models\BigAreas;
use App\Models\Edicts;
use App\Models\Institutes;
use App\Models\Projects;
use App\Models\ProjectsUser;
use App\Models\Specialities;
use App\Models\SubAreas;
use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $teachers_users = DB::table('users')->join('teachers', 'users.id', 'teachers.users_id')->get();

        return view('projects.formAttachProject', [
            'edict' => $edict,
            'institutes' => $institutes,
            'specialities' => $specialities,
            'big_areas' => $big_areas,
            'teachers_users' => $teachers_users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, FormAttachProjectValidation $request)
    {
        $request->validated();

        $project = new Projects;

        $project->title = $request->title;
        $project->code = strtotime('now');
        $project->content = $request->content;
        $project->abstract = $request->abstract;
        $project->references = $request->references;
        $project->edicts_id = $id;
        $project->teachers_id = $request->teachers;
        $project->institutes_id = $request->institutes;
        $project->specialities_id = $request->specialities;
        $project->big_areas_id = $request->big_areas;
        $project->areas_id = $request->areas;
        $project->sub_areas_id = $request->sub_areas;

        if ($request->hasFile('archive') && $request->file('archive')->isValid()) {

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

    public function showAll(){
        $projects = Projects::all();
        $ownerProject = DB::table('users')
            ->join('teachers', 'teachers.users_id', 'users.id')
            ->first();

        return view('projects.showProjects', [
            'projects' => $projects,
            'ownerProject' => $ownerProject
        ]);
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

    public function showCandidates() {
        $projects = Projects::all();

        return view('projects.showProjectCandidates', [
            'projects' => $projects
        ]);
    }

    public function join($edict_id, $id) {

        $user = auth()->user();

        $project = Projects::findOrFail($id);

        // $project->projectsAsParticipant()->attach($user->id);

        ProjectsUser::create([
            'edict_id' => $edict_id,
            'project_id' => $id,
            'user_id' => $user->id,
            // 'candidated' => 1
        ]);

        return redirect()->back();

        // dd($edict_id, $id);

    }

    public function candidates($id) {

        $candidates = DB::table('users')
            ->join('projects_user', 'users.id', 'projects_user.user_id')
            ->join('students', 'users.id', 'students.users_id')
            ->where('projects_user.participating', 0)
            ->where('projects_user.project_id', $id)
            ->get();

            // dd($candidates);

        return view('projects.candidates', [
            'candidates' => $candidates,
            'project_id' => $id
        ]);
    }

    public function approve($project_id) {

        $candidate = DB::table('projects_user')->where('project_id', $project_id);

        $candidate->update([
            'participating' => 1
        ]);

        return redirect()->back();

    }
}
