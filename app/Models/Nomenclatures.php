<?php

namespace APP\Models;

use Illuminate\Database\Eloquent\Model;

class Nomenclatures extends Model 
{

    protected $table = 'nomenclatures';
    public $timestamps = true;
    protected $fillable = array('libelle', 'code');

    public function entreprise()
    {
        return $this->hasMany('App\Models\Entreprises');
    }

    public function typeNomenclature()
    {
        return $this->hasOne('App\Models\TypeNommenclatures');
    }

}