<?php
include("header.php");

?>

 <div class="container mt-3">
 	<div class="card">
 		<div class="card-header" align="center">
            Realizar consultas
        </div>
        <div class="card-body">
        	<form action="realizar_consultas.php" class="form-group" method="post">
        		<div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Consultar empleados sin calificaciones recibidas" name=consulta>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Empleados con numero de calificaciones realizadas" name=consulta>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Empleados que han recibido todas las calificaciones de la misma categoria" name=consulta>
                </div>
        	</form>
        </div>

 	</div>

 </div>