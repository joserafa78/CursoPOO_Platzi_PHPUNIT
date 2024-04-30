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
    public static function validaCampoNULL($arregloOriginal): bool
    {
        $arrayValores = array_values($arregloOriginal);
        $bandera = false;
        foreach ($arrayValores as $value) {
            if ($value == '') {
                $bandera = true;
                break;
            }
        }
        return $bandera;
    } // True:Campo Vacio / False:Campos Corecto


} //Fin Class.
