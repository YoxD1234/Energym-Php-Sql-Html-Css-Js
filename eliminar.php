<?php
include("conexion.php");
$con=conectar();

$idUsuario = $_GET['id'];
$nombre = $_POST['nombre'];
$apellido= $_POST['apellido'];

$consulta ="DELETE FROM usuarios WHERE idUsuario='$idUsuario'";
$query=mysqli_query($con,$consulta);

if($query){
    header("location: usuario.php");
};
?>