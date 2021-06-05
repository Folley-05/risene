<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ventilations extends Model 
{

    protected $table = 'ventilations';
    public $timestamps = true;
    protected $fillable = array('code', 'nomEtablissement', 'ville', 'quartier');

    public function entreprise()
    {
        return $this->belongsTo('App\Models\Entreprises', 'id_entreprise');
    }

}