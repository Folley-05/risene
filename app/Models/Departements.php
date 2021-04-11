<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departements extends Model 
{

    protected $table = 'departements';
    public $timestamps = true;
    protected $fillable = array('code', 'libelle');

    public function entreprises()
    {
        return $this->hasMany('App\Models\Entreprises');
    }

}