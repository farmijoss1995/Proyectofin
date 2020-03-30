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



	<h1 style="background: blue">Últimas Compras</h1></center>
	<table border="0px" width="100%">
		<tr>

			<td style="background: white">Nombres</td>
			<td style="background: white">Precio</td>
			<td style="background: white">Cantidad</td>
			<td style="background: white">Subtotal</td>
            <td style="background: white">%IVA</td>
            <td style="background: white">R.IVA</td>
            <td style="background: white">Total</td>

		</tr>



		<?php

	        $iva=0.12;
            $total=0;

              $sql = "SELECT * FROM compras";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {

        while($f = $result->fetch_assoc()) {

//      echo '<tr><td>Compra Número: '.$f['numeroventa'].' </td></tr>';

					$numeroventa=$f['numeroventa'];
                    $iva1=$f['subtotal']*$iva;
                    $ivaT=$f['subtotal']+$iva1;

					echo '<tr>

						<td >'.$f['nombre'].'</td>
						<td>'.$f['precio'].'</td>
						<td>'.$f['cantidad'].'</td>
						<td>'.$f['subtotal'].'</td>
                        <td>'.$iva.'</td>
                        <td>'.$iva1.'</td>
                       <td>'.$ivaT.'</td>

					</tr>';

    }


/*     <td><center><input type="button" onclick= window.location="imprimir.php?numeroventa='.$numeroventa.'"  value="Imprimir"  > </center> </td>*/

     }




          echo '<tr>

                        <td><center><input type="button" onclick= window.location="imprimir.php?numeroventa='.$numeroventa.'"  value="Imprimir"  > </center> </td>
					</tr>';
         echo '<tr>

                        <td><center><input type="button" onclick= window.location="carritoCompras.php?numeroventa='.$numeroventa.'"  value="Atras"  > </center> </td>
					</tr>';





		?>

        <?php

        ?>

	</table>

	</section>

</body>
</html>
