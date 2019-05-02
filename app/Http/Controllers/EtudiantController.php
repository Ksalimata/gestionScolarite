<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRequests\storeEtudiant;
use App\Http\Requests\UpdateRequests\updateEtudiant;
use DB;
use App\Etablissement;
use App\Etudiant;


class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try
        {
            $etudiants = DB::table('etudiants')
                                ->join('etablissements','etablissements.id','etabli_id')
                                ->select('etudiants.*','etablissements.nom_etabli','etablissements.adresse','etablissements.telephone')
                                ->get(); 

            return view('etudiant.index',compact('etudiants'));
        }
        catch(\Exception $e)
        {
            return view('etudiant.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $etablissements = Etablissement::all();
        return view('etudiant.create',compact('etablissements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeEtudiant $request)
    {
        
        try
        {
            Etudiant::create([
                "mat_etudiant"=>$request['mat_etudiant'],
                "nom_etudiant"=>$request['nom_etudiant'],
                "prenom_etudiant"=>$request['prenom_etudiant'],
                "sexe"=>$request['sexe'],
                "dateNaissance"=>$request['dateNaissance'],
                "email"=>$request['email'],
                "telephone"=>$request['telephone'],
                "etabli_id"=>$request['etabli_id']
            ]);

            return redirect()->back()->with('success','Etudiant inscrit avec succès');
        }
        catch(\Exception $e)
        {
            return redirect()->back()->with('error','Echec de la création du Etudiant '.$e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        $etablissements = Etablissement::all();

        return view('etudiant.edit',compact('etudiant','etablissements'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(updateEtudiant $request, Etudiant $etudiant)
    {
        try
        {
            $etudiant->update($request->all());
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
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
    {
        if($etudiant->delete())
        {
            return redirect()->back()->with('success','Etudiant supprimé avec succès');
        }
        else
        {
            return redirect()->back()->with('error','Echec de la suppréssion, veuillez réessayer svp');
        }
    }
}
