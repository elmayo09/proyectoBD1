<?php
require("conn.php");
include("header.php");

$consulta= $_POST["consulta"];

if ($consulta=="Consultar empleados sin calificaciones recibidas") {
	$query="SELECT *
  		FROM empleado e
 		WHERE NOT EXISTS (SELECT 1
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
	$query="select * 
  from empleado 
  where cedula IN
  (select cedula 
   from
    (select creador as cedula, categoria, count(*) as c
    from calificacion 
    group by creador, categoria
    having count(*)>1) as FILTRO1
      NATURAL JOIN
    (select creador as cedula, categoria, count(creador) as c
    from calificacion
    group by creador) as FILTRO2)";
}
$result = mysqli_query($conn, $query) or 
		die(mysqli_error($conn));
 
 if($result){
 		
 		echo '<table class="table table-bordered table-dark">';

 		if($consulta=="Empleados con numero de calificaciones realizadas"){
 		 	?>
 		 	<thead class="thead-dark">
                  <tr>
                        <div style="color:white">
                        <h4 >Empleados con numero de calificaciones realizadas
                       </h4>
                       </div>
                    </tr>
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
    else if($consulta=="Consultar empleados sin calificaciones recibidas") {

      ?>
      <thead class="thead-dark">
                            <tr>
                        <div style="color:white">
                        <h4 >Empleados sin calificaciones recibidas
                       </h4>
                       </div>
                    </tr>
                    <tr>
                     <th scope="col">Cedula</th>
                     <th scope="col">Nombre</th>
                     <th scope="col">Teléfono</th>
                     <th scope="col">Fecha de nacimiento</th>
                     <th scope="col">Cuenta de banco</th>
                     <th scope="col">Correo</th>
                     <th scope="col">Tipo</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
                      foreach ($result as $fila){

                      ?>
                      <tr>
                        <td scope="row"><?=$fila['cedula'];?></td>
                        <td><?=$fila['nombre'];?></td>
                        <td><?=$fila['telefono'];?></td>
                        <td><?=$fila['fecha_nacimiento'];?></td>
                        <td><?=$fila['cuenta_banco'];?></td>
                        <td><?=$fila['correo'];?></td>
                        <td><?=$fila['tipo'];?></td>

                      </tr>
                      <?php
                       }
                      ?>
                    </tbody>  

      <?php
      } 





          else  {

      ?>
      <thead class="thead-dark">
                    <tr>
                        <div style="color:white">
                        <h4 >Empleados que han recibido todas las calificaciones de la misma categoria
                       </h4>
                       </div>
                    </tr>
                    <tr>
                     <th scope="col">Cedula</th>
                     <th scope="col">Nombre</th>
                     <th scope="col">Teléfono</th>
                     <th scope="col">Fecha de nacimiento</th>
                     <th scope="col">Cuenta de banco</th>
                     <th scope="col">Correo</th>
                     <th scope="col">Tipo</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
                      foreach ($result as $fila){

                      ?>
                      <tr>
                        <td scope="row"><?=$fila['cedula'];?></td>
                        <td><?=$fila['nombre'];?></td>
                        <td><?=$fila['telefono'];?></td>
                        <td><?=$fila['fecha_nacimiento'];?></td>
                        <td><?=$fila['cuenta_banco'];?></td>
                        <td><?=$fila['correo'];?></td>
                        <td><?=$fila['tipo'];?></td>

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