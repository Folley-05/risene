<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model 
{

    protected $table = 'Status';
    protected $primaryKey = 'code';
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = array('code, intitule');

    public function entreprise()
    {
        return $this->hasMany('App\Models\Entreprises');
    }

}