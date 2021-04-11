<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model 
{

    protected $table = 'Status';
    public $timestamps = true;
    protected $fillable = array('code');

    public function entreprise()
    {
        return $this->hasMany('App\Models\Entreprises');
    }

}