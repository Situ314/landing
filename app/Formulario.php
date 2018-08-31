<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    public $timestamps = false;
    
    protected $fillable = array('CodLanding' ,'NombreCampo', 'Obligatorio', 'CodTipo', 'Tipo', 'CodCombo');
}
