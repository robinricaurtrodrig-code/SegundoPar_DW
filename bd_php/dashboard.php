<?php
/**/ 
?>

<?php
session_start();
//si no esxiste la sesion, no se puede entrar
if(!isset($_SESSION['usuario']))
{
    header("Location: login.php?msg=" . urlencode("Debes iniciar sesión primero"));
    exit();

}
$usuario = $_SESSION["usuario"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
</head>

<body>
    <h1>Dashboard (Pagina protegida)</h1>
    <p>Bienvenido, <strong><?= htmlspecialchars($usuario) ?></strong>!</p>
    <p>
</body>

</html>