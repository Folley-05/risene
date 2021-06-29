<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormeJuridiques extends Model 
{
    use HasFactory;

    protected $table = 'formeJuridiques';
    protected $primaryKey='code';
    public $timestamps = true;
    protected $fillable = array('libelle', 'code');

    public function entreprise()
    {
        return $this->hasMany('App\Models\Entreprises');
    }

}