<?php

namespace App\clases;

class ValidaPos
{

    /**
     * funcion que devuleve
     * ture:campo vacio
     * false:campos debidamente cargados.
     
     * @return boolean
     */
    public static function validaCampoNULL($a, $b, $c, $d, $e, $f, $g): bool
    {
        $bandera = false;
        $variables = ['a', 'b', 'c', 'd', 'e', 'f', 'g']; //Cantidad Variables Capturadas
        foreach ($variables as $value) {
            if ((${$value}) == '') {
                $bandera = true;
                break;
            }
        }
        return $bandera;
    } // True:Campo Vacio / False:Campos Corecto


} //Fin Class.
