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
            'mat_etudiant'=>'string|max:20|min:6',
            'nom_etudiant'=>'string|max:20|min:2',
            'prenom_etudiant'=>'string|max:40|min:2',
            'sexe'=>'string|min:7',
            'dateNaissance'=>'string|max:40',
            'email'=>'email|max:40',
            'telephone'=>'numeric|min:8',
            'etabli_id'=>'string|max:40'
        ];
    }
}
