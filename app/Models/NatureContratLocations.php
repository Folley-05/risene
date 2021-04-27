<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NatureContratLocations extends Model 
{
    use HasFactory;

    protected $table = 'natureContratLocations';
    protected $primaryKey = 'code';
    public $incrementing = false;
    public $timestamps = true;
    protected $fillable=['code', 'intitule'];

    public function entreprise()
    {
        return $this->belongsTo('App\Models\Entreprises', 'id_entreprise');
    }

    public function correspondanceouinon()
    {
        return $this->hasOne('App\Models\CorrespondanceOuiNon');
    }

}