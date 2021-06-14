<?php
include_once('consultas.php');
class clsUsuariosData
{
    private $objConsultas;
    public function __construct()
    {
        $this->objConsultas = new clsConsultas();
    }
    public function registrarUsuario($datos)
    {
        $sql = "INSERT INTO usuarios(nombreUsuario, identificacion, primerNombre, segundoNombre, 
                primerApellido, segundoApellido, email, celular, direccion, perfilUsuario, 
                passUsuario,estadoUsuario,usuarioCreacion, 
                fechaCreacion)
                VALUES ('".$datos->obtenerNombreUsuario()."','".$datos->obtenerIdentificacion()."',
                '".$datos->obtenerPrimerNombre()."','".$datos->obtenerSegundoNombre()."',
                '".$datos->obtenerPrimerApellido()."','".$datos->obtenerSegundoApellido()."',
                '".$datos->obtenerEmail()."','".$datos->obtenerCelular()."',
                '".$datos->obtenerDireccion()."',".$datos->obtenercmbPerfil().",
                '".$datos->obtenerpassUsuario()."',1,'".$datos->obtenerUsuarioCreacion()."',
               Now())";


        return $this->objConsultas->actualizarEliminarInsertar($sql);
    }
    public function autenticarUsuario($datos)
    {
        $sql = "SELECT perfilUsuario FROM usuarios WHERE nombreUsuario  = '".$datos->obtenerNombreUsuario()."' AND passUsuario = '".$datos->obtenerpassUsuario()."';";
        return $this->objConsultas->cargarDatos($sql);
    }
}
?>