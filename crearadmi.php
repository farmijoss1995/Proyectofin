<?php
include("conexion.php");

$nombre= $_POST['nombre'];
$contrasena=$_POST['contrasena'];


$query="INSERT INTO administrador(nombre ,contrasena) VALUES('$nombre','$contrasena')";

$resultado= $conexion->query($query);

if($resultado){
  header("Location: iniciaradm.php");
}else{
    echo "insercion no exitosa";
}

?>

