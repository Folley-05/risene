<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VentesProduits extends Model 
{

    protected $table = 'ventesProduits';
    public $timestamps = true;

    public function entreprise()
    {
        return $this->belongsTo('App\Models\Entreprises', 'id_entreprise');
    }

    public function produits()
    {
        return $this->hasMany('App\Models\Produits');
    }

}