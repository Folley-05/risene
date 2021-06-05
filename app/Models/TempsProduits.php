<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TempsProduits extends Model 
{

    protected $table = 'tempsProduits';
    public $timestamps = true;
    protected $fillable = array('designation', 'code', 'chiffAff', 'pourcentageChiffAff');

}