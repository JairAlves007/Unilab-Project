<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormCreateEdictRequest;
use App\Models\Areas;
use App\Models\BigAreas;
use App\Models\Categories;
use App\Models\Edicts;
use App\Models\Institutes;
use App\Models\MinTitulations;
use App\Models\Projects;
use App\Models\Specialities;
use App\Models\SubAreas;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EdictsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $filters = $request->except('_token');

        $search = $request->search;

        $edicts = Edicts::where([
            ['title', 'like', "%{$request->search}%"]
        ])->paginate(6);

        return view('welcome', ["filters" => $filters, "edicts" => $edicts, "search" => $search]);
    }


    public function index()
    {
        $edicts = Edicts::paginate(6);
        return view('welcome', ['edicts' => $edicts]);
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
    public function store(FormCreateEdictRequest $request)
    {
        $request->validated();

        $edict = new Edicts;

        $edict->edict_year = substr($request->submission_start, 0, 4);
        $edict->title = $request->title;
        $edict->code = md5(strtotime('now'));
        $edict->description = $request->description;
        $edict->submission_start = $request->submission_start;
        $edict->submission_finish = $request->submission_finish;
        $edict->rate_start = $request-> rate_start;
        $edict->rate_finish = $request-> rate_finish;
        $edict-> execution_start = $request -> execution_start;
        $edict-> execution_finish = $request -> execution_finish;
        $edict->min_titulations_id = $request->min_titulations_id;
        $edict->categories_id = $request->categories_id;

        if ($request->file('archive')->isValid() && $request->hasFile('archive')) {

            $name = uniqid(date('HisYmd'));
            $extension = $request->archive->extension();

            $nameFile = "{$name}.{$extension}";
            $edict->archive = $request->archive->storeAs('edicts', $nameFile, 'public');

        }

        $edict->save();

        return redirect()
            ->route('edicts.showAll')
            ->with('msg', 'Edital Criado Com Sucesso!');

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

    public function showAll()
    {

        $edicts = Edicts::all();

        return view("edicts.showEdicts", [
            'edicts' => $edicts
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Edicts  $edicts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edict = Edicts::findOrFail($id);
        $min_titulations = MinTitulations::all();
        $categories = Categories::all();

        return view("edicts.updateEdict", [
            "edict" => $edict,
            "min_titulations" => $min_titulations,
            "categories" => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Edicts  $edicts
     * @return \Illuminate\Http\Response
     */
    public function update(FormCreateEdictRequest $request, $id)
    {
        $request->validated();

        $edict = Edicts::findOrFail($id);

        $data = $request->except(['_token', '_method']);

        if ($request->hasFile('archive')) {
            $name = uniqid(date('HisYmd'));
            $extension = $request->archive->extension();

            $nameFile = "{$name}.{$extension}";
            $data['archive'] = $request->archive->storeAs('edicts', $nameFile, 'public');

        }

        $edict->update($data);

        return redirect()
            ->route("edicts.edit")
            ->with('msg', 'Edital Atualizado Com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Edicts  $edicts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $edictTitle = Edicts::findOrFail($id)->title;

        Edicts::findOrFail($id)->delete();

        return redirect()
            ->route('edicts.delete')
            ->with('msg', "O Edital {$edictTitle} Foi Excluído Com Sucesso!");

    }

    // public function showAttachProject()
    // {
    //     //
    // }
}
