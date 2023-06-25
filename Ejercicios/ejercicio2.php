<?php

if ($_POST)
//if($_SERVER(['REQUEST_METHOD'] == 'POST'))
{
    $nombre=$_POST['txtnombre'];
    echo "Hola " .$nombre;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio2.php" method="post">
        Nombre
        <input type="text" name="txtnombre" id="">
        <br/>
        <input type="submit" name="Enviar">
    </form>
</body>
</html>