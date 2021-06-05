<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departements extends Model 
{

    protected $table = 'departements';
    public $timestamps = true;
    protected $fillable = array('code', 'libelle');

    public function region()
    {
        return $this->belongsTo('App\Models\Regions');
    }

    public function arrondissements()
    {
        return $this->hasMany('App\Models\Arrondissements');
    }

}