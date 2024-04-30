<?php
// https://www.youtube.com/watch?v=khhz8RAoSww&ab_channel=VidaMRR-Programacionweb
use PHPUnit\Framework\TestCase; //Configuracion Propia.
use App\clases\ValidaPos;
use App\clases\CapturaPos;


class HerenciaTest extends TestCase
//TestCase es una clase de PHPUnit
{
    public function test_validaPos()
    {
        $esperado = [
            'nombre' => 'Jose',
            'apellido' => 'Serna',
            'numero' => '678341496',
            'marca' => 'Apple',
            'modelo' => 'Nokia 5.4',
            'serial' => 'a10124',
            'envia ' => ''
        ];
        $valor = ValidaPos::validaCampoNULL($esperado);
        $this->assertTrue($valor);
    }

    public function test_validaCapturaPos()
    {
        $valor = array('nombre' => 'ana', 'edad' => 18);
        $arregloSimple = CapturaPos::capturaPOS($valor);
        $cadena = implode('-', $arregloSimple);
        $esperado = 'ana-18';
        $this->assertEquals($esperado, $cadena);
    }
}
