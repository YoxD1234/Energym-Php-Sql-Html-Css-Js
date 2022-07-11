<?php
include("conexion.php");
$con=conectar();
$id=$_POST['id'];
$Nombre=$_POST['Nombre'];
$Curso=$_POST['Curso'];
$Telefono=$_POST['Telefono'];


$verificarIdUsuario = mysqli_query($con, "SELECT * FROM instructor WHERE id='$id';");

if(mysqli_num_rows($verificarIdUsuario)>0){
    echo '
    <script> alert("EL ID YA SE ENCUENTRA EN USO");
    window.location="instructor.php";
    </script>
    ';
}else{
    
    $sql="INSERT INTO instructor VALUES('$id','$Nombre','$Curso','$Telefono')";
    $query= mysqli_query($con,$sql);


echo    '<script>
        window.location="instructor.php";
        </script>';
}

?>