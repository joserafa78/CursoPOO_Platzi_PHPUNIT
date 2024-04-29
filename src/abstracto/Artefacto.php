<?php

namespace App\abstracto;

abstract class Artefacto
{
    protected $id;
    public $nombre;
    public $marca;
    public $modelo;
    public $serial;
    public $imagen;
    public $fechaIngreso;



    public function __construct($id, $nombre, $marca, $modelo, $serial, $imagen, $fechaIngreso)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->serial = $serial;
        $this->imagen = $imagen;
        $this->fechaIngreso = $fechaIngreso;
    }

    /**
     * Devuelte los Datos del objeto en formato de arreglo
     * @author Joserafa78
     * @return array
     */
    public function muestraDatos()
    {
        array_push($arregloDatos, $this->id);
        array_push($arregloDatos, $this->nombre);
        array_push($arregloDatos, $this->marca);
        array_push($arregloDatos, $this->modelo);
        array_push($arregloDatos, $this->serial);
        array_push($arregloDatos, $this->imagen);
        array_push($arregloDatos, $this->fechaIngreso);
        return $arregloDatos;
    }




    //Getter.
    public function getId()
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
}
