<?php
include_once('../Datos/Encript.php');
class clsUsuarioEntidad
{
    private $NombreUsuario, $PrimerNombre, $SegundoNombre, $PrimerApellido,
            $SegundoApellido, $Email, $Identificacion, $Direccion,
            $Celular, $perfilUsuario, $PassUsuario, $EstadoUsuario,
            $UsuarioCreacion, $FechaCreacion, $UsuarioModificacion, $FechaModificacion, $objClsEncript;

  public function __construct()
    {
        $this->objClsEncript = new clsEncript();

    }

    public function setearNombreUsuario($value)
    {
        $this->NombreUsuario = trim($value);
    }

    public function setearPrimerNombre($value)
    {
        $this->PrimerNombre = trim($value);
    }

    public function setearSegundoNombre($value)
    {
        $this->SegundoNombre = trim($value);
    }
    public function setearPrimerApellido($value)
    {
        $this->PrimerApellido = trim($value);
    }
    public function setearSegundoApellido($value)
    {
        $this->SegundoApellido = trim($value);
    }
    public function setearEmail($value)
    {
        $this->Email = trim($value);
    }
    public function setearIdentificacion($value)
    {
        $this->Identificacion = trim($value);
    }
    public function setearDireccion($value)
    {
        $this->Direccion = trim($value);
    }
    public function setearCelular($value)
    {
        $this->Celular = trim($value);
    }
    public function setearPerfilUsuario($value)
    {
        $this->PerfilUsuario = trim($value);
    }
    public function setearPassUsuario($value)
    {
        if(is_null($value) || !isset($value) || (strlen($value) <= 0))
        {
           $this->PassUsuario = "";
     
        }
        else
        {
        $this->PassUsuario = $this->objClsEncript->encriptar(trim($value));
        }
    }
    public function setearEstadoUsuario($value)
    {
        $this->EstadoUsuario = trim($value);
    }
    public function setearUsuarioCreacion($value)
    {
        if(is_null($this->value) || !isset($this->value) || (strlen($value) <= 0))
        {
           $this->UsuarioCreacion = "system";
     
        }
        else
        {
            $this->UsuarioCreacion= trim($value);
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
        $this->FechaModificacion = trim($value);
    }

    public function obtenerNombreUsuario()
    {
        return $this->NombreUsuario;
    }
    public function obtenerPrimerNombre()
    {
        return $this->PrimerNombre;
    }
    public function obtenerSegundoNombre()
    {
        return $this->SegundoNombre;
    }
    public function obtenerPrimerApellido()
    {
        return $this->PrimerApellido;
    }
    public function obtenerSegundoApellido()
    {
        return $this->SegundoApellido;
    }
    public function obtenerEmail()
    {
        return $this->Email;
    }
    public function obtenerIdentificacion()
    {
        return $this->Identificacion;
    }
    public function obtenerDireccion()
    {
        return $this->Direccion;
    }
    public function obtenerCelular()
    {
        return $this->NombreUsuario;
    }
    public function obtenerPerfilUsuario()
    {
        return $this->PerfilUsuario;
    }
    public function obtenerpassUsuario()
    {
        return $this->PassUsuario;
    }
    public function obtenerEstadoUsuario()
    {
        return $this->EstadoUsuario;
    }
    public function obtenerUsuarioCreacion()
    {
        if(is_null($this->UsuarioCreacion) || !isset($this->UsuarioCreacion) || (strlen($UsuarioCreacion) <= 0))
        {
           return "system";
     
        }
        else
        {
            return $this->UsuarioCreacion;
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
        return $this->FechaModificacion;
    }
    
    





}
?>