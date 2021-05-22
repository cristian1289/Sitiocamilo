<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sitio camilo | Registrar Usuario</title>
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
                                    <p class="login-box-msg">Registrar Usuario</p>
                                    <form action="../Business/Configuracion.php" method="POST">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Nombre de Usuario" id="txtNombreUsuario" name="txtNombreUsuario" maxlength="20" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user-secret"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Primer Nombre" id="txtPrimerNombre" name="txtPrimerNombre" maxlength="30" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Segundo Nombre" id="txtSegundoNombre" name="txtSegundoNombre" maxlength="20" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Primer Apellido " id="txtPrimerApellido" name="txtPrimerApellido" maxlength="20" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Segundo Apellido" id="txtSegundoApellido" name="txtSegundoApellido" maxlength="20" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Segundo Nombre" id="txtSegundoNombre" name="txtSegundoNombre" maxlength="20" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">

                                            <input type="email" class="form-control" placeholder="email" id="txtEmail" name="txtEmail" maxlength="45" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope"></span>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="input-group mb-3">

                                            <input type="Identificacion" class="form-control" placeholder="Identificacion" id="txtIdentificaion" name="txtIdentificaion" maxlength="45" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-credit-card"></span>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="input-group mb-3">

                                            <input type="Celular" class="form-control" placeholder="Celular" id="txtCelular" name="txtCelular" maxlength="45" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-phone"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                        <textarea class="form-control" rows="3" placeholder="Dirección" id="txtDireccion" name="txtDireccion" maxlength="45" required></textarea>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-taxi"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                        <input type="password" class="form-control" placeholder=" Contraseña" id="txtContraseña"name="txtContraseña">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label>Perfil</label>
                                    <select class="form-control select2" style="width: 100%; "name="cmbPerfil" id="cmbPerfil">
                            
                                        <option value ="0" selected="selected">seleccione una Opción</option>
                                        <option value ="1">Iventario</option>
                                        <option value ="2">Vendedor</option>
                                        <option value ="3">Super Usuario</option>
                                        <option value ="4">Admin</option>

                                     </select>
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