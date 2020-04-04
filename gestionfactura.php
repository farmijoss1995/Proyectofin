<?php
	include "conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>FACTURA</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>

</head>

<body>

	<header>
		<img src="./images/22.png" id="logo">

		<a href="./carritoCompras.php" title="ver carrito de compras">




		</a>
		 <input style="font-size:20px" type="button" name="cancelar" value="SALIR" onclick="location='menucliente.php'">
	</header>

	<section>

	<center>



	<table class="tabla">
            <thead>
                <tr>

                </tr>
                <tr>
                <th style="background: #FF0040" colspan="10"><h1>GESTION FACTURA</h1></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><h2 style="background: #FF0040">Nombre Cliente</h2></td><br><br>
                    <td><h2 style="background: #FF0040">Apellido Cliente</h2></td>
                    <td><h2 style="background: #FF0040">Correo</h2></td>
                    <td><h2 style="background: #FF0040">Telefono</h2></td>
                    <td><h2 style="background: #FF0040">Direccion</h2></td>

                    <td><h2 style="background: #FF0040">Nombre Producto</h2></td>

                     <td><h2 style="background: #FF0040">Precio</h2></td>

                      <td><h2 style="background: #FF0040">Cantidad</h2></td>

                       <td><h2 style="background: #FF0040">Subtotal</h2></td>

                    <td colspan="2"><h2 style="background: #FF0040">OPERACIONES</h2></td>

                </tr>


                <?php
            session_start();


            $sql = "SELECT * FROM guardarfactura ";
            $resultado= $conexion->query($sql);

            while($row=$resultado->fetch_assoc()){

    ?>
    <tr>



    <td style="background:">
       <?php echo $row['nombre cliente']; ?></td>

    <td style="background:">
       <?php echo $row['apellido cliente']; ?></td>

    <td style="background:">
       <?php echo $row['correo']; ?></td>

    <td style="background:">
       <?php echo $row['telefono']; ?></td>
       <td style="background:">
       <?php echo $row['direccion']; ?></td>

         <td style="background:">
       <?php echo $row['nombre producto']; ?></td>

         <td style="background:">
       <?php echo $row['precio']; ?></td>

         <td style="background:">
       <?php echo $row['cantidad']; ?></td>

      <td style="background:">
       <?php echo $row['subtotal']; ?></td>

    <td style="background: black"><a style="background:#F5F6CE" href="actualizarclientes.php?id=<?php echo $row['id'];?>">Actualizar</a></td>

    <td style="background: black"><a style="background:#F5F6CE" href="eliminarfac.php?id=<?php echo $row['id'];?>">Eliminar</a></td>








                <?php
                   }
?>
        <tr>

                </tr>
                <tr>


</body>

</html>
