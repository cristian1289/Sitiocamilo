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
                passUsuario,usuarioCreacion,estadoUsuario, 
                fechaCreacion)
                VALUES ('".$datos->obtenerNombreUsuario()."','".$datos->obtenerIdentificacion()."',
                '".$datos->obtenerPrimerNombre()."','".$datos->obtenerSegundoNombre()."',
                '".$datos->obtenerPrimerApellido()."','".$datos->obtenerSegundoApellido()."',
                '".$datos->obtenerEmail()."','".$datos->obtenerCelular()."',
                '".$datos->obtenerDireccion()."', ".$datos->obtenerPerfilUsuario().",
                '".$datos->obtenerpassUsuario()."',1,'".$datos->obtenerUsuarioCreacion()."',
               Now())";


        return $this->objConsultas->actualizarEliminarInsertar($sql);
    }
}
?>