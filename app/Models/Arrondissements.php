<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Arrondissements extends Model 
{

    protected $table = 'arrondissements';
    public $timestamps = true;
    protected $fillable = array('code', 'libelle');

    public function entreprises()
    {
        return $this->hasMany('App\Models\Entreprises');
    }

    public function departement()
    {
        return $this->belongsTo('App\Models\Departements');
    }

}