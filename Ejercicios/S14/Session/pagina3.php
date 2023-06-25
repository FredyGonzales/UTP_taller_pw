<?php

session_start();

$nom=$_SESSION['nombre'];

$ape=$_SESSION['apellido'];

echo "Variables de sesion:<br>";
echo "Enombre es: $nom <br> El Apellido es: $ape<br>";

?>