<?php

namespace App\contro;

$arregloServicios = array();
$estado = false;
$mensaje = '';

use App\abstracto\Artefacto;
use App\abstracto\Persona as AbstractoPersona;
use App\clases\ValidaPos;
use App\clases\CapturaPos;


class Alumno extends AbstractoPersona
{

    public function __construct($id, $nombres, $apellidos,) //Solo para Facilitar el codigo.
    {
        $this->id = $id;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
    }

    public function despedida()
    {
    }
}

class Celular extends Artefacto
{

    public function __construct($id, $nombre, $marca, $modelo, $serial, $imagen, $fechaIngreso, $gbAlmacinamiento, $fallas)
    {

        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->serial = $serial;
        $this->fechaIngreso = $fechaIngreso;
    }
}


//Funciones


//Condicion
if (isset($_POST['envia']) && (!ValidaPos::validaCampoNULL(...(array_values($_POST))))) {
    $servico = CapturaPos::capturaPOS($_POST);
    array_push($arregloServicios, $servico);

    $estado = true;
    $mensaje = 'Entra.';
} else {

    $estado = false;
    $mensaje = '';
}
