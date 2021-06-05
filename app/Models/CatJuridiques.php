<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatJuridiques extends Model 
{

    protected $table = 'catJuridiques';
    public $timestamps = true;

    public function entreprise()
    {
        return $this->hasMany('App\Models\Entreprises');
    }

}