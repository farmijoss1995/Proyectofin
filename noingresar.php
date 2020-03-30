<?php
session_start();
include 'conexion.php';

if(isset($_SESSION['correo'])){
    echo"";

}else{
    echo '<script> window.location="iniciar.php";</script>';
}

?>
