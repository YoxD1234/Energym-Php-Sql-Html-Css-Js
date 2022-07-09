<?php

session_start();
$usuario=$_SESSION['usuario'];

if(!isset($usuario)){
    header("location: ../login.php");
}else{
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <section>
        <header>
            <a href="#" class="logo">Energym</a>
            <div class="toggleMenu" onclick="toggleMenu();">
               
            </div>
            <ul class="navigation">
                <li><a href="#">Home</a></li>
                <li><a href="../usuario.php">Usuarios</a></li>
                <li><a href="../pagos.php">Pagos</a></li>
                <li><a href="../Instructor.php">Instructores</a></li>
                <li><a href="../ganancia.php">Calcular Ganancia</a></li>
            </ul>
        </header>
        <div class="content">
            <div class="contentBx">
                <h2>Construye un cuerpo perfecto <br>
                y una mente sana</h2>
                <p>Perfil de Administrador</p>
                <a href="../salir.php">SALIR</a>
            </div>
        </div>
        <ul class="sci">
            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-instagram-square"></i></a></li>
        </ul>
    </section>
    <script src="https://kit.fontawesome.com/32f4af17ce.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>
<?php
}

?>