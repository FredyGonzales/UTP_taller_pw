<?php

session_start();

$_SESSION['nombre'] = "Fredy";
$_SESSION['apellido'] = "Gonzales Uriarte";

echo "<a href=pagina2.html>Ir a la pagina 2</a>";

?>