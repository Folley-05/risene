<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Arrondissements extends Model 
{

    use HasFactory;

    protected $table = 'arrondissements';
    protected $primaryKey = 'code';
    public $incrementing = false;
    public $timestamps = true;
    protected $fillable=['code', 'libelle', 'departement'];

    public function entreprises()
    {
        return $this->hasMany('App\Models\Entreprises');
    }

    public function departement()
    {
        return $this->belongsTo('App\Models\Departements');
    }

}