<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormWorkPlansValidationRequest;
use App\Models\User;
use App\Models\WorkPlans;
use Illuminate\Http\Request;

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
    public function create()
    {
        $users = User::all();

        return view('work_plans.createWorkPlans', [
            'users' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormWorkPlansValidationRequest $request)
    {
        $request->validated();

        $work_plans = new WorkPlans;

        $data = $request->except(['_token']);

        $work_plans->title = $data['title'];
        $work_plans->abstract = $data['abstract'];
        $work_plans->content = $data['content'];
        $work_plans->references = $data['references'];

        $work_plans->bolsistas = $data['bolsistas'];

        $work_plans->save();

        return redirect()->route('works_plans.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WorkPlans  $workPlans
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $work_plans = WorkPlans::all();

        return view('work_plans.approvedWorkPlans', [ 'work_plans' => $work_plans]);
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
