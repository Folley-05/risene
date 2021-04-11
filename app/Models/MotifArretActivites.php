<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MotifArretActivites extends Model 
{

    protected $table = 'motifArretActivites';
    public $timestamps = true;
    protected $fillable = array('code', 'libelle');

    public function entreprise()
    {
        return $this->belongsTo('App\Models\Entreprises', 'id_entreprise');
    }

}