<?php
//recibir datos con post
$nombre = $_POST["Nombre"] ?? "";
$correo = $_POST["correo"] ?? "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibir Post</title>
</head>
<body>
    <h1>Datos Recibidos con POST</h1>
    <p><strong>Nombre: </strong> <?= $nombre ?></p>
    <p><strong>Correo: </strong> <?= $correo ?></p>
  
    <br>
    <a href="index.php">Volver a la página principal</a>

</body>
</html>