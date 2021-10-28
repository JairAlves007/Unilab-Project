<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormWorkPlansValidationRequest;
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
        return view('work_plans.createWorkPlans');
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

        $data = $request->except(['_token']);

        WorkPlans::create($data);

        return redirect()->route('works_plans.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WorkPlans  $workPlans
     * @return \Illuminate\Http\Response
     */
    public function show(WorkPlans $workPlans)
    {
        //
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
