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
use Illuminate\Support\Facades\Route;

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
    $project->teachers_id = auth()->user()->id;
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
      ->route('edicts.showDashboard', $id)
      ->with('msg', 'O projeto foi anexado com sucesso!');
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

  public function showAll()
  {
    $ownerProject = DB::table('users')
      ->join('teachers', 'teachers.users_id', 'users.id')
      ->join('projects', 'projects.teachers_id', 'teachers.users_id')
      ->get();

    $variables = [
      'ownerProject' => $ownerProject
    ];

    if (Route::currentRouteName() === 'projects.participating') {

      $user = auth()->user();

      $projects_participating = DB::table('projects_user')
        ->join('projects', 'projects_user.project_id', 'projects.id')
        ->join('edicts', 'projects_user.edict_id', 'edicts.id')
        ->where('projects_user.participating', 1)
        ->where('projects_user.user_id', auth()->user()->id)
        ->get();

      $variables['projects'] = $projects_participating;
    } else if (Route::currentRouteName() === 'projects.showAll') {

      $projects = Projects::all();

      $variables['projects'] = $projects;
    }


    return view('projects.showProjects', $variables);
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

  public function showCandidates()
  {
    $projects = Projects::all();

    return view('projects.showProjectCandidates', [
      'projects' => $projects
    ]);
  }

  public function join($edict_id, $id)
  {

    $user = auth()->user();

    $project = Projects::findOrFail($id);

    ProjectsUser::create([
      'edict_id' => $edict_id,
      'project_id' => $id,
      'user_id' => $user->id
    ]);

    return redirect()->back();
  }

  public function candidates($id)
  {

    $candidates = DB::table('users')
      ->join('projects_user', 'users.id', 'projects_user.user_id')
      ->join('students', 'users.id', 'students.users_id')
      ->where('projects_user.participating', 0)
      ->where('projects_user.project_id', $id)
      ->get();

    return view('projects.candidates', [
      'candidates' => $candidates
    ]);

    // dd($candidates);
  }

  public function approve($user_id)
  {

    $candidate = DB::table('projects_user')->where('user_id', $user_id);

    $candidate->update([
      'participating' => 1
    ]);

    return redirect()->back();
  }

  public function frequency()
  {
    return view('projects.frequency');
  }

  public function sobre()
  {
    return view('links.about');
  }
}
