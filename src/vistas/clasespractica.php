<?php

namespace App\vistas;

require '../../vendor/autoload.php';
require '../../config.php';

use App\abstracto\Persona as Abst_Persona;
// --CLSES--







class Usuario  extends Abst_Persona
{

    public object $tipo; //Tipo objeto.
    public function saludax()
    {
        return 'Hola soy Usuario.';
    }
    function __construct($id, $nombres, $apellidos, $sexo, $telefono, object $tipo,)
    {
        $this->id = $id;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->sexo = $sexo;
        $this->telefono = $telefono;
        $this->tipo = $tipo;
    }
    public function despedida()
    {
        return 'Chao soy ' . $this->nombres . 'hasta luego.';
    }
}

class Administrador extends Abst_Persona
{

    public $cargo;


    public function __construct($id, $nombres, $apellidos, $sexo, $telefono, $cargo)
    {
        $this->id = $id;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->sexo = $sexo;
        $this->telefono = $telefono;
        $this->cargo = $cargo;
    }
    public function saludax()
    {
        return 'Soy Administrador.' . $this->cargo;;
    }
    public function despedida()
    {
        return 'Chao soy el' . $this->cargo;
    }
}
$adm = new Administrador('02', 'Mauro', 'Gut', 'm', '320215555', 'Selador_nocturno');
$uno = new Usuario('01', 'Dalila', 'Ulloa', 'f', '041625124', $adm);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica con Clases</title>
</head>

<body>
    <h1>Practicas con las Clases.</h1>
    <?= $uno->tipo->saluda() ?>

    <div>
        <br />
        <hr size="2">
        <footer>
            <p>Finaliza el contenido</p>
            <a href=<?= URL . 'index.php'  ?>>***HOME***</a>
        </footer>
    </div>
</body>

</html>