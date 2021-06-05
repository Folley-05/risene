<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeFormations extends Model 
{

    protected $table = 'typeFormatures';
    public $timestamps = true;
    protected $fillable = array('intitule');

    public function promoteurs()
    {
        return $this->hasMany('App\Models\Promoteurs');
    }

}