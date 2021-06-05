<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EtatActivites extends Model 
{

    protected $table = 'etatActivites';
    public $timestamps = true;
    protected $fillable = array('code');

    public function entreprise()
    {
        return $this->belongsTo('App\Models\Entreprises', 'id_entreprise');
    }

}