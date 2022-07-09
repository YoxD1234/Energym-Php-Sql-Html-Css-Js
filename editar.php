<?php
include("conexion.php");
$con=conectar();

$idUsuario=$_POST['idUsuario'];
$nombre = $_POST['nombre'];
$apellido= $_POST['apellido'];

$consulta = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido' WHERE idUsuario='$idUsuario'";
$query=mysqli_query($con,$consulta);

if($query){
    header("location: usuario.php");
};
?>