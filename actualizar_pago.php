<?php

include("conexion.php");
    $con=conectar();
$idPago = $_GET['id'];
$consulta="SELECT * FROM pagos WHERE idPago='$idPago'";
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
            <form action="editar_pago.php" method="POST">
            <input type="hidden" placeholder="idPago" name="idPago" value="<?php echo $row['idPago']?>">
                <input type="hidden" placeholder="idUsuario" name="idUsuario" value="<?php echo $row['idUsuario']?>">
                <input type="text" placeholder="monto" name="monto" value="<?php echo $row['monto']?>">
                <input type="date" placeholder="fechaInicio" name="fechaInicio" value="<?php echo $row['fechaInicio']?>">
                <input type="date" placeholder="fechaFin" name="fechaFin" value="<?php echo $row['fechaFin']?>">
                

                <input type="submit" value="Actualizar">
            </form>
        </div>
</body>
</html>