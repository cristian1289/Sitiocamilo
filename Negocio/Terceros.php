<?php
include_once('../Entidades/tercero.php');
include_once('../Datos/tercerosData.php');
if (isset($_POST['txtOperacion'])) {
    $operacion = $_POST['txtOperacion'];
    if ($operacion === "Registrar") {
        $objClstercerosData = new ClstercerosData();
        if ($objClstercerosData->registrarTercero(obtenerDatosFormulario())) {
            $mensaje = "operacion ejecutada correctamente";
            header('Location:../pages/home/?MsgType=Ext&MsgValue=' . urlencode($mensaje));
        } else {
            EnviarMensajeError();
        }
    }
} else {
    EnviarMensajeError();
}
function EnviarMensajeError()
{
    $mensaje = "ocurrio un error en la opercion...</br>intenta nuevamente.";
    header('Location:../pages/home/?MsgType=Err&MsgValue=' . urlencode($mensaje));
}

function obtenerDatosFormulario()
{
    $
    $objclsTerceroEntidad = new clsTerceroEntidad();
    if (isset($_POST['txtIdentificaion'])) {
        echo "1";
        $
        $objclsTerceroEntidad->setearidentificacionTercero($_POST['txtIdentificaion']);
        if (isset($_POST['txtNombreTercero'])) {
            echo "2";
            $
            $objclsTerceroEntidad->setearnombreTercero($_POST['txtNombreTercero']);
            if (isset($_POST['txtEmail'])) {
                echo "3";
                $
                $objclsTerceroEntidad->setearemailTercero($_POST['txtEmail']);
                if (isset($_POST['txtCelular'])) {
                    echo "4";
                    $
                    $objclsTerceroEntidad->setearcelularTercero($_POST['txtCelular']);
                    if (isset($_POST['txtTelefono'])) {
                        echo "5";
                        $
                        $objclsTerceroEntidad->seteartelefonTercero($_POST['txtTelefono']);
                        if (isset($_POST['txtDireccion'])) {
                            echo "6";
                            $
                            $objclsTerceroEntidad->seteardireccionTercero($_POST['txtDireccion']);
                            return $
                                $objclsTerceroEntidad;
                        
                        } else {
                            EnviarMensajeError();
                        }
                    } else {
                        EnviarMensajeError();
                    }
                } else {
                    EnviarMensajeError();
                }
            } else {
                EnviarMensajeError();
            }
        } else {
            EnviarMensajeError();
        }
    } else {
        EnviarMensajeError();
    }
}
?>