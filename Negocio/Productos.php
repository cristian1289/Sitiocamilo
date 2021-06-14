<?php
include_once('../Entidades/producto.php');
include_once('../Datos/productosData.php');
if (isset($_POST['txtOperacion'])) {
    $operacion = $_POST['txtOperacion'];
    if ($operacion === "Registrar") {
        $objClsproductosData = new ClsproductosData();
        if ($objClsproductosData->registrarProducto(obtenerDatosFormulario())) {
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
    $objClsProductoEntidad = new clsProductoEntidad();
    if (isset($_POST['txtCodigo'])) {
        echo "1";
        $objClsProductoEntidad->setearcodigosProducto($_POST['txtCodigo']);
        if (isset($_POST['txtNombre'])) {
            echo "2";
            $objClsProductoEntidad->setearnombreProducto($_POST['txtNombre']);
            if (isset($_POST['txtDescripcion'])) {
                echo "3";
                $objClsProductoEntidad->seteardescripcionProducto($_POST['txtDescripcion']);
                if (isset($_POST['txtUnidaMedida'])) {
                    echo "4";
                    $objClsProductoEntidad->setearunidadMedida($_POST['txtUnidaMedida']);
                    if (isset($_POST['txtMarcaProducto'])) {
                        echo "5";
                        $objClsProductoEntidad->setearmarcaProducto($_POST['txtMarcaProducto']);
                        if (isset($_POST['txtProductoActual'])) {
                            echo "6";
                            $objClsProductoEntidad->setearproductoActual($_POST['txtProductoActual']);
                            if (isset($_POST['txtCantidadActual'])) {
                                echo "7";
                                $objClsProductoEntidad->setearcantidadActual($_POST['txtCantidadActual']);
                                return $objClsProductoEntidad;
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
    } else {
        EnviarMensajeError();
    }
}
?>