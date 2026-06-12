<?php
session_start();

//guardar datos
$_SESSION["usuario"] = "Joel";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear sesion</title>
</head>
<body>
<h1> Sesion iniciada</h1>
<p> Se ha guardado el nombre del usuario en la sesión</p>
<a href="ver_sesion.php">Ver sesión</a>    


</body>
</html>