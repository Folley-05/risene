<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CirconscriptionAdm extends Model 
{

    protected $table = 'circonscriptionAdm';
    public $timestamps = true;

    public function entreprise()
    {
        return $this->hasMany('App\Models\Entreprises');
    }

}