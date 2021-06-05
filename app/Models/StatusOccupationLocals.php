<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusOccupationLocals extends Model 
{

    protected $table = 'statusOccupationLocals';
    public $timestamps = true;
    protected $fillable = array('intitule');

    public function correspondanceouinon()
    {
        return $this->hasOne('App\Models\CorrespondanceOuiNon');
    }

}