<?php
include("conexion.php");
$con=conectar();

$idPago=$_POST['idPago'];
$monto = $_POST['monto'];
$fechaInicio= $_POST['fechaInicio'];
$fechaFin= $_POST['fechaFin'];

$consulta = "UPDATE pagos SET monto='$monto', fechaInicio='$fechaInicio', fechaFin='$fechaFin' WHERE idPago='$idPago'";
$query=mysqli_query($con,$consulta);

if($query){
    header("location: pagos.php");
};
?>