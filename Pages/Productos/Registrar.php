<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sitio camilo | Registrar Productos</title>
    <?php
    include_once('../Templates/head.php');
    ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-2">
                        </div>
                        <div class="card-body register-card-body">
                            <div class="row">
                                <div class="col-2">
                                </div>
                                <div class="col-8">
                                    <p class="login-box-msg">Registrar Productos</p>
                                    <form action="../Business/Configuracion.php" method="POST">

                                    <div class="input-group mb-3">
                                            <input type="Codigo" class="form-control" placeholder="Código del Producto" id="txtCodigo" name="txtCodigo" maxlength="45" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-barcode"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Nombre" id="txtNombre" name="txtNombre" maxlength="20" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-folder"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                        <textarea class="form-control" rows="3" placeholder="Descripción" id="txtDescripcion" name="txtDescripcion" maxlength="45"></textarea>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas  fa-info"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Unidad de Medida" id="txtUnidaMedida" name="txtUnidaMedida" maxlength="45" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-flask"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Marca del Producto" id="txtMarcaProducto" name="txtMarcaProducto" maxlength="30">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-filter"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Producto Actual" id="txtProductoActual" name="txtProductoActual" maxlength="20" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-calendar"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Cantidad Actual " id="txtCantidadActual" name="txtCantidadActual" maxlength="20" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-calculator"></span>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        

                                        <div class="row">
                                            <div class="col-3">

                                            </div>
                                            <div class="col-6">
                                                <button type="submit" class="btn btn-warning btn-block">Registrar</button>
                                            </div>
                                            <div class="col-3">

                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-2">
                                </div>
                            </div>
                        </div>
                        <div class="col-2">

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
        include_once('../Templates/footer.php');
        ?>
    </div>
    <?php
    include_once('../Templates/foot.php');
    ?>
</body>

</html>