<?php

session_start();
include 'conexion.php';
if(isset($_SESSION['carrito'])){
    if(isset($_GET['id'])){
    	$arreglo=$_SESSION['carrito'];
					$encontro=false;
					$numero=0;
					for($i=0;$i<count($arreglo);$i++){
						if($arreglo[$i]['id']==$_GET['id']){
							$encontro=true;
							$numero=$i;
						}
					}
					if($encontro==true){
						$arreglo[$numero]['cantidad']=$arreglo[$numero]['cantidad']+1;
						$_SESSION['carrito']=$arreglo;
					}else{


                        $nombre="";
        $precio=0;
        $imagen="";
        $sql="select * from menu where id=".$_GET['id'];
        $result = mysqli_query($conexion, $sql);
        if (mysqli_num_rows($result) > 0) {
		while ($f= mysqli_fetch_assoc($result)) {
            $nombre=$f['descripcion'];
            $precio=$f['precio'];
            $imagen=$f['imagen'];
}
            $datosNuevos=array('id'=>$_GET['id'],
                             'descripcion'=>$nombre,
                            'precio'=>$precio,
                            'imagen'=>$imagen,
                           'cantidad'=>1);
            	array_push($arreglo, $datosNuevos);
						$_SESSION['carrito']=$arreglo;

}

}

    }
}


else{
    if(isset($_GET['id'])){
        $nombre="";
        $precio=0;
        $imagen="";
        $sql="select * from menu where id=".$_GET['id'];
        $result = mysqli_query($conexion, $sql);
        if (mysqli_num_rows($result) > 0) {
		while ($f= mysqli_fetch_assoc($result)) {
            $nombre=$f['descripcion'];
            $precio=$f['precio'];
            $imagen=$f['imagen'];

        }
            $arreglo[]=array('id'=>$_GET['id'],
                             'descripcion'=>$nombre,
                            'precio'=>$precio,
                            'imagen'=>$imagen,
                           'cantidad'=>1);
            $_SESSION['carrito']=$arreglo;
}

}
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  src="./js/scripts.js"></script>
</head>
<body>
	<header>
		<h1>Carrito de Compras</h1>
		<a href="./carritoCompras.php" title="ver carrito de compras">
			<img src="./imagenes/carrito.png">
		</a>
	</header>
	<section>

	<?php

        $total=0;
        if(isset($_SESSION['carrito'])){
            $datos=$_SESSION['carrito'];
            $total=0;
            for($i=0;$i<count($datos);$i++){
      ?>



        <div class="producto">
        <center>

            <span><?php echo $datos[$i]['descripcion'];?></span><br>
            <span>Precio: <?php echo $datos[$i]['precio'];?></span><br>
            <span>Cantidad:
			<input type="text" value="<?php echo $datos[$i]['cantidad'];?>"
							data-precio="<?php echo $datos[$i]['precio'];?>"
							data-id="<?php echo $datos[$i]['id'];?>"
							class="cantidad">
						</span><br>
            <span class="subtotal">Subtotal: <?php echo $datos[$i]['cantidad']*$datos[$i]['precio'];?></span><br>



            </center>
        </div>

        <?php
                $total=($datos[$i]['cantidad']*$datos[$i]['precio'])+$total;
            }

        }else{
            echo '<center><h2>El carrito esta vacio</h2></center>';
        }
         echo '<center><h2 id="total">Total:'.$total.'</h2></center>';
        if($total!=0){

              $iva=0.12;
            $total=0;

              $sql = "SELECT * FROM compras ";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {

        while($f = $result->fetch_assoc()) {


					$numeroventa=$f['numeroventa'];
                    $iva1=$f['subtotal']*$iva;
                    $ivaT=$f['subtotal']+$iva1;




    }


     }




					echo '<center><a href="compras.php" class="aceptar">Comprar</a></center>;';


			}

	?>
         <center><a href="menucliente.php">Añadir prenda</a></center>

</section>
</body>
</html>
