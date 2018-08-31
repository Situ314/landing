<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitante extends Model
{
    public $timestamps = false;
    
    protected $fillable = array('IpAdrress', 'Region', 'CodLanding', 'FechaHora','Campo1', 'Campo2', 'Campo3', 'Campo4', 'Campo5', 'Campo6', 'Campo7', 'Campo8', 'Campo9', 'Campo10');
}
