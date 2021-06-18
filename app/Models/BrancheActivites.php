<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrancheActivites extends Model 
{

    protected $table = 'branchesActivites';
    protected $primaryKey = 'code';
    public $timestamps = true;
    protected $fillable = array('code', 'libelle', 'secteur');

}