<?php

namespace App\clases;

class Contrasena
{
    protected $nombre;
    protected $edad;
    public static $miniPasLength = 6;

    public static function validaLongitudPass($valor): bool
    {
        if (strlen($valor) >= self::$miniPasLength) {
            return true;
        } else {
            return false;
        }
    }
}
