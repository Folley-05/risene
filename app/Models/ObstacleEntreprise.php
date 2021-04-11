<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ObstacleEntreprise extends Model 
{

    protected $table = 'obstacleEntreprises';
    public $timestamps = true;
    protected $fillable = array('importance');

}