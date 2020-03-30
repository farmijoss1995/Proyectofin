<?php
session_start();
include 'conexion.php';

if(isset($_SESSION['nombre'])){
    echo"";

}else{
    echo '<script> window.location="iniciaradm.php";</script>';
}

?>
