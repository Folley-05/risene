<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SourceEnergies extends Model 
{

    protected $table = 'sourceEnergies';
    public $timestamps = true;
    protected $fillable = array('uniteMesure');

    public function entreprise()
    {
        return $this->hasMany('App\Models\Entreprises');
    }

}