<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SystemeDsfs extends Model 
{

    protected $table = 'systemeDsfs';
    public $timestamps = true;
    protected $fillable = array('designation', 'code');

    public function entreprise()
    {
        return $this->belongsTo('App\Models\Entreprises', 'id_entreprise');
    }

}