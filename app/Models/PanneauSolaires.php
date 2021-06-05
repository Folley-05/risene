<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PanneauSolaires extends Model 
{

    protected $table = 'panneauSolaires';
    public $timestamps = true;
    protected $fillable = array('surface', 'puissance');

    public function entreprise()
    {
        return $this->belongsTo('App\Models\Entreprises', 'id_entreprise');
    }

}