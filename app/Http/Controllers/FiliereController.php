<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Filiere;
use DB;


class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filieres= Filiere::all();
        return view('filiere.index', compact('filieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('filiere.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try
        {
            Filiere::create([
                "code_filiere"=>$request->code_filiere,
                "libelle_filiere"=>$request->libelle_filiere
            ]);
            //return response()->json("Filiere enregistré avec succès");
        }
        catch(\Exception $e)
        {
           return redirect()->back()->with('error',$e);
        }

        return redirect()->back()->with('success','Filiere enregistré avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function show(Filiere $filiere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function edit(Filiere $filiere)
    {
        return view('filiere.edit', compact('filiere')) ;  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Filiere $filiere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filiere $filiere)
    {
        try
        {
            $filiere->update($request->all());
            return redirect()->back()->with('success','Mise à jour éffectuée avec succès');
        }
        catch(\Exception $e)
        {
            return redirect()->back()->with('error','Echec de la mise à jour, veuillez réessayer svp');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filiere $filiere)
    {
       if($filiere->delete())
        {
            return redirect()->back()->with('success','Filiere supprimé avec succès');
        }
        else
        {
            return redirect()->back()->with('error','Echec de la suppréssion, veuillez réessayer svp');
        }
    }
}
