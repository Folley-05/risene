<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obstacles extends Model 
{

    protected $table = 'obstacles';
    public $timestamps = true;
    protected $fillable = array('intitule', 'code');

    public function entreprise()
    {
        return $this->hasMany('App\Models\Entreprises');
    }

}