<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SecteurActivites extends Model 
{

    protected $table = 'secteurActivites';
    public $timestamps = true;
    protected $fillable = array('libelle', 'code');

    public function activites()
    {
        return $this->hasMany('App\Models\Activites');
    }

}