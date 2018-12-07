<?php
$conexion = mysqli_connect("localhost","root","ingmorales","factura");

if($conexion){
	echo "Conexión Correcta a la Base de Datos";
}else{
	echo "No se realizo la Conexión a la Base de Datos";
}
?>