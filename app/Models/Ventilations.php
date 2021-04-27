<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ventilations extends Model 
{

    protected $table = 'ventilations';
    public $primaryKey = 'code';
    public $increment = false;
    public $timestamps = true;
    protected $fillable = array('code', 'nomEtablissement', 'ville', 'quartier', 'id_entreprise');

    public function entreprise()
    {
        return $this->belongsTo('App\Models\Entreprises', 'id_entreprise');
    }

}