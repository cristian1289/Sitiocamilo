<?php
session_start();
$segundos = 300;
if(isset($_SESSION['Perfil']))
{
    if($_SESSION['Tiempo']+$segundos < time())
    {
        session_destroy();

    }else
        {
             $_SESSION['Tiempo'] = time();
        }
}
else 
{
    header('Location:../');
    
}
?>