    <?php
    include_once('../Entidades/configuracion.php');
    class clsconfiguracion

    {
        private $nombre = null, $ruta = null, $RutaCompleta = null ;
        public function __construct()
        {
        
            $this->ruta = '../Datos/';
            $this->nombre = 'config.txt';
            $this->generarRutaCompleta();
            
        }

        private function generarRutaCompleta()
        {
            
            $this->RutaCompleta = $this->ruta.$this->nombre;
            

        }
        
        public function actualizarArchivo($objClassConfiguracionEntidad)
        {
            if ($this-> validarExistenciaArchivo())
            {
                
                $this->modificarArchivo($objClassConfiguracionEntidad);

            }
            else 
            {
                
                $this->crearArchivo($objClassConfiguracionEntidad);
            }
            $this->leerConfiguracion();
        }
        private function validarExistenciaArchivo()
        {
            if(file_exists($this->RutaCompleta))
            {
                
                return true;
            }
            else
            {
                
                return false;
            }
        }
            private function crearArchivo($objClassConfiguracionEntidad)
        {
            $Archivo = fopen($this->RutaCompleta, "w+b");
            if($Archivo === false)
            {
                echo'</br>error al intentar al crear el archivo';

            }
            else
            {
                echo'se crea el archivo correctamente';
                fwrite($Archivo,"Server:".$objClassConfiguracionEntidad->obtenerServidor()."\r\n");
                fwrite($Archivo,"BD:".$objClassConfiguracionEntidad->obtenerBasedeDatos()."\r\n");
                fwrite($Archivo,"User:".$objClassConfiguracionEntidad->obtenerUsuario()."\r\n");
                fwrite($Archivo,"Pass:".$objClassConfiguracionEntidad->obtenerContraseña());
            }
            fclose($Archivo);
        }
        private function modificarArchivo($objClassConfiguracionEntidad)
        {
            $arrayDatosCargados = $objClassConfiguracionEntidad->obtenerDatosCargados();
            /*print_r($arrayDatosCargados);*/
            
            for ($i=0; $i < count($arrayDatosCargados); $i++) { 
                $arrayLineasArchivo = file($this->RutaCompleta);

                for ($j=0; $j < count($arrayLineasArchivo) ; $j++) { 
                    $linea = $arrayLineasArchivo[$j];
                    $pos =  strpos ($linea, $arrayDatosCargados [$i]);
                    if($pos !== false)
                    {
                        array_splice($arrayLineasArchivo,$j, 1);
                        /*echo "-".$arrayDatosCargados[$i]."\r\n";*/
                    }
                }
                    $Archivo = fopen($this->RutaCompleta, "w+b");
                    foreach($arrayLineasArchivo as $line)
                    {
                        fwrite($Archivo, $line);
                    }
                    /*echo $arrayDatosCargados[$i];*/

                    fwrite ($Archivo, "\r\n" .$arrayDatosCargados[$i].":".$objClassConfiguracionEntidad->obtenerValoresCargados($i));
                    fclose($Archivo);
                }

                
            }
            public function leerConfiguracion()
            {
                $objClassConfiguracionEntidad = new  clsconfiguracionEntidad();
                $arrayLineasArchivo = file($this->RutaCompleta);
                for ($j=0; $j < count($arrayLineasArchivo) ; $j++){
                    $linea = $arrayLineasArchivo[$j];
                    $pos = strpos($linea, "Server");
                    if($pos !== false)
                {
                    
                    $caracteres = preg_split('/:/', $linea, -1, PREG_SPLIT_NO_EMPTY);
                    if(count($caracteres)>= 2)
                    {
                        $objClassConfiguracionEntidad->desencriptarServidor($caracteres[1]);
                    }
                    
                }
                else
                {
                    $pos = strpos($linea,"BD");
                    if($pos !==false)
                    {
                        $caracteres = preg_split('/:/', $linea, -1, PREG_SPLIT_NO_EMPTY);
                        if(count($caracteres)>= 2)
                        {
                            $objClassConfiguracionEntidad->desencriptarBasedeDatos($caracteres[1]);
                        }
                        
                    }
                
                else
                {
                    $pos = strpos($linea,"User");
                    if($pos !==false)
                    {
                        $caracteres = preg_split('/:/', $linea, -1, PREG_SPLIT_NO_EMPTY);
                        if(count($caracteres)>= 2)
                        {
                            $objClassConfiguracionEntidad->desencriptarUsuario($caracteres[1]);
                        }
                        
                    }
                    else
                    {
                        $pos = strpos($linea,"Pass");
                        if($pos !==false)
                        {
                            $caracteres = preg_split('/:/', $linea, -1, PREG_SPLIT_NO_EMPTY);
                            if(count($caracteres)>= 2)
                            {
                                $objClassConfiguracionEntidad->desencriptarContraseña($caracteres[1]);
                            }
                        
                        
                        }
                        
                    }
                }
            }
   
        }
            return $objClassConfiguracionEntidad;    
     }

}

?>