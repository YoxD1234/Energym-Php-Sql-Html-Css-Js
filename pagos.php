<?php
include("conexion.php");
$con=conectar();
$consulta_usuario="SELECT*FROM usuarios INNER JOIN pagos ON pagos.idUsuario = usuarios.idUsuario";
$resultado_usuario= mysqli_query($con, $consulta_usuario);

$row=mysqli_fetch_array($resultado_usuario);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/32f4af17ce.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="./css/usuarios.css">
    <title>Pagos</title>
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
            <h2>Insertar Pago</h2>
            <form action="insertar_pago.php" method="post">
                <input type="number" placeholder="idUsuario" name="idUsuario" required>
                <input type="number" placeholder="monto" name="monto" required>
                <input type="date" placeholder="fechaInicio" name="fechaInicio" required>
                <input type="date" placeholder="fechaFin" name="fechaFin" required>
                <input type="submit">
            </form>
        </div>
        <div class="tabla_usuario">
            <h2>Tabla de Pagos</h2>
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>idUsuario</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>monto</th>
                                <th>fechaInicio</th>
                                <th>fechaFin</th>
                                <th></th>
                                <th></th>
                                <th hidden></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($row=mysqli_fetch_array($resultado_usuario)){
                            ?>
                            <tr>
                                <td hidden><?php echo $row['idPago']?></td>
                                <td><?php echo $row['idUsuario']?></td>
                                <td><?php echo $row['nombre']?></td>
                                <td><?php echo $row['apellido']?></td>
                                <td><?php echo $row['monto']?></td>
                                <td><?php echo $row['fechaInicio']?></td>
                                <td><?php echo $row['fechaFin']?></td>
                                <td><a class="editar" href="actualizar_pago.php?id=<?php echo $row['idPago']?>"><i class="fa-solid fa-pencil"></i></a></td>
                                <td><a class="eliminar" href="eliminar_pago.php?id=<?php echo $row['idPago']?>"><i class="fa-solid fa-trash"></i></a></td>
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
        <script>
            $(document).ready(function () 
            {
                $('#example').DataTable();
            });
        </script>

    </body>
</html>