<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsommationEnergetiques extends Model 
{

    protected $table = 'consommationEnergetiques';
    public $timestamps = true;
    protected $fillable = array('approvisionnement', 'periodicite', 'cout', 'quantite', 'consoClimatisation', 'consoAppareil', 'consoVehicule');

}