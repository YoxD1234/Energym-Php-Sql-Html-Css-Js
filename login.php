<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Login</title>
</head>
<body>
    <div class="formulario">
        <div class="titulo">
            <h3>Login</h3>
        </div>
        <form action="login.php" method="post">
            <input type="text" placeholder="usuario" name="usuario" required>
            <input type="password" placeholder="contraseña" name="contraseña" required>
            <input type="submit" value="Ingresar" name="Ingresar">
        </form>
    </div>


                <?php
                    error_reporting(0);
                    $usuario = $_POST['usuario'];
                    $contraseña= $_POST['contraseña'];
                    session_start();
                    $_SESSION['usuario']=$usuario;

                    include("conexion.php");

                    $con=conectar();
                    $consulta ="SELECT*FROM administrador where usuario = '$usuario' and contraseña = '$contraseña'";

                    $resultado= mysqli_query($con, $consulta);

                    $filas = mysqli_fetch_array($resultado);
                    if($filas){
                        $_SESSION['usuario']=$usuario;
                        header("location:PortadaGym/index.php");
                    }else{
                        ?>
                        
                        <?php
                    }
                    mysqli_free_result($resultado);
                    mysqli_close($con);
                ?>


</body>
</html>