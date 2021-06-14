<?php
include_once('../Datos/Encript.php');
class clsTerceroEntidad
{
    private $identificacionTercero, $nombreTercero, $emailTercero, $celularTercero,
            $telefonTercero, $direccionTercero, $estadoTercero, 
            $fechaCreacion, $usuarioCreacion, $fechaModificacion, $usuarioModificacion,
            $esCliente,$esproveedor,$contactoTercero, $objClsEncript;

  public function __construct()
    {
        $this->objClsEncript = new clsEncript();

    }

    public function setearidentificacionTercero($value)
    {
        $this->identificacionTercero = trim($value);
    }

    public function setearnombreTercero($value)
    {
        $this->nombreTercero = trim($value);
    }

    public function setearemailTercero($value)
    {
        $this->emailTercero = trim($value);
    }
    public function setearcelularTercero($value)
    {
        $this->celularTercero = trim($value);
    }
    public function seteartelefonTercero ($value)
    {
        $this->telefonTercero = trim($value);
    }
    public function seteardireccionTercero($value)
    {
        $this->direccionTercero = trim($value);
    }
    public function setearestadoTercero($value)
    {
        $this->estadoTercero = trim($value);
    }
    public function setearfechaCreacion($value)
    {
        $this->fechaCreacion = trim($value);
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
    public function setearFechaModificacion($value)
    {
        $this->fechaModificacion = trim($value);
    }
    public function setearusuarioModificacion($value)
    {
        $this->usuarioModificacion = trim($value);
    }
    public function setearesCliente($value)
    {
        $this->esCliente = trim($value);
    }
    public function setearesproveedor($value)
    {
        $this->esproveedor = trim($value);
    }
    public function setearcontactoTercero($value)
    {
        $this->contactoTercero = trim($value);
    }











    public function obteneridentificacionTercero()
    {
        return $this->identificacionTercero;
    }
    public function obtenernombreTercero()
    {
        return $this->nombreTercero;
    }
    public function obteneremailTercero()
    {
        return $this->emailTercero;
    }
    public function obtenercelularTercero()
    {
        return $this->celularTercero;
    }
    public function obtenertelefonTercero()
    {
        return $this->telefonTercero;
    }
    public function obtenerdireccionTercero()
    {
        return $this->direccionTercero;
    }
    public function obtenerestadoTercero()
    {
        return $this->estadoTercero;
    }
    public function obtenerfechaCreacion()
    {
        return $this->fechaCreacion;
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
    public function obtenerFechaModificacion()
    {
        return $this->fechaModificacion;
    }
    public function obtenerusuarioModificacion()
    {
        return $this->usuarioModificacion;
    }
    public function obteneresCliente()
    {
        return $this->esCliente;
    }
    public function obteneresproveedor()
    {
        return $this->esproveedor;
    }
    public function obtenerescontactoTercero()
    {
        return $this->contactoTercero;
    }
    
    





}
?>