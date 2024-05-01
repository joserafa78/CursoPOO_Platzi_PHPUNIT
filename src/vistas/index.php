<?php
require_once 'config.php';
//Lista para los enlaces.
$listaOrdenada = [
    array('url' => URL . 'src/vistas/promedinotas.php', 'titulo' => 'Promedio de Notas'),
    array('url' => URL . 'src/vistas/clasespractica.php', 'titulo' => 'Practicas con  Clases Abstractas'),
    array('url' => URL . 'src/vistas/clasesherencia.php', 'titulo' => 'Practica con Herencia'),
    array('url' => URL . 'src/vistas/propiedadesMetosoStatic.php', 'titulo' => 'Propiedades y Metodos Staticos'),
    array('url' => URL . 'src/vistas/practicaClasesCuaderno.php', 'titulo' => 'Practica del Cuaderno - Clases'),
    array('url' => URL . 'src/vistas/practicaClasesCuadernoDos.php', 'titulo' => 'Segunda Practica del Cuaderno - Clases'),
    array('url' => URL . 'src/vistas/promedinotas.php', 'titulo' => 'Agradecimientos'),
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica</title>
</head>

<body>
    <h1>Practica con Arreglos y Objeos</h1>

    <h5>Con prueta y testeo Unitario</h5>

    <?php foreach ($listaOrdenada as $key => $value) : ?>
        <ul>
            <li><a href="<?= $value['url'] ?>"><?= $value['titulo'] ?></a></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>