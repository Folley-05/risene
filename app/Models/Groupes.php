<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Groupes extends Model 
{

    protected $table = 'groupes';
    public $timestamps = true;
    protected $fillable = array('nom', 'code');

    public function entreprise()
    {
        return $this->hasMany('App\Models\Entreprises');
    }

}