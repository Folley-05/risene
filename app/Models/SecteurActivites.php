<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SecteurActivites extends Model 
{

    protected $table = 'secteurActivites';
    protected $primaryKey='code';
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = array('libelle', 'code');

    public function activites()
    {
        return $this->hasMany('App\Models\Activites');
    }

}