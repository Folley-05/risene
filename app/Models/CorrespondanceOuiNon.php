<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CorrespondanceOuiNon extends Model 
{

    protected $table = 'correspondanceOuiNon';
    public $timestamps = true;
    protected $fillable = array('code');

    public function entreprise()
    {
        return $this->hasOne('App\Models\Entreprises');
    }

    public function statusOccupationLocal()
    {
        return $this->hasOne('App\Models\StatusOccupationLocals');
    }

}