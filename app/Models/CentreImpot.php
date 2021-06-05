<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CentreImpot extends Model 
{

    protected $table = 'centreImpots';
    public $timestamps = true;

    public function entreprise()
    {
        return $this->hasMany('App\Models\Entreprises');
    }

}