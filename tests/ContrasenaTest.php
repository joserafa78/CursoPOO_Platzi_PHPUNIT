<?php

use PHPUnit\Framework\TestCase; //Configuracion Propia.
use App\clases\Contrasena;



class PasswordTest extends TestCase
//TestCase es una clase de PHPUnit
{
    public function test_validaContrsena()
    {
        $dato = ['j345', 'Enviar'];
        $valor = Contrasena::validaLongitudPass($dato[0]);
        $this->assertFalse($valor);

        $dato = ['jose13454', 'Enviar'];
        $valor = Contrasena::validaLongitudPass($dato[0]);
        $this->assertTrue($valor);
    }
}
