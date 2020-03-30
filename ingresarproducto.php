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
<!--div id="maintop"><img src="images/1.png" alt="" /></div>
<!-- content begins -->
<div id="content">

        <center>

            <form action="validafoto.php" method="POST" class="crear" enctype="multipart/form-data">


                <h1 style="background: blue">INGRESAR MENÚ</h1>

            <br>
        <input type="text" name="descripcion"  id="descripcion" required placeholder="DESCRIPCIÓN">(*)
            <div id="msj"></div>
            <br>

            <br>
        <input type="file" name="imagen" id="imagen" required placeholder="IMAGEN">(*)
            <div id="msj1"></div>
            <br>

            <br>
        <input type="text" name="precio" id="precio" required placeholder="PRECIO">(*)
            <div id="msj2"></div>
            <br>

            <br>
            <br>

            <input style="background: #FF0040" type="submit" value="Ingresar" id="ingresar">
            <input style="background: #FF0040" type="button" name="cancelar" value="Cancelar" onclick="location='menu.php'">
        </form>




            </center>





	<div style="clear: both"></div>

</div>

</div>


</div>
</body>
</html>

