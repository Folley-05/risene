<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemeDsfs extends Model 
{
    use HasFactory;
    protected $fillable=['code', 'designation'];

    protected $table = 'systemeDsfs';
    protected $primaryKey = 'code';
    public $incrementing = false;
    public $timestamps = true;

    public function entreprise()
    {
        return $this->belongsTo('App\Models\Entreprises', 'id_entreprise');
    }

}