<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EtatMatrimonials extends Model 
{

    protected $table = 'etatMatrimonials';
    public $timestamps = true;

    public function promoteurs()
    {
        return $this->hasMany('App\Models\Promoteurs');
    }

}