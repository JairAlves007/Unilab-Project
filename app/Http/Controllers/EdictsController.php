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
            $data['archive']->move(public_path('docs/edicts/', $name));
            $edict->archive = $name;
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
    public function show()
    {
        //

        // dd($edict->titulations());


        // $edict = Edicts::find($id);

        // if($edict) {
        //     echo "<h1>Código: {$edict->code}</h1>";
        //     echo "<p>Descrição: {$edict->description}</p>";
        // }

        // $categories = $edict->categories()->get();

        // if($categories) {

        //     echo "<h1>Categoria</h1>";

        //     foreach($categories as $c){
        //         echo "<p>{$c->name}</p>";
        //     }
        // }
        return view("edicts.showEdict");
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
}
