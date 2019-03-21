<?php
require("conn.php");
include("header.php");

$consulta= $_POST["consulta"];

if ($consulta=="Consultar empleados sin calificaciones recibidas") {
	$query="SELECT *
  		FROM empleado e
 		WHERE NOT EXISTS (SELECT NULL
                    	FROM calificacion c
                    	WHERE e.cedula = c.asignatario) ";
		
}else if($consulta=="Empleados con numero de calificaciones realizadas"){
	$query="SELECT e.cedula, e.nombre, t.total 
  FROM empleado AS e,(SELECT creador,COUNT(*) AS total FROM calificacion GROUP BY creador) AS t
  WHERE e.cedula=t.creador";
}else{
	$query="SELECT * FROM empleado";
}
$result = mysqli_query($conn, $query) or 
		die(mysqli_error($conn));
		echo $consulta;
 

 
mysqli_close($conn);
?>