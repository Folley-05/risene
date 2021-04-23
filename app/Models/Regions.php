<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regions extends Model 
{
    use HasFactory;
    
    protected $primaryKey = 'code';
    public $incrementing = false;
    protected $fillable=['code', 'libelle'];

    public function entreprises()
    {
        return $this->hasMany('App\Models\Entreprises');
    }

}