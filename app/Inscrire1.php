<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscrire1 extends Model
{
    protected $guarded = [];

    public function etudiant()
    {
        return $this->belongsTo('App\Etudiant');
    }

    public function anneeScolaire()
    {
        return $this->belongsTo('App\AnneeScolaire');
    }
}
