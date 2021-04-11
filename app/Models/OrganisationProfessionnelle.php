<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrganisationProfessionnelle extends Model 
{

    protected $table = 'organisationProfessionnelles';
    public $timestamps = true;
    protected $fillable = array('designation', 'code');

    public function entreprise()
    {
        return $this->hasMany('App\Models\Entreprises');
    }

}