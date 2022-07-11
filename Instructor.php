<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM Instructor";
    $query=mysqli_query($con,$sql);
    $row= mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA INSTRUCTOR</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/32f4af17ce.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="./css/usuarios.css">
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
                            <h2>Ingrese datos</h2>
                                <form action="insertar_Instructor.php" method="POST">

                                    <input type="number" class="" name="id" placeholder="id" required>
                                    <input type="text" class="" name="Nombre" placeholder="Nombre" required>
                                    <input type="text" class="" name="Curso" placeholder="Curso" required>
                                    <input type="number" class="" name="Telefono" placeholder="Telefono" required maxlength="9">
                                    
                                    <input type="submit" class="">
                                </form>
                    </div> 
                    <div class="tabla_usuario">
                    <h2>Tabla de Instructores</h2>
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Curso</th>
                                        <th>Telefono</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <td><?php  echo $row['id']?></td>
                                                <td><?php  echo $row['Nombre']?></td>
                                                <td><?php  echo $row['Curso']?></dh>
                                                <td><?php  echo $row['Telefono']?></td>    
                                                <td><a class="editar" href="actualizar_Instructor.php?id= <?php echo $row['id']?>"><i class="fa-solid fa-pencil"></i></a></td>
                                                <td><a class="eliminar" href="delete_Instructor.php?id= <?php echo $row['id']?>"><i class="fa-solid fa-trash"></i></a></td>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                    </div>                  
            </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function () 
            {
                $('#example').DataTable();
            });
        </script>
</html>