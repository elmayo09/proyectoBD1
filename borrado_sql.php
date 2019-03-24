<?php 
require("conn.php");
include("header.php");

$consulta= $_POST["consulta"];
if($consulta=="Eliminar empleado"){
	$codigo= $_POST["cedula_empleado"];	
	$c=(string)$codigo;
	$query="DELETE  FROM empleado
		where(cedula = ".$c.")";

}else{
	$codigo= $_POST["codigo_calificacion"];	
	$c=(string)$codigo;
	$query="DELETE  FROM calificacion
		where(codigo = ".$c.")";
}
$result = mysqli_query($conn, $query) or 
		die(mysqli_error($conn));

if($result){
	echo '<div class="alert alert-primary" role="alert">
  			Borrado exitoso!
			</div>';
}else{
 		echo '<div class="alert alert-danger" role="alert">
  			No se encontro el registro a borrar!
			</div>';
 	}
mysqli_close($conn);
?>