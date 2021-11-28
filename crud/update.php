<?php

    include ('../modal/Conexion.php');

    $conexion = conectar();

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    $consulta = "UPDATE `productos` SET `nombre`='$nombre',`precio`='$precio',`stock`='$stock' WHERE `id`='$id'";
    $query = mysqli_query($conexion, $consulta);

    if ($query) {
        header("location:../dashboard/listaProductos.php");
    }

?>