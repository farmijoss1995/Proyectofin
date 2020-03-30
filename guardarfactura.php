<?php
session_start();
include "conexion.php";
		$arreglo=$_SESSION['carrito'];
		$numeroventa=0;
        $sql="select * from guardarfactura order by numeroventa DESC limit 1  ";
        $result = mysqli_query($conexion, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($f= mysqli_fetch_assoc($result)) {
           	$numeroventa=$f['numero venta'];
		}
        }
		if($numeroventa==0){
			$numeroventa=1;
		}else{
			$numeroventa=$numeroventa+1;
		}



			$sql = "insert into guardarfactura (numero venta,nombre cliente, apellido cliente,correo,telefono,direccion,nombre producto,precio, cantidad,subtotal) values(
				".$numeroventa.",
				'".$arreglo[$i]['nombre cliente.']."',
				'".$arreglo[$i]['apellido cliente']."',
				'".$arreglo[$i]['correo']."',
				'".$arreglo[$i]['telefono']."',
                '".$arreglo[$i]['direccion.']."',
				'".$arreglo[$i]['nombre producto']."',
				'".$arreglo[$i]['precio']."',
				'".$arreglo[$i]['cantidad']."',
				'".($arreglo[$i]['precio']*$arreglo[$i]['cantidad'])."'
				)";
            if ($conexion->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

		unset($_SESSION['carrito']);
        header("Location: ./guardarfactura.php");

?>


