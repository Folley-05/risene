<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypePollutions extends Model 
{

    protected $table = 'typePollutions';
    public $timestamps = true;

    public function entreprise()
    {
        return $this->hasMany('App\Models\Entreprises');
    }

}