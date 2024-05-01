<?php

use PHPUnit\Framework\TestCase; //Configuracion Propia.

use App\clases\Cliente;

class ClienteTest extends TestCase
//TestCase es una clase de PHPUnit
{
    public function test_mostarClientes()
    {
        $cliente = new Cliente();
        $cliente->guarda('jose', 'jimenez');
        $cliente->guarda('naila', 'ulloa');
        $valor = $cliente->mostrar();
        $this->assertIsArray($valor);
    }
}
