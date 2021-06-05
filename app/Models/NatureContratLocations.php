<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NatureContratLocations extends Model 
{

    use HasFactory;
    
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