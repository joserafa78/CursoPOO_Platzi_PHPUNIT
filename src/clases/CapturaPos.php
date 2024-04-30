<?php

namespace App\clases;

class CapturaPos
{
    /**
     * Recibe arreglo Compuesto y Devuelve un arreglo Simple.
     * @return array
     */
    public static function capturaPOS($posArreglo): array
    {
        $valoresPos = array_values($posArreglo);

        return $valoresPos;
    }
} //Fin Class.