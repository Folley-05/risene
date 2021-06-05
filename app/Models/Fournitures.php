<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fournitures extends Model 
{

    protected $table = 'fournitures';
    public $timestamps = true;
    protected $fillable = array('designation', 'code');

    public function coutFournitures()
    {
        return $this->hasOne('App\Models\CoutFournitures', 'id_coutFourniture');
    }

}