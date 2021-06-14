<?php
include_once('../Entidades/usuario.php');
include_once('../Datos/usuariosData.php');
if(isset($_POST['txtOperacion'])) {
    $operacion = $_POST['txtOperacion'];
    if ($operacion === "Registrar") {

        $objClsUsuariosData = new clsUsuariosData();
        if($objClsUsuariosData->registrarUsuario(obtenerDatosFormulario()))
        {
            $mensaje = "operacion ejecutada correctamente";
            header('Location:../pages/home/?MsgType=Ext&MsgValue=' . urlencode($mensaje));
        }
            else 
            {
                EnviarMensajeError();
            }
    }
    else if($operacion === "Login"){

        $objClsUsuariosData = new clsUsuariosData();
        $objClsUsuarioEntidad = new clsUsuarioEntidad();
        if (isset($_POST['txtUsuario'])){
            $objClsUsuarioEntidad->setearNombreUsuario($_POST['txtUsuario']);
            if (isset($_POST['txtPassword'])){
                $objClsUsuarioEntidad->setearPassUsuario($_POST['txtPassword']);
                $resultado = $objClsUsuariosData->autenticarUsuario($objClsUsuarioEntidad);
                if(!$resultado)
                {
                    $mensaje = "Verifica los datos...</br>intenta nuevamente.";
                    header('Location:../?MsgType=Err&MsgValue=' . urlencode($mensaje));

                }else
                {
                    $mensaje = "Bienvenido a sitio camilo";
                    $resultado[0];
                    session_start();
                    $_SESSION['Perfil'] = $resultado[0];
                    $_SESSION['Tiempo'] = time();
                    header('Location:../pages/home/?MsgType=Ext&MsgValue=' . urlencode($mensaje));
                   
                }
                
            } else{
                EnviarMensajeError();
            } 
        } else{
            EnviarMensajeError();
        }      
    }
}
else
{
    EnviarMensajeError();

}
function EnviarMensajeError()
{
    $mensaje = "ocurrio un error en la opercion...</br>intenta nuevamente.";
    header('Location:../pages/home/?MsgType=Err&MsgValue=' . urlencode($mensaje));
}

function obtenerDatosFormulario()
{
    $objClsUsuarioEntidad = new clsUsuarioEntidad();
    if (isset($_POST['txtNombreUsuario'])){
        echo"1";
        $objClsUsuarioEntidad->setearNombreUsuario($_POST['txtNombreUsuario']);
        if (isset($_POST['txtPrimerNombre'])){
            echo"2";
            $objClsUsuarioEntidad->setearPrimerNombre($_POST['txtPrimerNombre']);
            if (isset($_POST['txtSegundoNombre'])){
                echo"3";
                $objClsUsuarioEntidad->setearSegundoNombre($_POST['txtSegundoNombre']);
                if (isset($_POST['txtPrimerApellido'])){
                    echo"4";
                    $objClsUsuarioEntidad->setearPrimerApellido($_POST['txtPrimerApellido']);
                    if (isset($_POST['txtSegundoApellido'])){
                        echo"5";
                        $objClsUsuarioEntidad->setearSegundoApellido($_POST['txtSegundoApellido']);  
                        if (isset($_POST['txtEmail'])){
                            echo"6";
                            $objClsUsuarioEntidad->setearEmail($_POST['txtEmail']); 
                            if (isset($_POST['txtIdentificacion'])){
                                echo"7";
                                $objClsUsuarioEntidad->setearIdentificacion($_POST['txtIdentificacion']);
                                if (isset($_POST['txtCelular'])){
                                    echo"8";
                                    $objClsUsuarioEntidad->setearCelular($_POST['txtCelular']); 
                                    if (isset($_POST['txtDireccion'])){
                                        echo"9";
                                        $objClsUsuarioEntidad->setearDireccion($_POST['txtDireccion']);
                                        if (isset($_POST['txtContraseña'])){
                                            echo"10";
                                            $objClsUsuarioEntidad->setearPassUsuario($_POST['txtContraseña']);
                                            if (isset($_POST['cmbPerfil'])){
                                                echo"11";
                                                $objClsUsuarioEntidad->setearcmbPerfil($_POST['cmbPerfil']);
                                                 return $objClsUsuarioEntidad;
                                            } else{
                                                EnviarMensajeError();
                                            } 
                                        } else{
                                            EnviarMensajeError();
                                        }      
                                    } else{
                                        EnviarMensajeError();
                                    }    
                                } else{
                                    EnviarMensajeError();
                                }  
                            } else{
                                EnviarMensajeError();
                            }   
                        } else{
                            EnviarMensajeError();
                        }  
                    } else{
                        EnviarMensajeError();
                    } 
                }else{
                    EnviarMensajeError();
                } 
            } else{
                EnviarMensajeError();
            }   
        } else{
            EnviarMensajeError();
        } 
    } else{
        EnviarMensajeError();
    } 
} 

?>

