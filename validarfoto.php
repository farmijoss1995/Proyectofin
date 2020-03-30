<?php

include 'conexion.php';

$descripcion= $_POST['descripcion'];
$imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$precio= $_POST['precio'];


$query= "INSERT INTO menu(descripcion, imagen, precio) VALUES('$descripcion', '$imagen', '$precio')";

$resultado= $conexion->query($query);

if($resultado){
  header("Location: menu.php");
}else{
    echo "insercion no exitosa";
}





?>
