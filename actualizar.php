<?php

include("conexion.php");
    $con=conectar();
$idUsuario = $_GET['id'];
$consulta="SELECT * FROM usuarios WHERE idUsuario='$idUsuario'";
$query=mysqli_query($con,$consulta);
$row=mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>
<body>
<div >
            <h2>Ingrese Datos</h2>
            <form action="editar.php" method="POST">

                <input type="hidden" placeholder="idUsuario" name="idUsuario" value="<?php echo $row['idUsuario']?>">
                <input type="text" placeholder="Nombre" name="nombre" value="<?php echo $row['nombre']?>">
                <input type="text" placeholder="Apellido" name="apellido" value="<?php echo $row['apellido']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
</body>
</html>