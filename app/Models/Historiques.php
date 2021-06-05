<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historiques extends Model 
{

    protected $table = 'historiques';
    public $timestamps = true;
    protected $fillable = array('action', 'objet', 'date', 'variables', 'valeurs');

}