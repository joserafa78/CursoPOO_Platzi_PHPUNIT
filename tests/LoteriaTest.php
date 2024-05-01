<?php
// https://www.youtube.com/watch?v=khhz8RAoSww&ab_channel=VidaMRR-Programacionweb
use PHPUnit\Framework\TestCase; //Configuracion Propia.

use App\clases\Loteria;

class LoteriaTest extends TestCase
//TestCase es una clase de PHPUnit
{
    public function test_intentosLoteria()
    {
        $loteria = new Loteria(5, 3);
        $valor = $loteria->intentos(5);
        $esperado = '5=5';
        $this->assertEquals($esperado, $valor);

        $loteria2 = new Loteria(5, 3);
        $valor = $loteria2->intentos(3);
        $esperado = '3!=5';
        $this->assertEquals($esperado, $valor);
    }
    public function test_sortear()
    {
        $loteria = new Loteria(0, 1);
        $valor = $loteria->sortear();
        $esperado = '0=0';
        $this->assertEquals($esperado, $valor[0]);
    }
}
