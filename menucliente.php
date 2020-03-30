<?php
session_start();
include 'conexion.php';

if(isset($_SESSION['correo'])){?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>BELLY SATISFIED</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>

<div id="bg">

<!-- header begins -->
<div id="header">
	<div id="logo">
        <img src="images/1.JPG">
        <h1><a href="#">BELLY SATISFIED</a>
        </h1></div>
	<div id="buttons">
		<ul>
			<li class="first"><a href="index.php"  title="">Inicio</a></li>
			<li><a href="nosotros.php" title="">Nosotros</a></li>
			<li><a href="telefono.php" title="">Telefonos</a></li>
			<li><a href="locales.php" title="">Locales</a>
			</li>

			<li><a href="gestionclientes.php" title="">Adm Clientes</a></li>
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

                <a style="background:#F5F6CE" href="cerrar.php">Cerrar Sesion</a>
                <center>
        <table class="tabla">
            <thead>
                <tr>
                </tr>
                <tr>
                <th style="background: white" colspan="5"><h1>MENÚ</h1></th>
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
    <td style="background: black"><a style="background:#F5F6CE" href="./carritoCompras.php?id=<?php echo $row['id'];?>">Comprar</a></td>
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
    echo '<script> window.location="iniciar.php";</script>';
}

?>
