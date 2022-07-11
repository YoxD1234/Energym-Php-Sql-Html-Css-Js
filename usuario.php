<?php

include("conexion.php");
    $con=conectar();

$consulta_usuario="SELECT*FROM usuarios";
$resultado_usuario= mysqli_query($con, $consulta_usuario);

$row=mysqli_fetch_array($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/32f4af17ce.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="./css/usuarios.css">
    <link rel="stylesheet" href="style.css">
    <title>Usuarios</title>
</head>
<body>
    <div class="volver">
        <a href="PortadaGym/index.php">
            <button>
            <i class="fa-solid fa-arrow-left">Volver</i>
            </button>
        </a> 
    </div>
    <div class="container_usuario">
        <div class="row_usuario">
            <h2>Ingrese Datos</h2>
            <form action="insertar.php" method="post" id="form">
                <input type="number" placeholder="idUsuario" name="idUsuario" required>
                <input type="text" placeholder="Nombre" name="nombre" required maxlength="20">
                <input type="text" placeholder="Apellido" name="apellido" required maxlength="20">
                <input type="submit">
            </form>
        </div>
        <div class="tabla_usuario">
            <h2>Mostrar Tabla</h2>
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>idUsuario</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($row=mysqli_fetch_array($resultado_usuario)) {
                    ?>
                    <tr>
                        <td><?php echo $row['idUsuario']?></td>
                        <td><?php echo $row['nombre']?></td>
                        <td><?php echo $row['apellido']?></td>
                        <td><a class="editar" href="actualizar.php?id=<?php echo $row['idUsuario']?>"><i class="fa-solid fa-pencil"></i></a></td>
                        <td><a class="eliminar" href="eliminar.php?id=<?php echo $row['idUsuario']?>"><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                    <?php	
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">

//////////////////////////////JQUERY DATATABLES//////////////////////////////
            $(document).ready(function () 
            {
                $('#example').DataTable();
            });
        </script>
</body>
</html>