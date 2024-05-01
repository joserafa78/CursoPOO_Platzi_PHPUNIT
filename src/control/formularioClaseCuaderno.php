<?php

namespace App\contro;

$arrayResultado = array();

use App\clases\ValidaPos;
use App\clases\CapturaPos;
use App\clases\Loteria;

$estado = false;
$mensaje = '';

//Condicion
if (isset($_POST['envia']) && (!ValidaPos::validaCampoNULL($_POST))) {
    $datos = CapturaPos::capturaPOS($_POST);
    $juego = new Loteria($datos[0], $datos[1]);
    $arrayResultado = $juego->sortear();
    $estado = true;
    $mensaje = 'JUGANDO!!.';
} else {

    $estado = false;
    $mensaje = '';
}
