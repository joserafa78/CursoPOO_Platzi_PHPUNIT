<?php
    
define ( "URL","http://localhost/PracticaFuncionesArreglos/" );
// ________________ SESIÓN_____________________
session_start (); // Inicia un Sesion.

// header ("Ubicación: index.php"); // Re-direcciona .....
// _____________ MONEDA DEL PAIS_________________
define ( "MONEDA" , "Pesos / Colombia" );
// _____________ CONEXIÓN A BD___________________

define('__CONFIG__',[
      'db'=>[
          'host'=>'mysql:host=localhost;dbname=licoreria;charset=utf8',   'user'=>'root',
          'password'=>''
      ]
]);

?>