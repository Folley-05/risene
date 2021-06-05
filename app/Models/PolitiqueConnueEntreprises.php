<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PolitiqueConnueEntreprises extends Model 
{

    protected $table = 'politiqueConnueEntreprises';
    public $timestamps = true;
    protected $fillable = array('appreciationPolitique');

}