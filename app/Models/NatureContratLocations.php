<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NatureContratLocations extends Model 
{

    protected $table = 'natureContratLocations';
    public $timestamps = true;
    protected $fillable = array('intitule');

    public function entreprise()
    {
        return $this->belongsTo('App\Models\Entreprises', 'id_entreprise');
    }

    public function correspondanceouinon()
    {
        return $this->hasOne('App\Models\CorrespondanceOuiNon');
    }

}