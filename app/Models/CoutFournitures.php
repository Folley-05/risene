<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoutFournitures extends Model 
{

    protected $table = 'coutFournitures';
    public $timestamps = true;
    protected $fillable = array('valeur');

    public function entreprise()
    {
        return $this->belongsTo('App\Models\Entreprises', 'id_entreprise');
    }

    public function fournitures()
    {
        return $this->hasMany('App\Models\Fournitures');
    }

}