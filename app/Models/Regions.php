<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regions extends Model 
{

    protected $table = 'regions';
    public $timestamps = true;
    protected $fillable = array('code');

    public function entreprises()
    {
        return $this->hasMany('App\Models\Entreprises');
    }

}