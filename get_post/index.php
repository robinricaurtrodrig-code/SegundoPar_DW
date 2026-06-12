<?php
//post
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio GET Y POST</title>
</head>
<body>
    <H1>Ejercicio GET Y POST</H1>
    <hr>
    <h2>Ejrcicio GET</h2>
    <P>Haz clic en un enlace</P>

    /* Enlace con Get */
    <a href= "recibir_get.php?curso=desarrollo_web">Desarrollo Web</a>
    <a href= "recibir_get.php?curso=programacion">Programacion</a>
    <a href= "recibir_get.php?curso=base_de_datos">Base de Datos</a>
    <hr>
    <h2>Ejrcicio POST</h2>
    //FORMILARIO POST
    <form method="POST" action="recibir_post.php">

    <label>Nombre:</label><br>
    <input type="text" name="nombre"><br>
    <label>Correo:</label><br>
    <input type="email" name="correo"><br>
    <button type="submit">Enviar</button>    
    </form>  


</body>
</html>

