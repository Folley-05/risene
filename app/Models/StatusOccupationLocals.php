<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusOccupationLocals extends Model 
{
    use HasFactory;
    protected $fillable=['code', 'intitule'];

    protected $table = 'statusOccupationLocals';
    public $timestamps = true;

    public function correspondanceouinon()
    {
        return $this->hasOne('App\Models\CorrespondanceOuiNon');
    }

}