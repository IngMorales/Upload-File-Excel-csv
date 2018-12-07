<?php

if (isset($_POST["enviar"])) {
	require "conexion.php";
	require "functions.php";

	$archivo = $_FILES["archivo"]["name"];
	$archivo_copiado= $_FILES["archivo"]["tmp_name"];
	$archivo_guardado = "copia_".$archivo;

	if (copy($archivo_copiado ,$archivo_guardado )) {
		echo "Archivo Excel cargado Correctamente";
		echo "<br>";
	}else{
		echo "Error al Subir el Archivo Excel";
		echo "<br>";
	}

	if (file_exists($archivo_guardado)) {

    	 $fp = fopen($archivo_guardado,"r");
    	 $rows = 0;
    	 while ($datos = fgetcsv($fp , 1000 , ";")) {
    	 	$rows ++;
    	 	if ($rows > 1) {
    	 		@$resultado = insertar_datos($datos[0],$datos[1],$datos[2],$datos[3]);
    	 		if($resultado){
    	 			echo "Se Inserto Correctamente";
    	 			echo "<br>";
    	 		}else{
    	 			echo "No se Inserto";
    	 			echo "<br>";
    	 		}
    	 	}
    	 }



    	}else{
    		echo "No se copio el Archivo Excel";
    		echo "<br>";
    	}

    }


    ?>