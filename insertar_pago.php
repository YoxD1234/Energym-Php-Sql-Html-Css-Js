<?php
include("conexion.php");
$con=conectar();

$idUsuario = $_POST['idUsuario'];
$monto = $_POST['monto'];
$fechaInicio= $_POST['fechaInicio'];
$fechaFin= $_POST['fechaFin'];


$consulta = "INSERT INTO pagos VALUES('','$idUsuario','$monto','$fechaInicio','$fechaFin')";
$query = mysqli_query($con,$consulta);

if($query){
    header("location:pagos.php");
}else {

}

?>