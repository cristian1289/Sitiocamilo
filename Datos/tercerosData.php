<?php
include_once('consultas.php');
class clstercerosData
{
    private $objConsultas;
    public function __construct()
    {
        $this->objConsultas = new clsConsultas();
    }
    public function registrarTercero($datos)
    {
        $sql = "INSERT INTO terceros(identificacionTercero, nombreTercero, emailTercero, 
        celularTercero, telefonTercero, direccionTercero, estadoTercero,
        usuarioCreacion,fechaCreacion)
          VALUES ('".$datos->obteneridentificacionTercero()."','".$datos->obtenernombreTercero()."',
                '".$datos->obteneremailTercero()."','".$datos->obtenercelularTercero()."',
                '".$datos->obtenertelefonTercero()."','".$datos->obtenerdireccionTercero()."',1,
                '".$datos->obtenerusuarioCreacion()."', Now())";
    
        return $this->objConsultas->actualizarEliminarInsertar($sql);
    }
}
?>