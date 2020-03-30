<?php

include 'conexion.php';

$id=$_REQUEST['id'];

$descripcion= $_POST['descripcion'];
$imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$precio= $_POST['precio'];


$query= "UPDATE menu SET descripcion='$descripcion', imagen='$imagen', precio='$precio' WHERE id='$id'";

$resultado= $conexion->query($query);

if($resultado){
  header("Location: menu.php");
}else{
    echo "insercion no exitosa";
}

?>
