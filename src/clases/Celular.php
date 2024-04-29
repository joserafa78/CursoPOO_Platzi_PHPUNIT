<?php 
namespace App\clases;

use App\abstracto\Artefacto;

class celuar extends Artefacto{

    private $gbAlmacinamiento;
    private $fallas=array();//Arreglo de fallas

    public function __construct($id, $nombre, $marca, $modelo, $serial, $imagen, $fechaIngreso, $gbAlmacinamiento, $fallas)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->serial = $serial;
        $this->imagen = $imagen;
        $this->fechaIngreso = $fechaIngreso;
        $this->gbAlmacinamiento = $gbAlmacinamiento;
        $this->fallas = $fallas;
    }

    
    //Getterr
    public function getGbAlmacinamiento()
    {
        return $this->gbAlmacinamiento;
    }

    public function getFallas()
    {
        return $this->fallas;
    }
    
    //Setter.
    public function setFallas($fallas)
    {
        $this->fallas = $fallas;

        return $this;
    }
}

?>