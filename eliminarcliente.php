<?php

include 'conexion.php';

$id=$_REQUEST['id'];

$query= "DELETE FROM cliente WHERE id='$id'";

$resultado= $conexion->query($query);

if($resultado){
  header("Location: gestionclientes.php");
}else{
    echo "insercion no exitosa";
}

?>
