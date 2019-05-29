<?php

namespace App\Http\Requests\UpdateRequests;

use Illuminate\Foundation\Http\FormRequest;

class updateEtudiant extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                "mat_etudiant"=>'string|max:20|min:6',
                "dateNaissance"=>'date|max:10',
                "email"=>'email|max:40',
                "nomPere"=>'string|max:20|min:2',
                "nomMere"=>'string|max:20|min:2',
                "casUrgence"=>'string|max:30|min:6',
                "ecole"=>'string|max:20',
                "scolarite"=>'string|max:30',
                "nom_etudiant"=>'string|max:20|min:2',
                "lieu"=>'string|max:30',
                "telephone"=>'numeric|min:8',
                "profPere"=>'string|max:50',
                "profMere"=>'string|max:50',
                "profUrgence"=>'string|max:30',
                "prenom_etudiant"=>'string|max:50|min:2',
                "nationnalite"=>'string|max:20',
                "residense"=>'string|max:20',
                "telPere"=>'numeric|min:8',
                "telMere"=>'numeric|min:8',
                "contact"=>'numeric|min:8',
                "anneOrigine"=>'string|max:15',
                "nature"=>'string|max:15',
                "dateInscri"=>'date|min:10',
                "classe_id"=>'string|max:30',
                "etabli_id"=>'string|max:30'
        ];
    }
}
