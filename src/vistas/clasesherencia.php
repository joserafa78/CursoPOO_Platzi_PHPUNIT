<?php

namespace App\vistas;

require '../../vendor/autoload.php';
require '../../config.php';
include_once '../control/formularioHerencia.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herencia</title>
</head>

<body>
    <h1>Herencia con las Clases.</h1>
    <?php if ($estado) : ?>
        <h4><?= $mensaje ?></h4>
    <?php else : ?>

    <?php endif; ?>
    <form action='<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>' method='post'>
        <!-- Contenido -->
        <label for=' '>Nombre</label>
        <input type='text' id='' placeholder='Nombe' class='' name="nombre"><br />
        <label for=' '>Apellido</label>
        <input type='text' id='' placeholder='Apellido' class='' name="apellido"><br />
        <label for=' '>Telefono</label>
        <input type='number' id='' placeholder='Numero' class='' name="numero"><br />

        <hr size="3">
        <label for=' '>Marca</label>
        <input type='text' list='marca' id='' name='marca'><br />
        <datalist id='marca'>
            <option value='apple'></option>
            <option value='sansung'></option>
            <option value='xiaomi'> </option>
            <option value='motorola'></option>
        </datalist>
        <label for=' '>Modelo</label>
        <input type='text' id='' placeholder='Modelo Celular' class='' name="modelo"><br />
        <label for=' '>Serial</label>
        <input type='text' id='' placeholder='Serial Celular' class='' name="serial"><br />

        <!-- Botones --><br /><br />
        <input type='reset' id='' value='Resetear' onclick='' class=''>
        <input type='submit' id='' value='Enviar' onclick='' class='' name='envia'>
    </form>
    <hr size="2">
    <table>

        <th>
        <td>NOMBRE</td>
        <td>APELLIDO</td>
        <td>TELEFONO</td>
        <td>MARCA</td>
        <td>MODELO</td>
        <td>SERIAL</td>
        </th>
        <?php foreach ($arregloServicios as $value) : ?>


            <tr>
                <td><?= $value['0'] ?></td>
                <td><?= $value['1'] ?></td>
                <td><?= $value['2'] ?></td>
                <td><?= $value['3'] ?></td>
                <td><?= $value['4'] ?></td>
                <td><?= $value['5'] ?></td>
            </tr>

        <?php endforeach; ?>
    </table>

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