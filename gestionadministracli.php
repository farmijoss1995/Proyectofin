<?php
	include "conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>ADMINISTRADOR</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>

</head>

<body>

	<header>
		<img src="./images/22.png" id="logo">

		<a href="./carritoCompras.php" title="ver carrito de compras">




		</a>
		 <input style="font-size:20px" type="button" name="cancelar" value="ATRAS" onclick="location='menu.php'">
	</header>

	<section>

	<center>



	<table class="tabla">
            <thead>
                <tr>

                </tr>
                <tr>
                <th style="background: #FF0040" colspan="10"><h1>GESTION DE CLIENTES</h1></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><h2 style="background: #FF0040">Nombre</h2></td><br><br>
                    <td><h2 style="background: #FF0040">Apellido</h2></td>
                    <td><h2 style="background: #FF0040">Correo</h2></td>
                    <td><h2 style="background: #FF0040">Telefono</h2></td>
                    <td><h2 style="background: #FF0040">Direccion</h2></td>

                    <td colspan="2"><h2 style="background: #FF0040">OPERACIONES</h2></td>

                </tr>


                <?php
                    include("conexion.php");

                    $query="SELECT * FROM cliente";

                    $resultado= $conexion->query($query);

                    while($row=$resultado->fetch_assoc()){
    ?>
    <tr>
    <td style="background:">
       <?php echo $row['nombres']; ?></td>

    <td style="background:">
       <?php echo $row['apellidos']; ?></td>

    <td style="background:">
       <?php echo $row['correo']; ?></td>

    <td style="background:">
       <?php echo $row['telefono']; ?></td>
       <td style="background:">
       <?php echo $row['direccion']; ?></td>

    <td style="background: black"><a style="background:#F5F6CE" href="actualizaracliadm.php?id=<?php echo $row['id'];?>">Actualizar</a></td>

    <td style="background: black"><a style="background:#F5F6CE" href="eliminarcliente.php?id=<?php echo $row['id'];?>">Eliminar</a></td>
    </tr>




                <?php
                    }
?>
        <tr>

                </tr>
                <tr>


</body>

</html>
