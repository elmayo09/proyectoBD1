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
	$query="(SELECT e.cedula, e.nombre, t.total 
  FROM empleado AS e,(SELECT creador,COUNT(*) AS total FROM calificacion GROUP BY creador) AS t
  WHERE e.cedula=t.creador)
UNION
(SELECT e.cedula, e.nombre, 0 AS total
FROM empleado AS e
where not exists(SELECT 1
		FROM calificacion as c
		where c.creador=e.cedula))";
}else{
	$query="SELECT * FROM empleado";
}
$result = mysqli_query($conn, $query) or 
		die(mysqli_error($conn));
 
 if($result){
 		
 		echo '<table class="table table-primary">';

 		if($consulta=="Empleados con numero de calificaciones realizadas"){
 		 	?>
 		 	<thead class="thead-dark">
                    <tr>
                     <th scope="col">Cedula</th>
                     <th scope="col">Nombre</th>
                     <th scope="col">Total calificaciones realizadas</th>
                    </tr>
                </thead>
                    <tbody>
                     <?php
                      foreach ($result as $fila){

                      ?>
                      <tr>
                        <td scope="row"><?=$fila['cedula'];?></td>
                        <td><?=$fila['nombre'];?></td>
                        <td><?=$fila['total'];?></td>
                      </tr>
                      <?php
                       }
                      ?>
                    </tbody>	
                    
 		 	<?php
 		    }  

 		echo "</table>";
		
  }
        


 
mysqli_close($conn);
?>