<?php

namespace App\Http\Controllers;

use App\Models\Edicts;
use App\Models\MinTitulations;
<<<<<<< Updated upstream
=======
use App\Models\Projects;
use App\Models\RateEdict;
use App\Models\Specialities;
use App\Models\SubAreas;
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
        //
=======
        $request->validated();

        $edict = new Edicts;

        $edict->edict_year = substr($request->submission_start, 0, 4);
        $edict->title = $request->title;
        $edict->code = md5(strtotime('now'));
        $edict->description = $request->description;
        $edict->submission_start = $request->submission_start;
        $edict->submission_finish = $request->submission_finish;
        $edict->rate_start = $request->rate_start;
        $edict->rate_finish = $request->rate_finish;
        $edict->execution_start = $request->execution_start;
        $edict->execution_finish = $request->execution_finish;
        $edict->users_id = auth()->user()->id;
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

>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
        // if($edict) {
        //     echo "<h1>Código: {$edict->code}</h1>";
        //     echo "<p>Descrição: {$edict->description}</p>";
        // }
=======
        $rate_current = RateEdict::where('avaliator', auth()->user()->id)->where('edict_id', $id)->first();

        return view("edicts.showEdict", [
            'edict' => $edict,
            'projects_attachs' => $projects_attachs,
            'rate' => $rate_current
        ]);
    }
>>>>>>> Stashed changes

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
<<<<<<< Updated upstream
=======

    public function rate(Request $request)
    {
        $data = $request->all();
        
        $rate_current = RateEdict::where('avaliator', auth()->user()->id)->where('edict_id', $data['id'])->first();

        if(!$rate_current) {
            RateEdict::create([
                'rate' => $data['rate'],
                'edict_id' => $data['id'],
                'avaliator' => auth()->user()->id
            ]);
        } else {
            $rate_current->rate = $data['rate'];

            $rate_current->save();
        }

        return redirect()->back();

    }
>>>>>>> Stashed changes
}
