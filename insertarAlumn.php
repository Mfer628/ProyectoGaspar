<?php
    include 'conexion.php';

    $registro=$_POST['registro'];
    $nombre=$_POST['nombre'];
    
    $consulta = "insert into alumnos values ('".$registro."', '".$nombre."') ";
    mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
    mysqli_close($conexion);
    
?>