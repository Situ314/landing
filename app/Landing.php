<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Landing extends Model
{
    public $timestamps = false;
    
    protected $fillable = array('CodRecolector' ,'Titulo', 'URL', 'Inicio', 'Fin', 'Cont_Ingreso', 'Cont_Boton');
}
