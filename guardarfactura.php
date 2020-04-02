<?php
session_start();
include "conexion.php";
		$arreglo=$_SESSION['carrito'];

        $sql="select * from guardarfactura   ";
        $result = mysqli_query($conexion, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($f= mysqli_fetch_assoc($result)) {

		}
        }


for($i=0; $i<count($arreglo);$i++){

			$sql = "insert into guardarfactura (nombre cliente, apellido cliente,correo,telefono,direccion,nombre producto,precio, cantidad,subtotal) values(

				'".$arreglo[$i]['nombre cliente']."',
				'".$arreglo[$i]['apellido cliente']."',
				'".$arreglo[$i]['correo']."',
				'".$arreglo[$i]['telefono']."',
                '".$arreglo[$i]['direccion']."',
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
}
		unset($_SESSION['carrito']);
        header("Location: ./visualfac.php");

?>




