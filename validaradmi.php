<?php
include 'noingresaradmi.php';
?>

<?php
session_start();

include 'conexion.php';

$usu= $_POST['nombre'];
$contra= $_POST['contrasena'];



$sql = "SELECT * FROM administrador WHERE nombre ='$usu' and contrasena='$contra'";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
          $_SESSION['nombre']=$row['nombre'];
          $_SESSION['Logueado']="true";

          header ("Location: menu.php");

} else {
     header ("Location: iniciaradm.php");
}
if($usu== $row['nombre'] && $contra== $row['contrasena']){
    session_start();
   $_SESSION["autenticado"]= "SI";
header ("Location: menu.php");
}else {
//si no existe se va a login.php
header("Location: iniciaradm.php?errorusuario=si");
}

$conexion->close();

?>

