<?php
	include "conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>
		<img src="./images/22.png" id="logo">
		<a href="./carritoCompras.php" title="ver carrito de compras">
			<img src="./imagenes/carrito.png">
		</a>
	</header>
	<section>

	<center>



	<h1 style="background: blue">FACTURA</h1></center>
	<table border="0px" width="100%">
		<tr>


			<td style="background: white">Nombre Cliente</td>
			<td style="background: white">Apellido Cliente</td>
			<td style="background: white">Correo</td>
			<td style="background: white">Telefono</td>
            <td style="background: white">Direccion</td>
			<td style="background: white">Nombre Producto</td>
			<td style="background: white">Precio</td>
			<td style="background: white">Cantidad</td>
            <td style="background: white">%Subtotal</td>


		</tr>



		<?php

        $query = "SELECT * FROM compras c INNER JOIN cliente cl ON c.numeroventa";
        $result = $conexion->query($query);

        $table = '';

        while($row = mysqli_fetch_array($result)){


            $table = '<tr>';

            $table .="<td>$row[nombres]</td>";
            $table .="<td>$row[apellidos]</td>";
            $table .="<td>$row[correo]</td>";
            $table .="<td>$row[telefono]</td>";
            $table .="<td>$row[direccion]</td>";
            $table .="<td>$row[nombre]</td>";
            $table .="<td>$row[precio]</td>";
            $table .="<td>$row[cantidad]</td>";
            $table .="<td>$row[subtotal]</td>";
         $table .='</tr>';
        }














		?>
            <?php echo $table; ?>

	</table>

	</section>

</body>
</html>
