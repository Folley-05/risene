<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartOrigineFonds extends Model 
{

    protected $table = 'partOrigineFonds';
    public $timestamps = true;
    protected $fillable = array('valeur');

}