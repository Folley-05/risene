<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrigineFonds extends Model 
{

    protected $table = 'origineFonds';
    public $timestamps = true;

    public function entreprise()
    {
        return $this->hasMany('App\Models\Entreprises');
    }

}