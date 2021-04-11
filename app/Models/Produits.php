<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produits extends Model 
{

    protected $table = 'produits';
    public $timestamps = true;

    public function ventesProduits()
    {
        return $this->belongsTo('App\Models\VentesProduits', 'id_venteProduits');
    }

    public function typeNomenclature()
    {
        return $this->hasOne('App\Models\TypeNommenclatures');
    }

}