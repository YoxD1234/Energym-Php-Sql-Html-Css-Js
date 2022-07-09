<?php
include("conexion.php");
$con=conectar();

$fecha1 = $_POST['fecha1'];
$fecha2 = $_POST['fecha2'];

$consulta_usuario="SELECT SUM(monto) from pagos where fechaInicio>'$fecha1' and fechaInicio<'$fecha2';";
$resultado_usuario= mysqli_query($con, $consulta_usuario);
$row = mysqli_fetch_array($resultado_usuario);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/usuarios.css">
    <script src="https://kit.fontawesome.com/32f4af17ce.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="ganancias">
        <div class="volver">
            <a href="ganancia.php">
                <button>
                <i class="fa-solid fa-arrow-left">Volver</i>
                </button>
            </a>
        </div>
        <div class="ganancia">  
            <h3>Ganancia en el tiempo establecido</h3>
            <input type="text" value="<?php echo"$row[0]" ?>" readonly>
        </div>
    </div>

</body>
</html>

