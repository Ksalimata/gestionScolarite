<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $guarded = [];
    public function filiere()
    {
        return $this->belongsTo('App\Filiere');
    }
    public function matiere()
    {
        return $this->belongsTo('App\Matiere');
    }
}
