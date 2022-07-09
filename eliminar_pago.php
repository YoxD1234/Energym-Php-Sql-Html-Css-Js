<?php
include("conexion.php");
$con=conectar();

$idPago = $_GET['id'];
$monto = $_POST['monto'];
$fechaInicio= $_POST['fechaInicio'];
$fechaFin= $_POST['fechaFin'];

$consulta ="DELETE FROM pagos WHERE idPago='$idPago'";
$query=mysqli_query($con,$consulta);

if($query){
    header("location: pagos.php");
};
?>