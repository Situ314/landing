<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recolector extends Model
{
    protected $table = 'recolectores';
    public $timestamps = false;
    
    protected $fillable = array('Nombre');
}
