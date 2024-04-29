<?php 
require_once'config.php';
//Lista para los enlaces.
$listaOrdenada=[array('url'=>URL.'src/vistas/promedinotas.php','titulo'=>'Promedio de Notas'),
                array('url'=>URL.'src/vistas/clasespractica.php','titulo'=>'Practicas con  Clases'),
                    array('url'=>URL.'src/vistas/promedinotas.php','titulo'=>'Agradecimientos'),
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

    <?php foreach ($listaOrdenada as $key => $value): ?>
              <ol>
              <li><a href="<?= $value['url']?>"><?= $value['titulo']?></a></li>
              </ol>
    <?php endforeach; ?>
</body>
</html>