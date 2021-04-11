<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nationalites extends Model 
{

    protected $table = 'nationalites';
    public $timestamps = true;
    protected $fillable = array('intitule');

    public function promoteurs()
    {
        return $this->hasMany('App\Models\Promoteurs');
    }

    public function typeNomenclature()
    {
        return $this->hasOne('App\Models\TypeNommenclatures', 'id_typeNomenclature');
    }

}