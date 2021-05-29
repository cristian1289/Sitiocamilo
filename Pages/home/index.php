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
        <div class= "preloader flex_column justify-content-center align-items-center">
            <img class="animation_shake" src="../../images/descarga.ico" alt="logo" height="60" width="60">
    </div>

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav_link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </i>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="../home/" class="nav-link">Home</a>
        </li>        
        </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </i>
    </ul>
    </nav> 

    
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="../home/" class="brand-link">
        <img src="../../images/descarga.ico" alt="AdminLte Logo" class="brand-image img-circle elevation-3" style="opacity: . 8">
        <span class="brand-text font-weight-light">Sitio camilo</span>
        </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../images/descarga.png" class="img-circle elevation-2" alt="user image">
            </div>
            <div class="info">
                <a href="../home/" class="d-block">Usuario</a>
            </div>
        </div>        
             
                
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="search" aria-label="search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>    
    <?php include_once('../Templates/menuSuperUsuario.php'); ?>

        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-2">
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