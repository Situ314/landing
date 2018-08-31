<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleCombo extends Model
{
    public $timestamps = false;
    
    protected $fillable = array('CodCombo', 'Nombre');
}
