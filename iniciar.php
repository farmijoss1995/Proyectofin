<?php
    session_start();
    include'conexion.php';
   if(isset($_SESSION['correo'])){
      echo '<script>window.location="menucliente.php";</script>';
    }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>BOUTIQUE MANGO</title>
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
        <form name="user" action="validaruser.php" method="post">

             <br>
             <br>
             <br>
            <h1 style="background:blue">INICIAR SESIÓN CLIENTE</h1>
            <br>
            <br>
            <br>
            <input style="background:white" type="email" name="correo" id="correo" placeholder="EMAIL" /><br />
             <br>
             <br>
             <br>

            <input style="background:white" type="password" name="contrasena" id="contrasena" placeholder="CONTRASEÑA"/><br />
             <br>
             <br>
             <br>

            <input style="background: blue" type="submit" name="login" id="enter" value="Iniciar Sesión">

            <input style="background: blue" type="button" name="cancelar" value="Cancelar" onclick="location='index.php'">
             <br>
             <br>
        </form>




            </center>





	<div style="clear: both"></div>

</div>

</div>


</div>
</body>
</html>


