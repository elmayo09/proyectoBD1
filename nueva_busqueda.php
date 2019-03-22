<?php
require("conn.php");
include("header.php");

$consulta= $_POST["consulta"];

if ($consulta=="Buscar calificaciones") {

	$codigo= $_POST["cedula_empleado"];
	if( $codigo==""){
		echo '<div class="alert alert-danger" role="alert">
  			No ingreso la cedula del empleado a buscar!
			</div>';
			$query="select * from calificacion
			where(creador = 0)";
	}else{
		$c=(string)$codigo;
	$query="select * from calificacion
		where(creador = ".$c.")";
	}
	

		
}

$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

 	if($result){
        
         
 	}else{
 		echo "Ha ocurrido un error al crear la calificacion";
 	}
 
 mysqli_close($conn);

?>