<?php

include 'conexion.php';

$id=$_REQUEST['id'];

$query= "DELETE FROM menu WHERE id='$id'";

$resultado= $conexion->query($query);

if($resultado){
  header("Location: menu.php");
}else{
    echo "insercion no exitosa";
}

?>
