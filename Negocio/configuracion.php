<?php
if (isset($_POST['txtServidor']))
{
    echo'se recupero el servidor: '.$post['txtServidor'].' <br />';
}
else{
    echo 'No se recupero el servidor'
}
if (isset($_POST['txtBasedeDatos']))
{
    echo'se recupero la Base de Datos: '.$post['txtBasedeDatos'].' <br />';
}
else{
    echo 'No se recupero la Base de Datos'
}
if (isset($_POST['txtUsuario']))
{
    echo'se recupero el Usuario: '.$post['txtUsuario'].' <br />';
}
else{
    echo 'No se recupero el Usuario'
}
if (isset($_POST['txtContraseña']))
{
    echo'se recupero la contraseña: '.$post['txtContraseña'].' <br />';
}
else{
    echo 'No se recupero la contraseña'
}


?>