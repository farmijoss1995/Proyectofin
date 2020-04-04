<?php

include 'conexion.php';

$id=$_REQUEST['id'];

$query= "DELETE FROM guardarfactura WHERE id='$id'";

$resultado= $conexion->query($query);

if($resultado){
  header("Location: gestionfactura.php");
}else{
    echo "insercion no exitosa";
}

?>
