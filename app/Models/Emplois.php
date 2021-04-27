<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emplois extends Model 
{

    protected $table = 'emplois';
    public $timestamps = true;
    protected $fillable = array('effectif', 'sexe', 'permanentTemporaire', 'salaire');

    public function entreprise()
    {
        return $this->belongsTo('App\Models\Entreprises', 'id_entreprise');
    }

}