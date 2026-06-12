<?php
/*
*/ 
?>


<?php
//crear una cookie
setcookie("usuarion", "Angie", time() + 60); //dura 60 segundo

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crear cookie</title>
</head>
<body>
    <h1>Cookie creada</h1>
    <P>Se ha guardado una cookie con el nombre del usuario</P>



    <a href="ver_cookie.php">Ver cookie</a>

</body>
</html>