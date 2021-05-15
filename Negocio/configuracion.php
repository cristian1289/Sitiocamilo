<?php
include_once('../Entidades/configuracion.php');
include_once('../Datos/configuraciondata.php');
if (isset($_POST['txtServidor']))
{
    echo'se recupero el servidor: ('.$_POST['txtServidor'].') <br />';
}
else{
    echo 'No se recupero el servidor';
}
if (isset($_POST['txtBasedeDatos']))
{
    echo'se recupero la Base de Datos: ('.$_POST['txtBasedeDatos'].') <br />';
}
else{
    echo 'No se recupero la Base de Datos';
}
if (isset($_POST['txtUsuario']))
{
    echo'se recupero el Usuario: ('.$_POST['txtUsuario'].') <br />';
}
else{
    echo 'No se recupero el Usuario';
}
if (isset($_POST['txtContraseña']))
{
    echo'se recupero la contraseña: ('.$_POST['txtContraseña'].') <br />';
}
else{
    echo 'No se recupero la contraseña';
}

$objClassConfiguracionEntidad= new clsConfiguracionEntidad();

$objClassConfiguracionEntidad->setearServidor($_POST['txtServidor']);
$objClassConfiguracionEntidad->setearBasedeDatos($_POST['txtBasedeDatos']);
$objClassConfiguracionEntidad->setearUsuario($_POST['txtUsuario']);
$objClassConfiguracionEntidad->setearContraseña($_POST['txtContraseña']);

$objClassclsconfiguracion = new clsconfiguracion();

$objClassclsconfiguracion->actualizarArchivo($objClassConfiguracionEntidad);

/*echo 'Valor Almacenado(':.$objClassConfiguracionEntidad->obtenerservidor().')<br />';
echo 'Valor Almacenado(':.$objClassConfiguracionEntidad->obtenerbasededatos().')<br />';
echo 'Valor Almacenado(':.$objClassConfiguracionEntidad->obtenerusuario().')<br />';
echo 'Valor Almacenado(':.$objClassConfiguracionEntidad->obtenercontraseña().')<br />';*/


?>