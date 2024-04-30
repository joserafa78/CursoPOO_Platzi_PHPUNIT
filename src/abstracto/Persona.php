<?php

namespace App\abstracto;

abstract class Persona
{
  private $id;
  public $nombres;
  public $apellidos;
  public $sexo;
  public $telefono;

  //No se instancia.
  public function __construct($id, $nombres, $apellidos, $sexo, $telefono) //Solo para Facilitar el codigo.
  {
    $this->id = $id;
    $this->nombres = $nombres;
    $this->apellidos = $apellidos;
    $this->sexo = $sexo;
    $this->telefono = $telefono;
  }

  public function saluda()
  {
    return "Hola soy $this->nombres , $this->apellidos , Que pases un Buen dia";
  }

  abstract public function despedida();
}
