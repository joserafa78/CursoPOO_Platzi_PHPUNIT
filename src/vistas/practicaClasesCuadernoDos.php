<?php

namespace App\vistas;

require '../../vendor/autoload.php';
require '../../config.php';
include_once '../control/formularioClaseCuadernoDos.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica Dos</title>
</head>

<body>
    <h1>Segunda Practica del Cuaderno php</h1>
    <h5>Cuaderno php</h5>
    <form action='<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>' method='post'>
        <!-- Contenido -->
        <label for=''>Nombre</label>
        <input type='text' id='' placeholder='' class='' name="nombre">
        <label for=''>Apellido</label>
        <input type='text' id='' placeholder='' class='' name="apellido">
        <!-- Botones -->
        <br />
        <br />
        <input type='reset' id='' value='Resetear' onclick='' class=''>
        <input type='submit' id='' value='Enviar' onclick='' class='' name='envia'>
        <hr size="3">

        <?php if ($estado) : ?>

            <ul>
                <?php foreach ($arrayResultado as $value) : ?>
                    <li> <?= $value ?></li>

                <?php endforeach; ?>
            </ul>

        <?php endif; ?>
        <div>
            <hr size="2">
            <footer>
                <p>Finaliza el contenido</p>
                <a href=<?= URL . 'index.php'  ?>>***HOME***</a>
            </footer>
        </div>
</body>

</html>
</form>