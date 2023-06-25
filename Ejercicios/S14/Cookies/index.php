<?php

session_start();
$_SESSION['nombre_1'] = "Fredy";
$_SESSION['nombre_2'] = "Benjamin";
$_SESSION['session_id'] = session_id();

?>

<a href="sesiones.php">Prueba de Sesiones</a>


