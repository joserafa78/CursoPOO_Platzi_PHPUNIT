<?php 
include_once 'src/control/formularioPrincipal.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<body>
    <h1>Promedio de Notas</h1>
    <form action='<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>' method='post' >
    <!-- Contenido -->
    <label for=''>Nombre</label>
    <input type='text' id='' placeholder='Nombre' class='' name="nombre"><br/>

    <input type='radio' id='sexo' name='sexo' value='m' checked>
    <label for='sexo'> Masculino</label>
    <input type='radio' id='sexo' name='sexo' value='h'>
    <label for='sexo'> Femenino</label>
    <br/>

    <!-- Contenido -->
    <label for=''>Telefono</label>
    <input type='number' id='' placeholder='telefono' class='' name='telefono'><br/>
        <!-- Contenido -->
    <label for=''>Notas</label>
    <input type='text' id='' placeholder='telefono' class='' name='notas'><br/>
    <br/>
    <br/>
    <!-- Botones -->
    <input type='reset' id='' value='Resetear' onclick='' class=''>
    <input type='submit' id='' value='Enviar' onclick='' class='' name="envia">
    </form>
    <br/>
    <hr size="4">
    <!-- ----------------------------------------- -->
    <table>
    <thead>
      <tr>
        <th scope="col">NOMBRE</th>
        <th scope="col">SEXO</th>
        <th scope="col">TELEF</th>
        <th scope="col">NOTAS</th>
        <th scope="col">PROMEDIO</th>
      </tr>
    </thead>


 <?php foreach ($arregloObjetos as $key => $value) : ?>

<tr>
  <td><?= $value->nombre ?></td>
  <td><?= $value->sexo ?></td>
  <td><?= $value->movil ?></td>
  <td><?= implode(' / ',$value->calificacion) ?></td>
  <td>[<?= $value->promedio?>]</td>

</tr>

<?php endforeach; ?>

    </table>
    
</body>
</html>