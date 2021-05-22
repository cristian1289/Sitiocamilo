<?php
include_once('../Entidades/configuracion.php');
include_once('../Datos/configuraciondata.php');
if (!isset($_POST['txtServidor']))
{
    
    echo 'No se recupero el servidor';
}
if (!isset($_POST['txtBasedeDatos']))
{
    
    echo 'No se recupero la Base de Datos';
}
if (!isset($_POST['txtUsuario']))
{
   
    echo 'No se recupero el Usuario';
}
if (!isset($_POST['txtContraseña']))
{
    
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