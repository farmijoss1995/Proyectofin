<?php
include 'noingresar.php';
?>

<?php
session_start();

include 'conexion.php';

$usu= $_POST['correo'];
$contra= $_POST['contrasena'];



$sql = "SELECT * FROM cliente WHERE correo ='$usu' and contrasena='$contra'";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
          $_SESSION['correo']=$row['correo'];
          $_SESSION['Logueado']="true";

          header ("Location: menucliente.php");

} else {
     header ("Location: iniciar.php");
}
if($usu== $row['correo'] && $contra== $row['contrasena']){
    session_start();
   $_SESSION["autenticado"]= "SI";
header ("Location: menucliente.php");
}else {
//si no existe se va a login.php
header("Location: iniciar.php?errorusuario=si");
}

$conexion->close();

?>

