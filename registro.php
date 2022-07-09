<?php

include("conexion.php");
    $con=conectar();

$nombre = $_POST['nombre'];
$curso =$_POST['curso'];
$celular = $_POST['celular'];

$consulta = 
"INSERT INTO `user` (`nombre`, `curso`, `celular`) VALUES ('$nombre', '$curso', '$celular');";

$resultado =mysqli_query($con, $consulta);
?>

<?php

