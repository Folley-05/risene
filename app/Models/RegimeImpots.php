<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RegimeImpots extends Model 
{
    use HasFactory;
    
    protected $table = 'regimeImpots';
    protected $primaryKey = 'code';
    public $incrementing = false;
    public $timestamps = true;
    
    protected $fillable=['code', 'designation', 'intitule'];

    public function entreprise()
    {
        return $this->hasMany('App\Models\Entreprises');
    }

}