<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CatImpotLiberatoires extends Model 
{
    use HasFactory;

    protected $table = 'catImpotLiberatoires';
    protected $primaryKey ='code';
    public $incrementing=false;
    public $timestamps = true;
    protected $fillable = array('intitule', 'code');

}