<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtatActivites extends Model 
{
    use HasFactory;

    protected $table = 'etatActivites';
    public $timestamps = true;
    protected $fillable=['code', 'etat'];

    public function entreprise()
    {
        return $this->belongsTo('App\Models\Entreprises', 'id_entreprise');
    }

}