<!DOCTYPE html>
<html lang="es">
<?php include_once ('../vistas/dash_head.php')?>
<style>
    thead{
        background: #fb9509;
        color: #fff;
    }
</style>
<body>
    <?php include_once('../vistas/dash_superior.php')?>
    <?php include('../modal/Data.php')?>
        <div class="container-fluid">
            <h1>LISTA DE PRODUCTOS</h1>
            <br>
            <button class="btn btn-default" ><a  href="ingresar_producto.php"><i class="fas fa-plus"></i> Añadir Nuevo Producto</a></button>
            <br><hr>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>PRECIO</th>
                        <th>STOCK</th>
                        <th>ACCION</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        while ($row = mysqli_fetch_array($query)) 
                        {   
                    ?>
                        <tr>
                        <th><?php echo $row['id']?></th>
                        <th><?php echo $row['nombre']?></th>
                        <th>$<?php echo $row['precio']?></th>
                        <th><?php echo $row['stock']?></th>
                        <th><a href="actualizar_producto.php?id=<?php echo $row['id']?>" class="btn btn-info"><i class="fas fa-edit">Editar</a></th>
                        <th><a href="../crud/eliminar.php?id=<?php echo $row['id']?>" class="btn btn-danger"><i class="fas fa-trash"></a></th>
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>

            <?php include_once ('../vistas/dash_footer.php')?>
        </div>

    <?php include_once('../vistas/dash_inferior.php')?>
</body>
</html>