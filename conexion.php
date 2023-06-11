<?php
    $hostname="127.0.0.1: 3306";
    //$hostname="basededatos: 3306";
    $bd_usuario ="root";
    $bdpassword = "root";
    $bd_base="ceti";

    $conexion = new mysqli($hostname,$bd_usuario,$bdpassword,$bd_base );
    if ($conexion -> connect_errno){
        echo ("No se establecio la conexion a la base de datos ");
    }
?>