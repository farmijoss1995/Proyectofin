<?php
session_start();
include 'conexion.php';

if(isset($_SESSION['nombre'])){?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>MANGO BOUTIQUE</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>

<div id="bg">

<!-- header begins -->
<div id="header">
	<div id="logo">
        <img src="images/2.png">
        <h1><a href="#">MANGO BOUTIQUE</a>
        </h1></div>
	<div id="buttons">
		<ul>
			<li class="first"><a href="index.php"  title="">Inicio</a></li>


			<li><a href="#" title="">Nosotros</a></li>
			<li><a href="#" title="">Telefonos</a></li>
			<li><a href="#" title="">Locales</a></li>

			<li><a href="gestionadministracli.php" title="">Adm Clientes</a></li>
		</ul>
	</div>
</div>
<!-- header ends -->

<div id="main">
<!--<div id="maintop"><img src="images/spaser.gif" alt="" /></div>
<!-- content begins -->
<div id="content">
	<div id="right">
    	<div id="archives">


        </div>
     </div>
        <center>
         <div id="left">
        <div class="text">

                <a style="background:black" href="cerraradmi.php">Cerrar Sesion</a>
                <center>
        <table class="tabla">
            <thead>
                <tr>
                    <th style="background: #FF0040"><a href="ingresarproducto.php"><h3>Ingresar Menú</h3></a></th>
                </tr>
                <tr>
                <th style="background: white" colspan="5"><h1>MENÚ ROPA</h1></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><h2 style="background: #FF0040">DESCRIPCIÓN</h2></td><br><br>
                    <td><h2 style="background: #FF0040">IMAGEN</h2></td>
                    <td><h2 style="background: #FF0040">PRECIO</h2></td>
                    <td colspan="2"><h2 style="background: #FF0040">OPERACIONES</h2></td>

                </tr>

                <?php
                    include("conexion.php");

                    $query="SELECT * FROM menu";

                    $resultado= $conexion->query($query);

                    while($row=$resultado->fetch_assoc()){
    ?>
    <tr>
    <td style="background: black"><?php echo $row['descripcion']; ?></td>

    <td><img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>"/> </td>

    <td style="background: black"><?php echo $row['precio']; ?></td>


    <td style="background: black"><a style="background:black" href="actualizarproducto.php?id=<?php echo $row['id'];?>">Actualizar</a></td>
    <td style="background: black"><a style="background:black" href="eliminar_menu.php?id=<?php echo $row['id'];?>">Eliminar</a></td>
    </tr>

                <?php
}
?>

            </tbody>

            </table>

        </center>



     </div>
	 </div>
            </center>





	<div style="clear: both"></div>

</div>

<!-- content ends -->
<!--<div id="mainbot"><img src="images/spaser.gif" alt="" /></div>-->
</div>

</div>
</body>
</html>





    <?php
}else{
    echo '<script> window.location="iniciaradm.php";</script>';
}

?>
