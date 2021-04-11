<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PolitiquePubliques extends Model 
{

    protected $table = 'politiquePubliques';
    public $timestamps = true;
    protected $fillable = array('intitule');

    public function entreprise()
    {
        return $this->hasMany('App\Models\Entreprises');
    }

}