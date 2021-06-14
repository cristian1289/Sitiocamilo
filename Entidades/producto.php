<?php
include_once('../Datos/Encript.php');
class clsProductoEntidad
{
    private $codigosProducto, $nombreProducto, $descripcionProducto, $unidadMedida,
            $marcaProducto, $productoActual, $cantidadActual, 
            $usuarioCreacion, $FechaCreacion, $UsuarioModificacion, $fechaModificacion,$estadoProducto, $objClsEncript;

  public function __construct()
    {
        $this->objClsEncript = new clsEncript();

    }

    public function setearcodigosProducto($value)
    {
        $this->codigosProducto = trim($value);
    }

    public function setearnombreProducto($value)
    {
        $this->nombreProducto = trim($value);
    }

    public function seteardescripcionProducto($value)
    {
        $this->descripcionProducto = trim($value);
    }
    public function setearunidadMedida($value)
    {
        $this->unidadMedida = trim($value);
    }
    public function setearmarcaProducto ($value)
    {
        $this->marcaProducto = trim($value);
    }
    public function setearproductoActual($value)
    {
        $this->productoActual = trim($value);
    }
    public function setearcantidadActual($value)
    {
        $this->cantidadActual = trim($value);
    }
    
    public function setearusuarioCreacion($value)
    {
        if(is_null($this->value) || !isset($this->value) || (strlen($value) <= 0))
        {
           $this->usuarioCreacion = "system";
     
        }
        else
        {
            $this->usuarioCreacion= trim($value);
        }
              
    }
    public function setearFechaCreacion($value)
    {
        $this->FechaCreacion = trim($value);
    }
    public function setearUsuarioModificacion($value)
    {
        $this->UsuarioModificacion = trim($value);
    }
    public function setearFechaModificacion($value)
    {
        $this->fechaModificacion = trim($value);
    }
    public function setearestadoProducto($value)
    {
        $this->estadoProducto = trim($value);
    }

    public function obtenercodigosProducto()
    {
        return $this->codigosProducto;
    }
    public function obtenernombreProducto()
    {
        return $this->nombreProducto;
    }
    public function obtenerdescripcionProducto()
    {
        return $this->descripcionProducto;
    }
    public function obtenerunidadMedida()
    {
        return $this->unidadMedida;
    }
    public function obtenermarcaProducto()
    {
        return $this->marcaProducto;
    }
    public function obtenerproductoActuall()
    {
        return $this->productoActual;
    }
    public function obtenercantidadActual()
    {
        return $this->cantidadActual;
    }
    

    public function obtenerusuarioCreacion()
    {
        if(is_null($this->usuarioCreacion) || !isset($this->usuarioCreacion) || (strlen($this->usuarioCreacion) <= 0))
        {
           return "system";
     
        }
        else
        {
            return $this->usuarioCreacion;
        }


        
    }
    public function obtenerFechaCreacion()
    {
        return $this->FechaCreacion;
    }
    public function obtenerUsuarioModificacion()
    {
        return $this->UsuarioModificacion;
    }
    public function obtenerFechaModificacion()
    {
        return $this->fechaModificacion;
    }
    public function obtenerestadoProducto()
    {
        return $this->estadoProducto;
    }
    
    





}
?>