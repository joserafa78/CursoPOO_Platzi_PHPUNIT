<?php

namespace App\vistas;

require '../../vendor/autoload.php';
require '../../config.php';
include_once '../control/formularioStaticos.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propiedades y metos estaticos</title>
</head>

<body>
    <h1>Propiedades y Metodos estaticos</h1>
    <h5>Practicas con clases </h5>
    <h5>LIBRO: Aprende progamacio O O. </h5>
    <form action='<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>' method='post'>
        <!-- Contenido -->
        <label for=''>Passorword</label><br />
        <input type='password' id='' placeholder='' class='' name="clave">
        <!-- Botones --><br />

        <input type='submit' id='' value='Enviar' onclick='' class='' name='envia'>
    </form>

    <?php if ($estado) : ?>
        <div>
            <span>
                <?= $mensaje ?>
            </span>
        </div>
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