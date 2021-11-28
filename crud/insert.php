<?php

    include ('../modal/Conexion.php');

    $conexion = conectar();

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    $consulta = "INSERT INTO `productos`(`nombre`, `precio`, `stock`) VALUES ('$nombre','$precio','$stock')";
    $query = mysqli_query($conexion, $consulta);

    if ($query) {
        header("location:../dashboard/listaProductos.php");
    }
    else {
        echo 'Hay un error';
    }

?>