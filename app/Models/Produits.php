<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produits extends Model 
{

    protected $table = 'produits';
    public $primaryKey = 'code';
    public $increment = false;
    public $timestamps = true;
    protected $fillable = array('code', 'designation', 'chiffreAffaire', 'pourcentageChiffAff', 'id_entreprise');

    public function ventesProduits()
    {
        return $this->belongsTo('App\Models\VentesProduits', 'id_venteProduits');
    }

    public function typeNomenclature()
    {
        return $this->hasOne('App\Models\TypeNommenclatures');
    }

}