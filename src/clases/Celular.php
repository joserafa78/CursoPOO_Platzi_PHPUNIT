<?php

namespace App\clases;

use App\abstracto\Artefacto;

class celuar extends Artefacto
{

    private $gbAlmacinamiento;
    private $fallas = array(); //Arreglo de fallas

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

    //Getter.
    public  function    getId()
    {
        return $this->id;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getMarca()
    {
        return $this->marca;
    }
    public function getModelo()
    {
        return $this->modelo;
    }
    public function getSerial()
    {
        return $this->serial;
    }
    public function getImagen()
    {
        return $this->imagen;
    }
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }
    public function getGbAlmacinamiento()
    {
        return $this->gbAlmacinamiento;
    }

    public function getFallas()
    {
        return $this->fallas;
    }
    //Setter.
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }
    public function setSerial($serial)
    {
        $this->serial = $serial;

        return $this;
    }
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }
    public function setFallas($fallas)
    {
        $this->fallas = $fallas;

        return $this;
    }
}
