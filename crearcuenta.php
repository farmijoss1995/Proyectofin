<?php
include("conexion.php");

$nombres= $_POST['nombres'];
$apellidos= $_POST['apellidos'];
$correo= $_POST['correo'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$contrasena=$_POST['contrasena'];


$query="INSERT INTO cliente(nombres,apellidos,correo,telefono,direccion,contrasena) VALUES('$nombres','$apellidos','$correo','$telefono','$direccion','$contrasena')";

$resultado= $conexion->query($query);

if($resultado){
  header("Location: iniciar.php");
}else{
    echo "insercion no exitosa";
}

?>

