<?php
    $servername = "localhost";
    $database = "sakila";
    $username = "root";
    $password = "imanolophola";
    $port = "3306";
    $conexion = mysqli_connect($servername, $username, $password, $database, $port);
    mysqli_set_charset($conexion, "utf8");
    
    if (!$conexion) {
        die("Connection failed: " . mysqli_connect_error());
    }
   
   