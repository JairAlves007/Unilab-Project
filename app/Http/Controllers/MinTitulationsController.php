<?php

namespace App\Http\Controllers;

use App\Models\MinTitulations;
use Illuminate\Http\Request;

class MinTitulationsController extends Controller
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
        //
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
     * @param  \App\Models\MinTitulations  $minTitulations
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $titulation = MinTitulations::find($id);

        if($titulation) {
            echo "<h1>Categoria: {$titulation->titulation}</h1>";
        }

        $edicts = $titulation->edicts()->get();

        if($edicts) {

            echo "<h1>Editais</h1>";

            foreach($edicts as $c){
                echo "<p>Descrição: {$c->description}</p>";
            }
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MinTitulations  $minTitulations
     * @return \Illuminate\Http\Response
     */
    public function edit(MinTitulations $minTitulations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MinTitulations  $minTitulations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MinTitulations $minTitulations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MinTitulations  $minTitulations
     * @return \Illuminate\Http\Response
     */
    public function destroy(MinTitulations $minTitulations)
    {
        //
    }
}
