<?php

namespace App\Http\Controllers;

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
        $search = request ('search');
        if($search){
          $edicts = Edicts::where([
            ['title', 'like', '%'.$search.'%']
            ])->get();
        }else{
          $edicts = Edicts::all();
        }
      return view('welcome',['edicts' => $edicts, 'search' => $search ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("edicts.createEdict");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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


        $edict = Edicts::find($id);

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
