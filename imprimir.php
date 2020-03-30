<?php
	include "conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>CARRITOCOMPRAS</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>

</head>

<body>

	<header>
		<img src="./images/22.png" id="logo">

		<a href="./carritoCompras.php" title="ver carrito de compras">




		</a>

	</header>

	<section>

	<center>

	 	 	 <th style="background: #FF0040" colspan="10"><h1>FACTURA VISULA</h1></th>

	<table class="tabla">

            <thead>

                                 <tr>

                </tr>
                <tr>
                      <?php
                 include 'conexion.php';

              $query = "SELECT * FROM cliente where id=53 ";
        $result = $conexion->query($query);


                    while($row = mysqli_fetch_array($result)){

      /*echo '<tr><td>Compra Número: '.$f['numeroventa'].' </td></tr>';*/





                    $nombres=''.$row['nombres'];
                    $apellidos=''.$row['apellidos'];
                    $correo=''.$row['correo'];
                    $telefono=''.$row['telefono'];
                    $direccion=''.$row['direccion'];




                echo "<label> Nombre Cliente: </label>";
                echo "<input type='text' name='cedula' id='cedula' value='$nombres' disabled><br><br>";

                echo "<label> Apellido Cliente: </label>";
                echo "<input type='text' name='cedula' id='cedula' value='$apellidos' disabled><br><br>";

                echo "<label> Correo: </label>";
                echo "<input type='text' name='cedula' id='cedula' value='$correo' disabled><br><br>";

                echo "<label> Telefono: </label>";
                echo "<input type='text' name='cedula' id='cedula' value='$telefono' disabled><br><br>";

                echo "<label> Direccion: </label>";
                echo "<input type='text' name='cedula' id='cedula' value='$direccion' disabled><br><br>";







     }





?>


            <?php
include 'conexion.php';
          $id = $_GET['numeroventa'];
     $iva=0.12;
    $total=0;
              $sql = "SELECT * FROM compras where numeroventa='$id'";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
        while($f = $result->fetch_assoc()) {

      /*echo '<tr><td>Compra Número: '.$f['numeroventa'].' </td></tr>';*/

					$numeroventa=$f['numeroventa'];

                    $nombre=''.$f['nombre'];
                    $precio=''.$f['precio'];
                    $cantidad=''.$f['cantidad'];
                    $subtotal=''.$f['subtotal'];

             $total=$subtotal*$iva;
             $iva1=$f['subtotal']*$iva;
                    $ivaT=$f['subtotal']+$iva1;

                echo "<label> Nombre Producto: </label>";
                echo "<input type='text' name='cedula' id='cedula' value='$nombre' disabled><br><br>";

                echo "<label> Precio: </label>";
                echo "<input type='text' name='nombre' id='nombre' value='$precio' disabled><br><br>";
                 echo "<label> Cantidad: </label>";
                echo "<input type='text' name='email' id='email' value='$cantidad' disabled><br><br>";
                 echo "<label> Subtotal: </label>";
                echo "<input type='text' name='telefono' id='telefono' value='$subtotal'disabled><br><br>";
              echo "<label> TotalFinal: </label>";
     echo "<input type='text' name='telefono' id='telefono' value='$ivaT'disabled><br><br>";

            if($cantidad>2){


            }else{


            }




    }


     }
         echo '<tr>

                        <td><center><input type="button" onclick= window.location="admin.php?numeroventa='.$numeroventa.'"  value="Atras"  > </center> </td>
					</tr>';




                      echo '<center><a href="guardarfactura.php" class="aceptar">Guardar Factura</a></center>;';




 ?>

    <scrip>

    </scrip>
                     </table>


            </table>

            </form>



        </center>
    </body>
</html>

