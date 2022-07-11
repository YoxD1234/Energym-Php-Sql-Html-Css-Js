<?php
include("conexion.php");
$con=conectar();

$idUsuario = $_POST['idUsuario'];
$nombre = $_POST['nombre'];
$apellido= $_POST['apellido'];


$verificarIdUsuario = mysqli_query($con, "SELECT * FROM usuarios WHERE idUsuario='$idUsuario';");

if(mysqli_num_rows($verificarIdUsuario)>0){
    echo '
    <script> alert("EL ID YA SE ENCUENTRA EN USO");
    window.location="usuario.php";
    </script>
    ';
}else{
    $consulta = "INSERT INTO usuarios VALUES('$idUsuario','$nombre','$apellido')";
$query = mysqli_query($con,$consulta);
echo    '<script>
        window.location="usuario.php";
        </script>';


}







?>