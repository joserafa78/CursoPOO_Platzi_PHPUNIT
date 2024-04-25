<?php
// https://www.youtube.com/watch?v=khhz8RAoSww&ab_channel=VidaMRR-Programacionweb
use PHPUnit\Framework\TestCase;//Configuracion Propia.
use App\clases\form1 ;
use App\clases\Persona;

class ValidateTest extends TestCase
//TestCase es una clase de PHPUnit
{
    public function test_formulrio1(){
        $esperado=['nombre'=>'jose','sexo'=>'m','telefono'=>'3136854','notas'=>'15,13,15','envia'=>'enviar'];
        $valor = form1::valida($esperado);
        $this->assertTrue($valor);

        $esperado2=['nombre'=>'jose','sexo'=>'','telefono'=>'3136854','notas'=>'15,13,15','envia'=>'enviar'];
        $valor2 = form1::valida($esperado2);
        $this->assertFalse($valor2);

       
  
    }
    public function test_validaCantidaCampo(){
        $arrayEsperado = ['nombre'=>'','sexo'=>'','telefono'=>'','notas'=>'','envia'=>''];;//Cantidad de variables.
        $valor = form1::validaCantidadVaribles ($arrayEsperado);
        $this->assertFalse($valor);
    }
    public function test_validaPromedioNota(){
        $persona = new Persona('jose','m','123',[12,12,12]);
        $persona->promedioCalculo() ;//Ejecuta Promedio
        $esperado=12.0;
        $valor= $persona->promedio;
        $this->assertEquals($esperado,$valor);
     

    }
    public function test_creaObjetoAlunno() {
        $datos=['nombre'=>'jose','sexo'=>'m','telefono'=>'3136854','notas'=>'15,13,15'];
        $valor = form1::creaObjetoAlunno ($datos);
        $this->assertIsObject($valor);   
    }


}