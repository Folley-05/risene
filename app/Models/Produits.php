<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produits extends Model 
{

    protected $table = 'produits';
    public $timestamps = true;
    protected $fillable = array('chiffreAffaire', 'id_entreprise', 'pourcentageChiffAff');

    public function typeNomenclature()
    {
        return $this->hasOne('App\Models\TypeNommenclatures');
    }

    public function entreprise()
    {
        return $this->belongsTo('App\Models\Entreprises');
    }

}