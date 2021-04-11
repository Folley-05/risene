<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promoteurs extends Model 
{

    protected $table = 'promoteurs';
    public $timestamps = true;

    public function entreprise()
    {
        return $this->belongsTo('App\Models\Entreprises', 'id_entreprise');
    }

    public function typeFormation()
    {
        return $this->hasOne('App\Models\TypeFormations', 'id_typeFormation');
    }

    public function etatMatrimoniale()
    {
        return $this->hasOne('App\Models\EtatMatrimonials', 'id_etatMatrimonials');
    }

    public function nationalite()
    {
        return $this->hasOne('App\Models\Nationalites', 'id_nationalite');
    }

}