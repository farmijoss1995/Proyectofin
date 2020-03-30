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
<!--<div id="maintop"><img src="images/1.png" alt="" /></div>
<!-- content begins -->
<div id="content">

                    <?php
                    include("conexion.php");
                    $id=$_REQUEST['id'];

                    $query="SELECT * FROM cliente WHERE id='$id'";

                    $resultado= $conexion->query($query);

                    $row=$resultado->fetch_assoc();
                    ?>

        <center>

            <form action="proceactcliadmin.php?id=<?php echo $row['id'] ?>;" method="POST" class="crear" enctype="multipart/form-data">


                <h1 style="background: blue">ACTUALIZAR CLIENTE</h1>

            <br>
        <input type="text" name="nombres"  id="nombres" value="<?php echo $row['nombres'];?>" required placeholder="NOMBRE">(*)
          <div id="msj"></div>

           <br>
           <br>
        <input type="text" name="apellidos"  id="apellidos" value="<?php echo $row['apellidos'];?>" required placeholder="APELLIDO">(*)
          <div id="msj"></div>

           <br>
           <br>
        <input type="text" name="correo"  id="correo" value="<?php echo $row['correo'];?>" required placeholder="CORREO">(*)
          <div id="msj"></div>

           <br>
           <br>
        <input type="text" name="telefono"  id="telefono" value="<?php echo $row['telefono'];?>" required placeholder="TELEFONO">(*)
          <div id="msj"></div>

           <br>
           <br>
        <input type="text" name="direccion"  id="direccion" value="<?php echo $row['direccion'];?>" required placeholder="DIRECCION">(*)
           <div id="msj"></div>

            <br>


                 <input type="text" name="contrasena"  id="contrasena" value="<?php echo $row['contrasena'];?>" required placeholder="contrasena">(*)
           <div id="msj"></div>


            <br>




            <input style="background: black" type="submit" name="actualizar" value="Actualizar" id="actualizar">

            <input style="background: black" type="button" name="cancelar" value="Salir" onclick="location='gestionadministracli.php'">
        </form>




            </center>





	<div style="clear: both"></div>

</div>

</div>


</div>
</body>
</html>

