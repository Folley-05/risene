<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departements extends Model 
{
    use HasFactory;

    protected $table = 'departements';
    public $timestamps = true;
    protected $fillable=['code', 'libelle', 'region'];

    public function entreprises()
    {
        return $this->hasMany('App\Models\Entreprises');
    }

}