<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diplomes extends Model 
{

    protected $table = 'diplomes';
    public $timestamps = true;
    protected $fillable = array('intitule');

    public function promoteurs()
    {
        return $this->belongsTo('App\Models\Promoteurs', 'id_promoteurs');
    }

}