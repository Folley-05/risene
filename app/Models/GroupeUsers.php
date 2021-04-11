<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupeUsers extends Model 
{

    protected $table = 'groupeUsers';
    public $timestamps = true;
    protected $fillable = array('nom');

}