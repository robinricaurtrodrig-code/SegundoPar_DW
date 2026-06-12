<?php
include "conecion.php";

//consulta sql

$sql = "SELECT id, usuario, correo FROM usuarios";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <style>
        table{
            border-collapse: collapse;
            width: 60%
        }
        th,
        td{
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th{
            background-color: #ddd;
        }
        </style>
</head>

<body>
    <h1> Usuarios registrados</h1>
    <table>
<tr>
    <th>ID</th>
    <th>Usuarios</th>
    <th>Correo</th>

</tr>

<?php
if($resultado->num_rows > 0){
    while($fila = $resultado->fetch_assoc()){
echo "<tr>";
echo"<td>" . $fila["id"] . "</td>";
echo"<td>" . $fila["usuario"] . "</td>";
echo"<td>" . $fila["correo"] . "</td>";
    }
    }else{
echo "<tr><td colspan='3'>No hay usuarios registrados</td></tr>";
    }
    ?>


    </table>
    
</body>

</html>