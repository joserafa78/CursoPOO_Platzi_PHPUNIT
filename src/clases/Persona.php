<?php

namespace App\clases;

class Persona
{
    public $nombre;
    public $sexo;
    public $movil;
    public $calificacion = array();
    public $promedio;
    # code...

    public function __construct($nombre, $sexo, $telef, $calificacion)
    {
        $this->nombre = $nombre;
        $this->sexo = $sexo;
        $this->movil = $telef;
        $this->calificacion = $calificacion;
    }


    public function promedioCalculo() // []
    {
        $notas = $this->calificacion;
        $total = 0;
        foreach ($notas as $value) {
            $total +=  $value;
        }
        $this->promedio = ($total / count($notas));
    }
}
