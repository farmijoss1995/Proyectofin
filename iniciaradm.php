<?php
    session_start();
    include'conexion.php';
   if(isset($_SESSION['nombre'])){
      echo '<script>window.location="menu.php";</script>';
    }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>MANGO BOUTIQUE</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body style="margin-top: 7%">

<div id="bg">

<div id="main">
<div id="maintop">
<!--img src="images/1.png" alt="" /></div>
<!-- content begins -->
<div id="content">

        <center>
        <form name="user" action="validaradmi.php" method="post">

             <br>
             <br>
             <br>
            <h1 style="background:blue">INICIAR SESIÓN ADMINISTRADOR</h1>
            <br>
            <br>
            <br>
            <input style="background:white" type="text" name="nombre" id="nombre" placeholder="ADMINISTRADOR" /><br />
             <br>
             <br>
             <br>

            <input style="background:white" type="password" name="contrasena" id="contrasena" placeholder="CONTRASEÑA"/><br />
             <br>
             <br>
             <br>



              <input style="background: black" type="submit" name="login" id="enter" value="Iniciar Sesión "
            onclick="location='menu.php'">



            <input style="background: black" type="button" name="cancelar" value="Salir" onclick="location='index.php'">
             <br>
             <br>

            <a type="button"  style="background: black" href="administrador.php">Crear Administrador</a>

        </form>




            </center>





	<div style="clear: both"></div>

</div>

</div>


</div>
</body>
</html>

