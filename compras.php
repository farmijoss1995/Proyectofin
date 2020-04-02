<?php
session_start();
include "conexion.php";
		$arreglo=$_SESSION['carrito'];
		$numeroventa=0;
        $sql="select * from compras order by numeroventa DESC limit 1";
        $result = mysqli_query($conexion, $sql);
        if (mysqli_num_rows($result) > 0) {
		while ($f= mysqli_fetch_assoc($result)) {
           	$numeroventa=$f['numeroventa'];
		}
        }
		if($numeroventa==0){
			$numeroventa=1;
		}else{
			$numeroventa=$numeroventa+1;
		}



for($i=0; $i<count($arreglo);$i++){

			$sql = "insert into compras (numeroventa,nombre,imagen,precio,cantidad,subtotal) values(
				".$numeroventa.",
                '".$arreglo[$i]['descripcion']."',
				'".$arreglo[$i]['.$imagen.']."',
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
        header("Location: admin.php");

?>


