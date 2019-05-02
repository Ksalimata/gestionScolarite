<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;
use App\Filiere;
use App\Matiere;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $nbre_etudiants = count(Etudiant::all());
        $nbre_filieres = count(Filiere::all());
        $nbre_matieres = count(Matiere::all());

        return view('login', compact('nbre_etudiants','nbre_filieres','nbre_matieres'));
    }
}
