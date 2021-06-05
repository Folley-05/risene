<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NatureCreation extends Model 
{

    protected $table = 'natureCreations';
    public $timestamps = true;

    public function entreprise()
    {
        return $this->belongsTo('App\Models\Entreprises', 'id_entreprise');
    }

}