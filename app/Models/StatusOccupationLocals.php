<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StatusOccupationLocals extends Model 
{
    use HasFactory;
    protected $fillable=['code', 'intitule'];

    protected $table = 'statusOccupationLocals';
    protected $primaryKey = 'code';
    public $incrementing = false;
    public $timestamps = true;

    public function correspondanceouinon()
    {
        return $this->hasOne('App\Models\CorrespondanceOuiNon');
    }

}