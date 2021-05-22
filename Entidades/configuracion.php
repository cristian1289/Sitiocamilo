<?php
include_once('../Datos/Encript.php');
class clsConfiguracionEntidad
{
    
     private $Servidor, $BasedeDatos, $Usuario, $Clave, $objClsEncript,$valoresCargados ;
      public function __construct()
      {
          $this->objClsEncript = new ClsEncript();
      }

     public function setearServidor($value)
    {
        if(is_null($value) || !isset($value) || (strlen($value)<=0))
        {
            $this->Servidor = null;
        }
        else
        {
            $this->Servidor = $this->objClsEncript->encriptar(trim($value));
        }
        

    }

    public function setearBasedeDatos($value)
    {
        if(is_null($value) || !isset($value) || (strlen($value)<=0))
        {
            $this->BasedeDatos = null;
        }
        else
        {
            $this->BasedeDatos = $this->objClsEncript->encriptar(trim($value));
        }
        

    }

    public function setearUsuario($value)
    {
        if(is_null($value) || !isset($value) || (strlen($value)<=0))
        {
            $this->Usuario = null;
        }
        else
        {
            $this->Usuario = $this->objClsEncript->encriptar(trim($value));

        }
        
    }

    public function setearContraseña($value)
    {
        if(is_null($value) || !isset($value) || (strlen($value)<=0))
        {
            $this->Contraseña = null;
        }
        else
        {
            $this->Contraseña = $this->objClsEncript->encriptar(trim($value));
        }
        

    }
    public function obtenerServidor()
    {
        return $this->Servidor;
    }
    public function obtenerBasedeDatos()
    {
        return $this->BasedeDatos;
    }
    public function obtenerUsuario()
    {
        return $this->Usuario;
    }
    public function obtenerContraseña()
    {
        return $this->Contraseña;
    }
    
    public function obtenerDatosCargados()
    {
        $datosCargados = array();
         $this->valoresCargados = array();

        if(!is_null($this->Servidor))
            {
                $datosCargados[] = "Server";
                $this->valoresCargados[] = $this->Servidor;
            }

           
        if(!is_null($this->BasedeDatos))
            {
                $datosCargados[] = "BD";
                $this->valoresCargados[] = $this->BasedeDatos;
            }
            
        if(!is_null($this->Usuario))
            {
                $datosCargados[] = "User";
                $this->valoresCargados[] = $this->Usuario;
            }
        if(!is_null($this->Contraseña))
            {
                $datosCargados[] = "Pass";
                $this->valoresCargados[] = $this->Contraseña;
            }
            return $datosCargados;
           
    }

    public function obtenerValoresCargados($indice)
    {
        return $this->valoresCargados[$indice];
    }
    public function desencriptarServidor($value)
    {
        $this->Servidor = $this->objClsEncript->desencriptar(trim($value));
    }
    public function desencriptarBasedeDatos($value)
    {
        $this->BasedeDatos = $this->objClsEncript->desencriptar(trim($value));
    }
    public function desencriptarUsuario($value)
    {
        $this->Usuario = $this->objClsEncript->desencriptar(trim($value));
    }
    public function desencriptarContraseña($value)
    {
        $this->Contraseña = $this->objClsEncript->desencriptar(trim($value));
    }
}
?>
