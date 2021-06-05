<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EtatActivites extends Model 
{
    use HasFactory;

    protected $table = 'etatActivites';
    protected $primaryKey = 'code';
    public $incrementing = false;
    public $timestamps = true;
    protected $fillable=['code', 'etat'];

    public function entreprise()
    {
        return $this->belongsTo('App\Models\Entreprises', 'id_entreprise');
    }

}