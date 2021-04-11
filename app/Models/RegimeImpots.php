<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegimeImpots extends Model 
{

    protected $table = 'regimeImpots';
    public $timestamps = true;

    public function entreprise()
    {
        return $this->hasMany('App\Models\Entreprises');
    }

}