<?php
include_once('consultas.php');
class clsproductosData
{
    private $objConsultas;
    public function __construct()
    {
        $this->objConsultas = new clsConsultas();
    }
    public function registrarProducto($datos)
    {
        $sql = "INSERT INTO productos(codigosProducto, nombreProducto, descripcionProducto, unidadMedida,
         marcaProducto, productoActual, cantidadActual,estadoProducto, usuarioCreacion, FechaCreacion)
           VALUES ('".$datos->obtenercodigosProducto()."','".$datos->obtenernombreProducto()."',
                '".$datos->obtenerdescripcionProducto()."','".$datos->obtenerunidadMedida()."',
                '".$datos->obtenermarcaProducto()."','".$datos->obtenerproductoActuall()."',
                '".$datos->obtenercantidadActual()."',1,'".$datos->obtenerusuarioCreacion()."',
               Now())";

        
        
        
        



        return $this->objConsultas->actualizarEliminarInsertar($sql);
    }
}
?>