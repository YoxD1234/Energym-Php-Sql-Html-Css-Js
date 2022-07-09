<?php
include("conexion.php");
$con=conectar();

$idUsuario = $_POST['idUsuario'];
$nombre = $_POST['nombre'];
$apellido= $_POST['apellido'];

$consulta = "INSERT INTO usuarios VALUES('$idUsuario','$nombre','$apellido')";
$query = mysqli_query($con,$consulta);

if($query){
    header("location:usuario.php");
}else {

}

?>