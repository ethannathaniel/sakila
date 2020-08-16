<?php

    include_once "conexion_db.php";

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];

    $insertar = "INSERT INTO actor(first_name, last_name) VALUES ('$nombre', '$apellido')";

    $resultado = mysqli_query($conexion, $insertar);

    if($resultado) {
        echo "<script>alert('Se ha registrado el actor con exito');window.location='/sakila/controller/'</script>";
    }else {
        echo "<script>alert('No se pudo registrar');window.history.go(-1);</script>";
    }