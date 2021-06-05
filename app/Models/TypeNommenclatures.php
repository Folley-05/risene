<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeNommenclatures extends Model 
{

    protected $table = 'typeNommenclatures';
    public $timestamps = true;

    public function produits()
    {
        return $this->hasOne('App\Models\Produits');
    }

    public function nationalites()
    {
        return $this->hasMany('App\Models\Nationalites');
    }

    public function actiites()
    {
        return $this->hasMany('App\Models\Activites');
    }

    public function npmenclature()
    {
        return $this->hasOne('APP\Models\Nomenclatures');
    }

}