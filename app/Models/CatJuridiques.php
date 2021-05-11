<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CatJuridiques extends Model 
{

    use HasFactory;

    protected $table = 'catJuridiques';
    protected $primaryKey='code';
    public $incrementing=false;
    public $timestamps = true;

    public function entreprise()
    {
        return $this->hasMany('App\Models\Entreprises');
    }

}