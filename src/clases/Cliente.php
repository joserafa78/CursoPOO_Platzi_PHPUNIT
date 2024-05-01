<?php

namespace App\clases;

class Cliente
{
    public $nombre = array();
    public $apellido = array();

    public function guarda($nomb, $apell)
    {
        $this->nombre[] = $nomb;
        $this->apellido[] = $apell;
    }

    public function mostrar()
    {
        $arregloCliente = array();
        for ($i = 0; $i < count($this->nombre); $i++) {
            $arregloCliente[] = $this->formato($this->nombre[$i], $this->apellido[$i]);
        }
        return $arregloCliente;
    }
    private function formato($n, $a)
    {
        return "nombre:$n apellido:$a";
    }
}
