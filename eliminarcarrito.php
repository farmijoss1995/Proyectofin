<?php

include 'conexion.php';

$id=$_REQUEST['id'];

$query= "DELETE FROM compras WHERE id='$id'";

$resultado= $conexion->query($query);

if($resultado){
  header("Location: carritoCompras.php");
}else{
    echo "insercion no exitosa";
}

?>
