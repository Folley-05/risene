<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NatureCreation extends Model 
{
    use HasFactory;
    
    protected $table = 'natureCreations';
    protected $primaryKey = 'code';
    public $incrementing = false;
    public $timestamps = true;
    
    protected $fillable=['code', 'designation'];

    public function entreprise()
    {
        return $this->belongsTo('App\Models\Entreprises', 'id_entreprise');
    }

}