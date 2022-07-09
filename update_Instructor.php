<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$Nombre=$_POST['Nombre'];
$Curso=$_POST['Curso'];
$Telefono=$_POST['Telefono'];

$sql="UPDATE Instructor SET  Nombre='$Nombre',Curso='$Curso',Telefono='$Telefono' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Instructor.php");
    }
?>