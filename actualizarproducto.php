<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>BELLY SATISFIED</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body style="margin-top: 7%">

<div id="bg">

<div id="main">
<!--<div id="maintop"><img src="images/spaser.gif" alt="" /></div>
<!-- content begins -->
<div id="content">

                    <?php
                    include("conexion.php");
                    $id=$_REQUEST['id'];

                    $query="SELECT * FROM menu WHERE id='$id'";

                    $resultado= $conexion->query($query);

                    $row=$resultado->fetch_assoc();
                    ?>

        <center>

            <form action="proceso_actualizar.php?id=<?php echo $row['id'] ?>;" method="POST" class="crear" enctype="multipart/form-data">


                <h1 style="background: blue">ACTUALIZAR MENÚ</h1>

            <br>
        <input type="text" name="descripcion"  id="descripcion" value="<?php echo $row['descripcion'];?>" required placeholder="DESCRIPCIÓN">(*)
            <div id="msj"></div>
            <br>

                <br>
                <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>"/>
                <br>

            <br>
        <input type="file" name="imagen" id="imagen" required placeholder="IMAGEN">(*)
            <div id="msj1"></div>
            <br>

            <br>
        <input type="text" name="precio" id="precio" value="<?php echo $row['precio'];?>" required placeholder="PRECIO">(*)
            <div id="msj2"></div>
            <br>

            <br>
            <br>

            <input style="background: #FF0040" type="submit" name="actualizar" value="Actualizar" id="actualizar">
            <input style="background: #FF0040" type="button" name="cancelar" value="Cancelar" onclick="location='menu.php'">
        </form>




            </center>





	<div style="clear: both"></div>

</div>

</div>


</div>
</body>
</html>


