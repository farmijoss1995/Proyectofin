<?php

include 'conexion.php';

$id=$_REQUEST['id'];

$nombres= $_POST['nombres'];
$apellidos= $_POST['apellidos'];
$correo= $_POST['correo'];
$telefono= $_POST['telefono'];
$direccion= $_POST['direccion'];
$contrasena= $_POST['contrasena'];

$query= "UPDATE cliente SET nombres='$nombres',
apellidos='$apellidos', correo='$correo', telefono='$telefono', direccion='$direccion', contrasena='$contrasena' WHERE id='$id'";

$resultado= $conexion->query($query);

if($resultado){
  header("Location: gestionadministracli.php");
}else{
    echo "insercion no exitosa";
}

?>
