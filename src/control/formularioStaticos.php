<?php

namespace App\contro;

use App\clases\ValidaPos;
use App\clases\CapturaPos;
use App\clases\Contrasena;


//Condicion
if (isset($_POST['envia']) && (!ValidaPos::validaCampoNULL($_POST))) {
    $dato = CapturaPos::capturaPOS($_POST); //Devuelve array Simple.
    $estado = Contrasena::validaLongitudPass($dato[0]);
    $mensaje = 'Contraseña Aceptada..';
} else {

    $estado = false;
    $mensaje = '';
}
