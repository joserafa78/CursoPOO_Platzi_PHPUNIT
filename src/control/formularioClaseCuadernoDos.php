<?php

namespace App\contro;

$arrayResultado = array();

use App\clases\ValidaPos;
use App\clases\CapturaPos;
use App\clases\Cliente;

$estado = false;
$mensaje = '';

//Condicion
if (isset($_POST['envia']) && (!ValidaPos::validaCampoNULL($_POST))) {
    $datos = CapturaPos::capturaPOS($_POST);
    $client = new Cliente();
    $client->guarda($datos[0], $datos[1]);
    $arrayResultado = $client->mostrar();
    $estado = true;
    $mensaje = '';
} else {

    $estado = false;
    $mensaje = '';
}
