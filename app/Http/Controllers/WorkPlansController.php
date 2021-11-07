<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormWorkPlansValidationRequest;
use App\Models\Projects;
use App\Models\Students;
use App\Models\User;
use App\Models\UsersWorkPlan;
use App\Models\WorkPlans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkPlansController extends Controller
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
      $project = Projects::findOrFail($id);

      $users = User::all();

      $candidates = DB::table('users')
         ->join('projects_user', 'users.id', 'projects_user.user_id')
         ->join('students', 'users.id', 'students.users_id')
         ->where('projects_user.participating', 1)
         ->where('projects_user.project_id', $id)
         ->get();


      // dd($candidates);

      return view('work_plans.createWorkPlans', [
         'project' => $project,
         'users' => $users,
         'candidates' => $candidates
      ]);
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store($id, FormWorkPlansValidationRequest $request)
   {
      $request->validated();

      $user = auth()->user();

      $work_plans = new WorkPlans;

      $data = $request->except(['_token']);

      $work_plans->title = $data['title'];
      $work_plans->abstract = $data['abstract'];
      $work_plans->content = $data['content'];
      $work_plans->references = $data['references'];
      $work_plans->bolsistas = $data['bolsistas'];

      foreach($data['bolsistas'] as $bolsista) {
         Students::where('users_id', $bolsista)->update([
            'at_work_plan' => 1
         ]);
      }

      $work_plans->project_id = $id;

      $work_plans->save();

      return redirect()->back();
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\WorkPlans  $workPlans
    * @return \Illuminate\Http\Response
    */
   public function show()
   {
   }

   public function showWorkPlansThatProject($id)
   {
      $work_plans_attachs = Projects::findOrFail($id)->workPlans;

      // $candidates = DB::table('users')
      //    ->join('projects_user', 'users.id', 'projects_user.user_id')
      //    ->join('students', 'users.id', 'students.users_id')
      //    ->where('projects_user.participating', 1)
      //    ->where('projects_user.project_id', $id)
      //    ->get();

      return view('work_plans.showWorkPlans', [
         'work_plans_attachs' => $work_plans_attachs,
         // 'candidates' => $candidates
      ]);
   }

   public function showAll()
   {
      $work_plans = WorkPlans::all();

      return view('work_plans.workPlansShowAll', [
         'work_plans' => $work_plans
      ]);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\WorkPlans  $workPlans
    * @return \Illuminate\Http\Response
    */
   public function edit(WorkPlans $workPlans)
   {
      //
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\WorkPlans  $workPlans
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, WorkPlans $workPlans)
   {
      //
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\WorkPlans  $workPlans
    * @return \Illuminate\Http\Response
    */
   public function destroy(WorkPlans $workPlans)
   {
      //
   }
}
