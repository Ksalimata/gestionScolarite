<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classe;
use App\Filiere;
use App\Matiere;
use DB;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = DB::table('classes')
                    ->join('filieres','filieres.id','filiere_id')
                    ->join('matieres','matieres.id','matiere_id')
                    ->select('classes.*','filieres.id as FiliereId','filieres.code_filiere','filieres.libelle_filiere','matieres.id as matiereId','matieres.code_matiere','matieres.libelle_matiere')
                    ->get();
       
        return view('classe.index', compact('classes')) ;           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $filieres = Filiere::all();
        $matieres = Matiere::all();
        return view('classe.create', compact('filieres','matieres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
        Classe::create([
            "code_classe"=>$request['code_classe'],
            "libelle_classe"=>$request['libelle_classe'],
            "filiere_id"=>$request['filiere_id'],
            "matiere_id"=>$request['matiere_id']
        ]);

        return redirect()->back()->with('success','Classe créé avec succès');
            
        } catch (Exception $e) {

            return redirect()->back()->with('error',$e);
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Classe $classe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function edit(Classe $classe)
    {
        
        $filieres = Filiere::all();
        $matieres = Matiere::all();
        return view('classe.edit', compact('filieres','matieres','classe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classe $classe)
    {
       try {
            
        $classe->update($request->all());
        return redirect()->back()->with('success','Classe modifié avec succès !');
        
        } catch (Exception $e) {
         return redirect()->back()->with('error','Echec de la mise à jour, veuillez réessayer svp');   
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classe $classe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classe $classe)
    {
       if($classe->delete())
        {
            return redirect()->back()->with('success','Classe supprimé avec succès');
        }
        else
        {
            return redirect()->back()->with('error','Echec de la suppréssion, veuillez réessayer svp');
        }
    }
}
