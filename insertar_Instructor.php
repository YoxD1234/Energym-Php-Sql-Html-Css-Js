<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$Nombre=$_POST['Nombre'];
$Curso=$_POST['Curso'];
$Telefono=$_POST['Telefono'];


$sql="INSERT INTO instructor VALUES('$id','$Nombre','$Curso','$Telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Instructor.php");
    
}else {
}
?>