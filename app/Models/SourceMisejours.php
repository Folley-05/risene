<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SourceMisejours extends Model 
{
    use HasFactory;

    protected $table = 'sourceMisejours';
    protected $primaryKey = 'code';
    public $timestamps = true;

    protected $fillable = array('code', 'source');

    public function entreprise()
    {
        return $this->hasMany('App\Models\Entreprises');
    }

}