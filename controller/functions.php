	<?php
	function insertar_datos($ruc,$nombre,$fecha,$saldo){
		global $conexion;
		$sentencia = "INSERT INTO cliente (ruc, nombrecliente, fecha, saldo) VALUES ($ruc, '$nombre', '$fecha', '$saldo')";
		$ejecutar = mysqli_query($conexion,$sentencia);
		return $ejecutar;
	}
	?>