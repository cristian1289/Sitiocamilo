<?php
if (isset($_POST['txtServidor']))
{
    echo'se recupero el servidor: '.$_POST['txtServidor'].' <br />';
}
else{
    echo 'No se recupero el servidor';
}
if (isset($_POST['txtBasedeDatos']))
{
    echo'se recupero la Base de Datos: '.$_POST['txtBasedeDatos'].' <br />';
}
else{
    echo 'No se recupero la Base de Datos';
}
if (isset($_POST['txtUsuario']))
{
    echo'se recupero el Usuario: '.$_POST['txtUsuario'].' <br />';
}
else{
    echo 'No se recupero el Usuario';
}
if (isset($_POST['txtContraseña']))
{
    echo'se recupero la contraseña: '.$_POST['txtContraseña'].' <br />';
}
else{
    echo 'No se recupero la contraseña';
}


?>