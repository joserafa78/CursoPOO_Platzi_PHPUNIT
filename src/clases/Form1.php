<?php

namespace App\clases;

class Form1
{

    //metodos[TESTUNIT]
    public static function valida($arrayPos)
    {
        $valor = false;
        if (isset($arrayPos['envia'])) {
            if ((!$arrayPos['nombre'] == '') && (!$arrayPos['sexo'] == '') && (!$arrayPos['telefono'] == '') && (!$arrayPos['notas'] == '')) {
                $valor = true;
            }
        } else {
            $valor = false;
        }

        return $valor;
    }
    //metodos[TESTUNIT]
    public static function validaCantidadVaribles($arrayPos)//Devuelve (v/f) si hay Error.
    {
   
        $arraykey = array_keys($arrayPos); //solo las key
        $arrayEsperado = ['nombre', 'sexo', 'telefono', 'notas', 'envia'];
        $pala1= implode(',',$arraykey); //Conviente en String.
        $pala2= implode(',',$arrayEsperado);
        if ($pala1==$pala2) {
            return false;
        }else{
            return true; //Error, hay un error.(true)
        }
      
    }
    // metodo [TESTUNITARIO]
    public static function creaObjetoAlunno($array_post) 
    {
        $nom= $array_post['nombre'];
        $sex=$array_post['sexo'];
        $tel=$array_post['telefono'];
        $califi= explode(',',$array_post['notas']) ;
        $nuevaP = new Persona($nom,$sex,$tel,$califi);
        $nuevaP->promedioCalculo();
        return $nuevaP;
    }
}
