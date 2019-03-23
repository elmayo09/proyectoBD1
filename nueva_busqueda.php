<?php
require("conn.php");
include("header.php");

$consulta= $_POST["consulta"];

if ($consulta=="Buscar calificaciones") {

	$codigo= $_POST["cedula_empleado"];
	
		$c=(string)$codigo;
	$query="select * from calificacion
		where(creador = ".$c.")";
	
	

		
}else{
	$codigo= $_POST["codigo_calificacion"];
	$c=(string)$codigo;
	$query="SELECT w.categoria, e.*
			FROM empleado e NATURAL JOIN (SELECT creador as cedula, categoria
                		FROM calificacion
                		WHERE categoria IN (SELECT categoria
                                    FROM calificacion
                                    WHERE codigo=".$c."))as w";
}

$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

 	if($result and mysqli_num_rows($result)!=0){
        
        echo '<table class="table table-bordered table-dark">';

 		if($consulta=="Buscar calificaciones"){
 		 	?>
 		 	<thead class="thead-dark">
                  <tr>
                        <div style="color:white">
                        <h4 >Calificaciones realizadas por el empleado
							 con cedula: <?=$codigo?>
                       </h4>
                       </div>
                    </tr>
                    <tr>
                     <th scope="col">Codigo</th>
                     <th scope="col">Cedula creador</th>
                     <th scope="col">Comentario</th>
                     <th scope="col">Categoria</th>
                     <th scope="col">Puntuacion</th>
                     <th scope="col">Cedula asignatario</th>
                    </tr>
                </thead>
                    <tbody>
                     <?php
                      foreach ($result as $fila){

                      ?>
                      <tr>
                        <td scope="row"><?=$fila['codigo'];?></td>
                        <td><?=$fila['creador'];?></td>
                        <td><?=$fila['comentario'];?></td>
                        <td><?=$fila['categoria'];?></td>
                        <td><?=$fila['puntuacion'];?></td>
                        <td><?=$fila['asignatario'];?></td>
                      </tr>
                      <?php
                       }
                      ?>
                    </tbody>	
                    
 		 	<?php
 		    }else{
 		    	?>

				<thead class="thead-dark">
                  <tr>
                        <div style="color:white">
                        <h4 >Empleados creadores de calificaciones de la misma categoria del codigo: <?=$codigo?>
                       </h4>
                       </div>
                    </tr>
                    <tr>
                     <th scope="col">Categoria</th>
                     <th scope="col">Cedula empleado</th>
                     <th scope="col">Nombre</th>
                     <th scope="col">Telefono</th>
                     <th scope="col">Fecha de nacimiento</th>
                     <th scope="col">Numero cuenta bancaria</th>
                     <th scope="col">Coreo</th>
                     <th scope="col">Tipo</th>
                    </tr>
                </thead>
                    <tbody>
                     <?php
                      foreach ($result as $fila){

                      ?>
                      <tr>
                        <td scope="row"><?=$fila['categoria'];?></td>
                        <td><?=$fila['cedula'];?></td>
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

         
 	}else{
 		echo '<div class="alert alert-danger" role="alert">
  			No hay resultados!
			</div>';
 	}
 
 mysqli_close($conn);

?>