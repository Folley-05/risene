<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatImpotLiberatoires extends Model 
{

    protected $table = 'catImpotLiberatoires';
    public $timestamps = true;
    protected $fillable = array('intitule', 'code');

}