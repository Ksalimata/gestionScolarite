<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRequests\storeEtudiant;
use App\Http\Requests\UpdateRequests\updateEtudiant;
use DB;
use App\Classe;
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
                                ->join('classes','classes.id','classe_id')
                                ->join('etablissements','etablissements.id','etabli_id')
                                ->select('etudiants.*','classes.libelle_classe','classes.code_classe','etablissements.code_etabli','etablissements.nom_etabli')
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
        $classes = Classe::all();
        $etablissements = Etablissement::all();
        return view('etudiant.create',compact('classes','etablissements'));
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
                "dateNaissance"=>$request['dateNaissance'],
                "email"=>$request['email'],
                "nomPere"=>$request['nomPere'],
                "nomMere"=>$request['nomMere'],
                "casUrgence"=>$request['casUrgence'],
                "ecole"=>$request['ecole'],
                "scolarite"=>$request['scolarite'],
                "nom_etudiant"=>$request['nom_etudiant'],
                "lieu"=>$request['lieu'],
                "telephone"=>$request['telephone'],
                "profPere"=>$request['profPere'],
                "profMere"=>$request['profMere'],
                "profUrgence"=>$request['profUrgence'],
                "prenom_etudiant"=>$request['prenom_etudiant'],
                "nationnalite"=>$request['nationnalite'],
                "residense"=>$request['residense'],
                "telPere"=>$request['telPere'],
                "telMere"=>$request['telMere'],
                "contact"=>$request['contact'],
                "anneOrigine"=>$request['anneOrigine'],
                "nature"=>$request['nature'],
                "dateInscri"=>$request['dateInscri'],
                "classe_id"=>$request['classe_id'],
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
       $classes = Classe::all();
        $etablissements = Etablissement::all();
        return view('etudiant.savoirPlus', compact('etudiant','classes','etablissements'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        $classes = Classe::all();
        $etablissements = Etablissement::all();

        return view('etudiant.edit',compact('etudiant','classes','etablissements'));
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
