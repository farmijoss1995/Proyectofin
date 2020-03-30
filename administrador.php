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

            <form action="crearadmi.php" method="POST" class="crear">


                <h1 style="background: blue">CREAR ADMINISTRADOR</h1>

            <br>
        <input type="text" name="nombre"  id="nombre" required placeholder="NOMBRES">(*)
            <div id="msj"></div>
            <br>



            <br>
        <input type="password" name="contrasena" id="contrasena" required placeholder="CONTRASEÑA">(*)
            <div id="msj5"></div>
            <br>

            <br>
            <br>

           <input style="background: black" type="submit" value="Crear Administrador" id="crear">



            <input style="background: black" type="button" name="cancelar" value="Salir" onclick="location='iniciaradm.php'">
        </form>




            </center>





	<div style="clear: both"></div>

</div>

</div>


</div>
</body>
</html>

