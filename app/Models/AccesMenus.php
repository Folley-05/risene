<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccesMenus extends Model 
{

    protected $table = 'accesMenus';
    public $timestamps = true;
    protected $fillable = array('role');

}