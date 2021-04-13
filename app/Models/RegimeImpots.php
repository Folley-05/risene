<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegimeImpots extends Model 
{
    use HasFactory;
    protected $fillable=['code', 'designation', 'intitule'];

    protected $table = 'regimeImpots';
    protected $primaryKey = 'code';
    public $incrementing = false;
    public $timestamps = true;

    public function entreprise()
    {
        return $this->hasMany('App\Models\Entreprises');
    }

}