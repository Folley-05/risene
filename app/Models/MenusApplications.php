<?php

namespace App/Models;

use Illuminate\Database\Eloquent\Model;

class MenusApplications extends Model 
{

    protected $table = 'menusApplications';
    public $timestamps = true;
    protected $fillable = array('intitule', 'icone', 'code');

}