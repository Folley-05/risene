<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SourceMisejours extends Model 
{

    protected $table = 'sourceMisejours';
    public $timestamps = true;

    public function entreprise()
    {
        return $this->hasMany('App\Models\Entreprises');
    }

}