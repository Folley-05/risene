<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TraitementDechets extends Model 
{

    protected $table = 'traitementDechets';
    public $timestamps = true;

    public function entreprise()
    {
        return $this->belongsTo('App\Models\Entreprises', 'id_entreprise');
    }

}