<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etablissements extends Model 
{

    protected $table = 'etablissements';
    public $timestamps = true;
    protected $fillable = array('nom', 'region', 'ville', 'quartier', 'id_entreprise', 'codeIns', 'sigle', 'departement', 'arrondissements', 'boitePostale', 'villeImplantation', 'rue', 'latitude', 'longitude', 'altitude', 'tel1', 'tel2', 'fax', 'email', 'chiffAffHT', 'effectifPermanent', 'situationExportation', 'chiffAffExp', 'dateCreationAdmin', 'dateDebutActivites', 'dateCessation', 'anneeDsf', 'statut', 'dateMiseajours');

    public function entreprise()
    {
        return $this->belongsTo('App\Models\Entreprises');
    }

}