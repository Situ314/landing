<?php
 
function currentUser()
{
    return auth()->user();
}
function FechaParaMySQL($Fecha) {
    if( $Fecha!='') {
        $Fecha = strtr($Fecha, '-', '/');  //convierte a dd/mm/aaaa
        $Fecha = implode( '/', array_reverse( explode( '/', $Fecha ) ) ) ;
    }
    return $Fecha;
}
//
function FechaDeMySQL($Fecha) {
    if( $Fecha!='') {
        $Fecha = strtr($Fecha, '-', '/');  //convierte a aaaa/mm/dd
        $Fecha = implode( '/', array_reverse( explode( '/', $Fecha ) ) ) ;
    }
    return $Fecha;
}

function getRealIP() {
        if (isset($_SERVER["HTTP_CLIENT_IP"])) 
            return $_SERVER["HTTP_CLIENT_IP"];
        elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
            return $_SERVER["HTTP_X_FORWARDED_FOR"];
        elseif (isset($_SERVER["HTTP_X_FORWARDED"]))
            return $_SERVER["HTTP_X_FORWARDED"];
        elseif (isset($_SERVER["HTTP_FORWARDED_FOR"]))
            return $_SERVER["HTTP_FORWARDED_FOR"];
        elseif (isset($_SERVER["HTTP_FORWARDED"]))
            return $_SERVER["HTTP_FORWARDED"];
        else
            return $_SERVER["REMOTE_ADDR"];
    }


