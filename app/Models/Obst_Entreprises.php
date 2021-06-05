<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obst_Entreprises extends Model 
{

    protected $table = 'obst_Entreprises';
    public $timestamps = true;
    protected $fillable = array('id_entreprise');

}