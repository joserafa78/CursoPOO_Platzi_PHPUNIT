<?php

namespace App\vistas;

require '../../vendor/autoload.php';
require '../../config.php';
include_once '../control/formularioClaseCuaderno.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica del Cuaderno</title>
</head>

<body>
    <h1>Mis Practicas desde el Cuaderno</h1>
    <h5>Clases y herencia.</h5>
    <hr size="3">
    <form action='<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>' method='post'>
        <!-- Contenido -->
        <label for=''>Nomero Sorteo</label>
        <input type='number' id='' placeholder='' class=' ' name="numero">


        <label for="intentos">Mi Sorteo</label>
        <select name="intentos" id="intentos" required>
            <option value="1" disabled selected>Intentos</option>

            <option value="1">
                Uno
            </option>
            <option value="2">
                Dos
            </option>
            <option value="3">
                Tres
            </option>
            <option value="4">
                Cuatro
            </option>
            <option value="5">
                Cinco
            </option>
            <option value="6">
                Seis
            </option>
            <option value="7">
                Siete
            </option>
            <option value="8">
                Ocho
            </option>

        </select>
        <br />
        <br />
        <!-- Botones -->
        <input type='submit' id='' value='Jugar' onclick='' class='' name="envia">
    </form>
    <hr size="3">

    <?php if ($estado) : ?>

        <?php

        echo "<p>Resultado¡¡</p> <pre>";
        print_r($arrayResultado);
        ?>

    <?php endif; ?>
    <!-- *********************************** -->
    <div>
        <hr size="2">
        <footer>
            <p>Finaliza el contenido</p>
            <a href=<?= URL . 'index.php'  ?>>***HOME***</a>
        </footer>
    </div>
</body>

</html>