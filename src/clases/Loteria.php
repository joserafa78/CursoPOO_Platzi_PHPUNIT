<?php

namespace App\clases;

class Loteria
{
    public $numero;
    public $intentos;
    public $resultado = false;

    public function __construct($numero, $intentos)
    {
        $this->numero = $numero;
        $this->intentos = $intentos;
    }

    public function sortear()
    {
        $minimo = $this->numero / 2;
        $maximo = $this->numero * 2;
        for ($i = 0; $i < $this->intentos; $i++) {
            $int = rand($minimo, $maximo);
            $resultado[] = self::intentos($int);
        }
        return $resultado;
    }

    public function intentos($int): string
    {
        if ($int == $this->numero) {
            return "$int" . '=' . $this->numero;
        } else {
            return "$int" . '!=' . $this->numero;
        }
    }
}
