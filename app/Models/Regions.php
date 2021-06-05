<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Regions extends Model 
{
    use HasFactory;
    
    protected $primaryKey = 'code';
    public $incrementing = false;
    protected $fillable=['code', 'libelle'];
    protected $table = 'regions';
    public $timestamps = true;

    public function departements()
    {
        return $this->hasMany('App\Models\Departements');
    }

}