<?php
include_once('configuraciondata.php');
clasS clsAdminBD
{
        private $conexion = null;
        public function __construct()
    {
        if(!defined('DB_SERVER'))
        {
            $objconfiguraciondata = new clsconfiguracion();

            $datosConexion = $objconfiguraciondata->leerconfiguracion();
            define('DB_SERVER',$datosConexion->obtenerServidor());
            define('DB_NAME',$datosConexion->obtenerBasedeDatos());
            define('DB_USER',$datosConexion->obtenerUsuario());
            define('DB_PASS',$datosConexion->obtenerContraseña());

        }   
    
    }  
    public function conectar()
    {
        $conexion = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        if($conexion->connect_errno)
        {
            die('Error de conexión: '.$conexion->connect_errno);

        }
        return $conexion;
    }
}



?>