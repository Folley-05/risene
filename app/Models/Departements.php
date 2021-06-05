<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departements extends Model 
{
    use HasFactory;

    protected $table = 'departements';
    protected $primaryKey = 'code';
    public $incrementing = false;
    public $timestamps = true;
    protected $fillable=['code', 'libelle', 'region'];

    public function region()
    {
        return $this->belongsTo('App\Models\Regions');
    }

    public function arrondissements()
    {
        return $this->hasMany('App\Models\Arrondissements');
    }

}