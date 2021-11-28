<!DOCTYPE html>
<html lang="es">

<?php include_once ('../vistas/dash_head.php')?>

<body id="page-top">
    <?php include_once('../vistas/dash_superior.php')?>

        <!-- CONTENIDO DEL DASHBOARD -->
        <div class="container-fluid">

                    <!-- Lista de Contenido -->
                    <div class="row">

                        <!-- Lista de Productos -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                LISTA DE PRODUCTOS</div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="listaProductos.php">Ver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Ventas Realizadas -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                VENTAS REALIZADAS</div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="ventas.php">Ver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Colaboradores -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">COLABORADORES
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="roles.php">Ver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include_once ('../vistas/dash_footer.php')?>
            <!-- End of Footer -->

        </div>

    <?php include_once('../vistas/dash_inferior.php')?>
</body>

</html>