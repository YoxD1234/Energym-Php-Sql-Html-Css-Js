<?php
function conectar(){
    $con = mysqli_connect('localhost', 'root','','energym');
    return $con;
}
?>
